@props(['tagsCsv'])

@php
  $tags = explode(',', $tagsCsv)
@endphp

<ul class="flex flex-wrap gap-1">
  @foreach($tags as $tag)
  <li {{ $attributes->merge(['class' => 'whitespace-nowrap px-3 py-0.5 border text-xs']) }}>
      <a href="/posts/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach
</ul>