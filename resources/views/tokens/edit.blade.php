<x-app-layout>
<div class="p-6 text-white">

<h2 class="text-xl font-bold mb-4">Edit Token</h2>

<form method="POST" action="/tokens/update/{{ $token->id }}">
    @csrf

    <input type="text" name="title" value="{{ $token->title }}"
        class="border p-2 w-full mb-3 text-black">

    <textarea name="description"
        class="border p-2 w-full mb-3 text-black">{{ $token->description }}</textarea>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>

</div>
</x-app-layout>