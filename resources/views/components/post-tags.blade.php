@props(['tagsCsv'])

@php
  $tags = explode(',', $tagsCsv)
@endphp

<ul class="flex flex-wrap gap-1">
  @foreach($tags as $tag)
  <li class="flex items-center justify-center bg-black text-white whitespace-nowrap rounded-xl py-0.5 px-3 text-xs">
      <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach
</ul>