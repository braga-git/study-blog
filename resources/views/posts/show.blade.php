<x-layout>
    @include('partials._search')

    <div>
        @auth
        <div class="mb-6">
            <div class="flex justify-end gap-6 mb-2">
                <button class="text-gray-700">
                    <a href="/posts/{{$post->id}}/edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                </button>
                <form method="POST" action="/posts/{{$post->id}}" class="text-red-500">
                    @csrf
                    @method('DELETE')
                    <button><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
            </div>
            <hr>
        </div>
        @endauth
        <h1 class="text-3xl font-semibold mb-4">
            {{ $post['title'] }}
        </h1>
        <p class="mb-2">
            {{ $post['description'] }}
        </p>
        <span class="text-sm font-semibold">
            {{ $post['updated_at'] }}
        </span>

        <div class="border rounded overflow-hidden my-8">
            <img class="w-full h-96 object-cover"
                src="{{ $post->banner ? asset('storage/' . $post->banner) : asset('images/default_image.jpg') }}"
                alt="">
        </div>

        <p class="my-8">
            {{ $post['text'] }}
        </p>

        <x-post-tags :tagsCsv="$post->tags" />
    </div>
</x-layout>
