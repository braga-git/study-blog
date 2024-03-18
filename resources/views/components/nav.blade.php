<header>
    <nav class="bg-stone-950 lg:max-w-7xl mx-auto md:px-16 px-6 text-white">
        <div class="border-b border-stone-800 md:py-12 py-6 flex justify-between items-center">
            <a class="text-2xl font-bold" href="/">my blog</a>
            <ul class="flex space-x-3">
                <div class="md:flex md:space-x-6 hidden">
                    <li>
                        <a href="/posts" class="text-xs font-semibold">LATEST POSTS</a>
                    </li>
                    <li>
                        <a href="/teachers" class="text-xs font-semibold">TEACHERS</a>
                    </li>
                    <li>
                        <a href="/faq" class="text-xs font-semibold">FAQ</a>
                    </li>
                    <li>
                        <a href="/previous-editions" class="text-xs font-semibold">PREVIOUS EDITIONS</a>
                    </li>
                    <li>
                        <a class="text-xs font-semibold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            MORE
                        </a>
                        <ul class="dropdown-menu bg-stone-800 mt-1 p-0 rounded-none">
                            <li class="border-b border-stone-600">
                                <a href="/showcase"
                                    class="dropdown-item py-2 text-xs text-white font-semibold hover:bg-stone-700">SHOWCASE</a>
                            </li>
                            <li class="border-b border-stone-600">
                                <a class="dropdown-item py-2 text-xs text-white font-semibold hover:bg-stone-700"
                                    href="/battles">BATTLES</a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 text-xs text-white font-semibold hover:bg-stone-700"
                                    href="/contact">CONTACT</a>
                            </li>
                        </ul>
                    </li>
                </div>
                @auth
                    <li>
                        <button class="text-lg text-stone-400 hover:text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-gear mr-1"></i>
                        </button>
                        <ul class="dropdown-menu bg-stone-800 mt-1 p-0 rounded-none">
                            <li class="border-b border-stone-600">
                                <a href="/"
                                    class="dropdown-item py-2 text-xs text-white font-semibold hover:bg-stone-700">ADMIN
                                    PANEL</a>
                            </li>
                            <li>
                                <form class="inline" action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item py-2 text-xs text-white font-semibold hover:bg-stone-700"
                                        type="submit" href="/"></i>
                                        LOGOUT</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
                <li class="md:hidden">
                    <button class="text-lg text-stone-400 hover:text-white toggle-offcanvas" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas" aria-controls="offcanvas">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="md:hidden offcanvas-md offcanvas-start max-w-72 p-6" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel" >
    <header class="flex justify-between items-center mb-5">
        <a class="text-2xl font-bold" href="/">my blog</a>
        <button type="button" class="-mb-1" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas" aria-label="Close">
            <i class="fa-solid fa-arrow-left fa-lg pointer-events-none"></i>
            </button>
    </header>
    <div>
        <p class="text-xs text-stone-500 font-semibold mb-2">MENU</p>
        <ul class="space-y-4">
            <li>
                <a href="/posts" class="text-2xl">LATEST POSTS</a>
            </li>
            <li>
                <a href="/teachers" class="text-2xl">TEACHERS</a>
            </li>
            <li>
                <a href="/faq" class="text-2xl">FAQ</a>
            </li>
            <li>
                <a href="/previous-editions" class="text-2xl">PREVIOUS EDITIONS</a>
            </li>
            <li class="mt-5">
                <p class="text-xs text-stone-500 font-semibold mb-2">MORE</p>
                <ul class="space-y-4">
                    <li class="">
                        <a href="/showcase" class="text-2xl">SHOWCASE</a>
                    </li>
                    <li class="">
                        <a href="/battles" class="text-2xl">BATTLES</a>
                    </li>
                    <li>
                        <a href="/contact" class="text-2xl">CONTACT</a>
                    </li>
                </ul>
            </li>
    </div>
    {{-- @auth
        <li>
            <button class="text-lg text-stone-400 hover:text-white" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa-solid fa-gear mr-1"></i>
            </button>
            <ul class="dropdown-menu bg-stone-800 mt-1 p-0 rounded-none">
                <li class="border-b border-stone-600">
                    <a href="/" class="dropdown-item py-2 text-xs text-white font-semibold hover:bg-stone-700">ADMIN
                        PANEL</a>
                </li>
                <li>
                    <form class="inline" action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item py-2 text-xs text-white font-semibold hover:bg-stone-700"
                            type="submit" href="/"></i>
                            LOGOUT</button>
                    </form>
                </li>
            </ul>
        </li>
    @endauth --}}
</div>
