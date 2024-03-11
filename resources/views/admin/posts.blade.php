<x-layout>
    <header class="mb-8">
        <h1 class="text-2xl font-semibold">Manage post</h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless ($posts->isEmpty())
                @foreach ($posts as $post)
                    <tr class="border-gray-300">
                        <td class="px-4 py-4 border-t border-b border-gray-300 text-lg">
                            <a href="/posts/{{ $post->id }}">
                                {{ $post['title'] }}
                            </a>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300 text-lg">
                            <button class="text-gray-700">
                                <a href="/posts/{{ $post->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            </button>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300 text-lg">
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
<x-layout>
    <header class="mb-8">
        <h1 class="text-2xl font-semibold">Manage post</h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless ($posts->isEmpty())
                @foreach ($posts as $post)
                    <tr class="border-gray-300">
                        <td class="px-4 py-4 border-t border-b border-gray-300 text-lg">
                            <a href="/posts/{{ $post->id }}">
                                {{ $post['title'] }}
                            </a>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300 text-lg">
                            <button class="text-gray-700">
                                <a href="/posts/{{ $post->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            </button>
                        </td>
                        <td class="px-4 border-t border-b border-gray-300 text-lg">
                            <form method="POST" action="/posts/{{ $post->id }}" class="text-red-500">
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
