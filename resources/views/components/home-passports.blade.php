@props(['passports'])

<div
    class="px-16 pt-20 sm:pb-20 pb-80 grid md:grid-cols-2 grid-cols-1 bg-[url({{ $passports->banner ? asset('storage/' . $passports->banner) : asset('images/default_image.png') }})] bg-auto bg-no-repeat sm:bg-left bg-top">
    <div class="flex flex-col sm:max-w-sm">
        <h3 class="lg:text-6xl md:text-5xl text-6xl font-semibold">
            {{ $passports['title'] }}
        </h3>
        <p class="sm:my-6 my-8 sm:text-base text-lg text-stone-400">
            {{ $passports['description'] }}
        </p>
        <button class="sm:h-10 h-12 sm:max-w-52 border border-stone-400 text-sm text-stone-400 hover:text-white hover:border-black hover:bg-black">
          Learn more
        </button>
    </div>
</div>
