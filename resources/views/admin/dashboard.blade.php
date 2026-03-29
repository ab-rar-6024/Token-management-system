<x-app-layout>
<div class="p-6">

<h2 class="text-2xl font-bold mb-4 text-white">Admin Dashboard</h2>

<table class="w-full bg-white rounded shadow">
<tr class="bg-gray-200 text-black">
    <th class="p-3">Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Update</th>
</tr>

@foreach($tokens as $token)
<tr class="border text-black">
    <td class="p-3">{{ $token->title }}</td>
    <td>{{ $token->description }}</td>
    <td>{{ $token->status }}</td>
    <td>
        <form method="POST" action="/admin/update/{{ $token->id }}">
            @csrf
            <select name="status" class="border p-1">
                <option>Pending</option>
                <option>In Progress</option>
                <option>Completed</option>
            </select>
            <button class="bg-blue-500 text-white px-2 py-1">
                Update
            </button>
        </form>
    </td>
</tr>
@endforeach

</table>

</div>
</x-app-layout>