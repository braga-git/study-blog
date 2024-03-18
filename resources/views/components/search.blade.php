@props(['action'])

<form action="{{ $action }}">
    <div class="relative border-b border-stone-800 my-6">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search fa-lg text-stone-600 z-20"></i>
        </div>
        <input type="text" name="search" class="h-14 w-full pl-12 pr-20 bg-transparent text-white rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search.."/>
        <div class="absolute top-2 right-2">
            <button type="submit" class="h-10 w-20 text-stone-800 bg-transparent border border-stone-800">
                Search
            </button>
        </div>
    </div>
</form>
