<x-app-layout>
<div class="p-6">

<h2 class="text-xl font-bold mb-4">Create Token</h2>

<form method="POST" action="/tokens">
    @csrf

    <input type="text" name="title" placeholder="Title"
        class="border p-2 w-full mb-3">

    <textarea name="description" placeholder="Description"
        class="border p-2 w-full mb-3"></textarea>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Submit
    </button>
</form>

</div>
</x-app-layout>