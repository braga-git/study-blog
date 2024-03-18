<x-layout>
    <div class="md:px-16 px-6 py-12">
        <x-posts-list :posts="$posts" />
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</x-layout>
