<x-layout>
    <section class="md:px-16 px-6 bg-stone-950">
        <p class="font-bold text-center text-white" style="font-size: 8.5rem">the blog</p>
        <hr class="mt-10 border-stone-800">
        <div class="md:py-16 py-8 pb-10">
            <x-home-highlights :highlights="$highlights" />
        </div>
    </section>
    <section class="md:px-16 px-6 py-12">
        <p class="font-semibold text-stone-400">LATEST TEACHERS</p>
        <div class="py-8">
            <x-home-teachers :teachers="$teachers" />
        </div>
        <div class="text-center">
            <a href="/posts" class="text-sm text-stone-400 hover:text-black">Meet all the teachers</a>
        </div>
    </section>
    <section>
        <x-home-passports :passports="$passports" />
    </section>
    <section class="md:px-16 px-6 py-12">
        <p class="font-semibold text-stone-400">LATEST POSTS</p>
        <div class="py-8">
            <x-posts-list :posts="$posts" />
        </div>
        <div class="text-center">
            <a href="/posts" class="text-sm text-stone-400 hover:text-black">View all posts</a>
        </div>
    </section>
</x-layout>
