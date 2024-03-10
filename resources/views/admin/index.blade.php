<x-layout>
    <div>
        <header class="mb-8">
            <h1 class="text-2xl font-semibold">Admin panel</h1>
        </header>

        <ul class="grid lg:grid-cols-3 sm:grid-cols-2 gap-4">
            <li>
                <button
                    class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100">
                    <a href="/admin/posts"><i class="fa-solid fa-bars mr-2"></i> Manage posts</a>
                </button>
            </li>
            <li>
                <button
                    class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100">
                    <a href="/admin/users"><i class="fa-solid fa-user mr-2"></i> Manage users</a>
                </button>
            </li>
        </ul>
    </div>
</x-layout>
