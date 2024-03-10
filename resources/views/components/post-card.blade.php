@props(['post'])

<div class="bg-gray-50 border border-gray-200 rounded overflow-hidden">
    <div class="w-full overflow-hidden">
        <img class="w-full object-cover md:h-60 h-40" src="{{ $post->banner ? asset('storage/' . $post->banner) : asset('images/default_image.jpg') }}" alt="" />
    </div>
    <div class="p-6 flex flex-col">
        <span class="text-sm font-semibold">
            {{ $post['updated_at'] }}
        </span>
        <h3 class="text-xl font-semibold my-4">
            <a href="/posts/{{ $post['id'] }}">
                {{ $post['title'] }}
            </a>
        </h3>
        <p class="mb-4">
            {{ $post['description'] }}
        </p>

        <x-post-tags :tagsCsv="$post->tags"/>
    </div>
</div>
