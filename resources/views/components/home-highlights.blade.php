@props(['highlights'])

<div class="grid lg:grid-rows-3 lg:grid-flow-col gap-x-16">
    @foreach ($highlights as $key => $value)
        <div class="bg-transparent text-white overflow-hidden hover:cursor-pointer
            {{ $key == 0
                ? 'lg:row-span-3 lg:block flex md:flex-row flex-col gap-x-6 lg:border-0 border-b border-stone-800 mb-8 pb-8'
                : ($key == 1 || $key == 2
                    ? 'flex gap-x-6 pb-8 mb-8 border-b border-stone-800 sm:justify-normal justify-between'
                    : 'flex gap-x-6') }}"
            onclick="location.href='/posts/{{ $value['id'] }}'">
            <div
                class="overflow-hidden {{ $key == 0 ? 'max-w-full sm:w-full min-w-full md:min-w-72' : 'sm:order-1 order-2 md:max-w-40 max-w-44 w-full aspect-[4/3]' }}">
                <img class="object-cover {{ $key == 0 ? 'md:max-h-80 max-h-96 lg:w-full md:w-auto w-full' : 'w-full aspect-[4/3]' }}"
                    src="{{ $value->banner ? asset('storage/' . $value->banner) : asset('images/default_image.png') }}"
                    alt="banner" />
            </div>
            <div class="sm:order-2 flex flex-col {{ $key == 0 ? 'lg:py-4 md:py-0 py-4' : '' }}">
                <span class="text-xs text-stone-500">
                    {{ $value['updated_at']->format('M 2, Y | h:i A') }}
                </span>
                <h3 class="font-semibold my-3 {{ $key == 0 ? 'md:text-3xl text-2xl' : 'md:text-xl text-lg' }}">
                    {{ $value['title'] }}
                </h3>
                <p class="mb-4 text-stone-400 {{ $key != 0 ? 'hidden' : '' }}">
                    {{ $value['description'] }}
                </p>
                <x-post-tags class="border-stone-500 text-stone-500 hover:border-white hover:bg-white hover:text-black" :tagsCsv="$value->tags" />
            </div>
        </div>
    @endforeach
</div>
