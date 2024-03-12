<x-layout>
    <header class="mb-8">
        <h1 class="text-2xl font-semibold">Manage users</h1>
    </header>

    <ul class="mb-8">
        <li>
            <button onclick="location.href='/register'"
                class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100">
                <i class="fa-solid fa-user mr-2"></i> Register user
            </button>
        </li>
    </ul>

    <table class="w-full table-auto rounded-sm">
        <thead>
            <tr>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">ID</td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">Name</td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">Email</td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">Role</td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold"></td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="border-gray-300">
                    <td class="px-4 py-4 border-t border-b border-gray-300">
                        <p>{{ $user['id'] }}</p>
                    </td>
                    <td class="px-4 py-4 border-t border-b border-gray-300">
                        <p>{{ $user['name'] }}</p>
                    </td>
                    <td class="px-4 py-4 border-t border-b border-gray-300">
                        <p>{{ $user['email'] }}</p>
                    </td>
                    <td class="px-4 py-4 border-t border-b border-gray-300">
                        <p>{{ ucfirst(trans($user->roles->pluck('name')->implode(''))) }}</p>
                    </td>
                    <td class="px-4 border-t border-b border-gray-300">
                        <button class="text-gray-700">
                            <a href="/users/{{ $user->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        </button>
                    </td>
                    <td class="px-4 border-t border-b border-gray-300">
                        <form method="POST" autocomplete="off" action="/users/{{ $user->id }}" class="text-red-500">
                            @csrf
                            @method('DELETE')
                            <button><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>