<x-layout>
    <x-search :action="'/'" />

    <div>
        @auth
            <div class="mb-6">
                <div class="flex justify-end gap-6 mb-2">
                    <button class="text-gray-700">
                        <a href="/posts/{{ $post->id }}/edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </button>
                    <form method="POST" autocomplete="off" action="/posts/{{ $post->id }}" class="text-red-500">
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
            {{ $post['updated_at']->format('l, d/m/Y | h:i A') }}
        </span>

        <div class="border rounded overflow-hidden my-8">
            <img class="w-full h-96 object-cover"
                src="{{ $post->banner ? asset('storage/' . $post->banner) : asset('images/default_image.png') }}"
                alt="">
        </div>

        <p class="my-8">
            {{ $post['text'] }}
        </p>

        <x-post-tags :tagsCsv="$post->tags" />

        <hr class="my-16">

        <h1 class="text-3xl font-semibold mb-8">
            Take a look at this too!
        </h1>

        <div class="grid sm:grid-cols-3 grid-cols-1 gap-4 space-y-0">
            @if (count($posts) == 0)
                <p>No posts found!</p>
            @endif

            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    </div>
</x-layout>
