<x-layout>
    <header class="mb-8">
        <h1 class="text-2xl font-semibold">Manage post</h1>
    </header>

    <ul class="mb-8">
        <li>
            <button onclick="location.href='/posts/create'"
                class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100">
                <i class="fa-solid fa-file-lines mr-2"></i> Create post
            </button>
        </li>
    </ul>

    <table class="w-full table-auto rounded-sm">
        <thead>
            <tr>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">ID</td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">Title</td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">Last modified on</td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold"></td>
                <td class="px-4 py-4 border-b border-gray-300 font-semibold"></td>
            </tr>
        </thead>
        <tbody>
            @unless ($posts->isEmpty())
                @foreach ($posts as $post)
                    <tr class="border-gray-300">
                        <td class="px-4 py-4 border-t border-b border-gray-300">
                            <a href="/posts/{{ $post->id }}">
                                {{ $post['id'] }}
                            </a>
                        </td>
                        <td class="px-4 py-4 border-t border-b border-gray-300">
                            <a href="/posts/{{ $post->id }}">
                                {{ $post['title'] }}
                            </a>
                        </td>
                        <td class="px-4 py-4 border-t border-b border-gray-300">
                            <a href="/posts/{{ $post->id }}">
                                {{ $post['updated_at']->format('d/m/Y H:i:s') }}
                            </a>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300">
                            <button class="text-gray-700">
                                <a href="/posts/{{ $post->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            </button>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300">
                            <form method="POST" autocomplete="off" action="/posts/{{ $post->id }}" class="text-red-500">
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
                        <p>No posts found!</p>
                    </td>
                </tr>
            @endunless
        </tbody>
    </table>
</x-layout>