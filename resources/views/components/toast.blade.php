@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-20 right-4 p-3 px-6 bg-green-400 rounded opacity-90 text-white font-semibold">
  <p>
    {{session('message')}}
  </p>
</div>
@endif