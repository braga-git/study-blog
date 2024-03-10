<x-layout>
    <header class="mb-8">
        <h1 class="text-2xl font-semibold">Manage users</h1>
    </header>

    <ul class="mb-8">
        <li>
            <button
                class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100">
                <a href="/register"><i class="fa-solid fa-user mr-2"></i> Register user</a>
            </button>
        </li>
    </ul>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless ($users->isEmpty())
                @foreach ($users as $user)
                    <tr class="border-gray-300">
                        <td class="px-4 py-4 border-t border-b border-gray-300 text-lg">
                            <a href="/users/{{ $user->id }}">
                                {{ $user['id'] }}
                            </a>
                        </td>
                        <td class="px-4 py-4 border-t border-b border-gray-300 text-lg">
                            <a href="/users/{{ $user->id }}">
                                {{ $user['name'] }}
                            </a>
                        </td>
                        <td class="sm:table-cell hidden px-4 py-4 border-t border-b border-gray-300 text-lg">
                            <a href="/users/{{ $user->id }}">
                                {{ $user['email'] }}
                            </a>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300 text-lg">
                            <button class="text-gray-700">
                                <a href="/users/{{ $user->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            </button>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300 text-lg">
                            <form method="POST" action="/users/{{ $user->id }}" class="text-red-500">
                                @csrf
                                @method('DELETE')
                                <button><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>
                        <p>No users found!</p>
                    </td>
                </tr>
            @endunless
        </tbody>
    </table>
</x-layout>
