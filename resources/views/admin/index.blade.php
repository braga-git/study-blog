<x-layout>
    <div>
        <header class="mb-8">
            <h1 class="text-2xl font-semibold">Admin panel</h1>
        </header>

        <ul class="grid lg:grid-cols-3 sm:grid-cols-2 gap-4">
            <li>
                <button onclick="location.href='/admin/posts'"
                    class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100">
                    <i class="fa-solid fa-bars mr-2"></i> Manage posts
                </button>
            </li>
            @can('view users')
                <li>
                    <button onclick="location.href='/admin/users'"
                        class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100">
                        <i class="fa-solid fa-user mr-2"></i> Manage users
                    </button>
                </li>
            @endcan
        </ul>
    </div>
</x-layout>
