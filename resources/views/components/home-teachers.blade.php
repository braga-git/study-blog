@props(['teachers'])

<div class="grid lg:grid-cols-4 grid-cols-2 lg:gap-16 gap-6">
    @foreach ($teachers as $key => $value)
        <div class="bg-transparent overflow-hidden hover:cursor-pointer flex flex-col"
            onclick="location.href='/posts/{{ $value['id'] }}'">
            <div
                class="overflow-hidden w-full aspect-[9/16]" ">
                <img class="object-cover h-full"
                    src="{{ $value->banner ? asset('storage/' . $value->banner) : asset('images/default_image.png') }}"
                    alt="banner" />
            </div>
            <div class="flex flex-col py-4">
                <span class="text-xs text-stone-500">
                    {{ $value['updated_at']->format('M 2, Y | h:i A') }}
                </span>
                <h3 class="font-semibold my-3 text-xl">
                    {{ $value['title'] }}
                </h3>
                <p class="text-stone-400">
                    {{ $value['description'] }}
                </p>
            </div>
        </div>
    @endforeach
</div>
