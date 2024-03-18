@props(['posts'])

<div class="grid lg:grid-cols-3 sm:grid-cols-2 md:gap-12 gap-8">
    @if (count($posts) == 0)
        <p>No posts found!</p>
    @endif
    @foreach ($posts as $post)
        <x-post-card :post="$post" />
    @endforeach
</div>
