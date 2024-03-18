@props(['post'])

<div {{ $attributes->merge(['class' => 'bg-transparent overflow-hidden hover:cursor-pointer']) }}
    onclick="location.href='/posts/{{ $post['id'] }}'">
    <div class="w-full overflow-hidden">
        <img class="w-full object-cover h-60"
            src="{{ $post->banner ? asset('storage/' . $post->banner) : asset('images/default_image.png') }}"
            alt="banner" />
    </div>
    <div class="py-4 flex flex-col">
        <span class="text-xs text-stone-500">
            {{ $post['updated_at']->format('M 2, Y | h:i A') }}
        </span>
        <h3 class="md:text-xl text-base font-semibold my-3">
            {{ $post['title'] }}
        </h3>
        <p class="mb-4 text-sm text-stone-400">
            {{ $post['description'] }}
        </p>

        <x-post-tags class="border-stone-400 text-stone-400 hover:text-white hover:border-black hover:bg-black" :tagsCsv="$post->tags" />
    </div>
</div>
