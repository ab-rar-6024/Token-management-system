<x-app-layout>
<div class="p-6">

<h2 class="text-2xl font-bold mb-4 text-white">My Tokens</h2>
<div class="mb-4">
    <a href="/dashboard" class="bg-gray-500 text-white px-4 py-2 rounded">
        ← Back to Dashboard
    </a>
</div>
<a href="/tokens/create"
   class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
   + Create Token
</a>

<table class="w-full mt-4 border bg-white rounded shadow">
<tr class="bg-gray-200 text-black">
    <th class="p-3">Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Actions</th>
</tr>

@foreach($tokens as $token)
<tr class="border text-black">
    <td class="p-3">{{ $token->title }}</td>
    <td>{{ $token->description }}</td>
    <td>
        <span class="px-2 py-1 rounded 
        @if($token->status=='Pending') bg-yellow-300
        @elseif($token->status=='Completed') bg-green-400
        @else bg-blue-400 @endif">
            {{ $token->status }}
        </span>
    </td>
    <td>
        <a href="/tokens/edit/{{ $token->id }}"
           class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>

        <form action="/tokens/delete/{{ $token->id }}"
              method="POST" class="inline">
            @csrf
            <button class="bg-red-500 text-white px-2 py-1 rounded">
                Delete
            </button>
        </form>
    </td>
</tr>
@endforeach

</table>

</div>
</x-app-layout>