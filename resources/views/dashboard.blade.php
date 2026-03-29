<x-app-layout>
    <div class="p-6 text-black">

        <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

        <!-- STATS (CLICKABLE CARDS) -->
        <div class="grid grid-cols-3 gap-6 mb-6">

            <a href="/tokens"
               class="bg-blue-600 text-white p-6 rounded shadow block hover:scale-105 transition">
                <h2>Total Tokens</h2>
                <p class="text-2xl font-bold">
                    {{ \App\Models\Token::count() }}
                </p>
            </a>

            <a href="/tokens?status=Pending"
               class="bg-yellow-500 text-white p-6 rounded shadow block hover:scale-105 transition">
                <h2>Pending</h2>
                <p class="text-2xl font-bold">
                    {{ \App\Models\Token::where('status','Pending')->count() }}
                </p>
            </a>

            <a href="/tokens?status=Completed"
               class="bg-green-600 text-white p-6 rounded shadow block hover:scale-105 transition">
                <h2>Completed</h2>
                <p class="text-2xl font-bold">
                    {{ \App\Models\Token::where('status','Completed')->count() }}
                </p>
            </a>

        </div>

        <!-- CHART -->
        <div class="bg-white p-6 rounded shadow mb-6">
            <canvas id="tokenChart"></canvas>
        </div>

        <!-- BUTTONS -->
        <div class="flex gap-4">

            <a href="/tokens"
               class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">
                My Tokens
            </a>

            <a href="/tokens/create"
               class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600">
                Create Token
            </a>

            @if(auth()->user()->role === 'admin')
            <a href="/admin"
               class="bg-red-500 text-white px-6 py-3 rounded hover:bg-red-600">
                Admin Panel
            </a>
            @endif

        </div>

    </div>

    <!-- CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('tokenChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total', 'Pending', 'Completed'],
                datasets: [{
                    label: 'Token Stats',
                    data: [
                        {{ \App\Models\Token::count() }},
                        {{ \App\Models\Token::where('status','Pending')->count() }},
                        {{ \App\Models\Token::where('status','Completed')->count() }}
                    ],
                    backgroundColor: [
                        '#2563eb',   // blue
                        '#f59e0b',   // yellow
                        '#16a34a'    // green
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true
                    }
                }
            }
        });
    </script>

</x-app-layout>