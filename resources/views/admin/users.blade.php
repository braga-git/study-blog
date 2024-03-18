<x-layout>
    <header class="mb-8">
        <h1 class="text-2xl font-semibold">Manage users</h1>
    </header>

    <button onclick="location.href='/create'"
        class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100 mb-8">
        <i class="fa-solid fa-user mr-2"></i> Register user
    </button>

    <x-search :action="'/admin/users'" />

    @php
        foreach ($users as $user) {
            $user['role'] = $user->getRoleNames()->first();
        }
    @endphp

    <x-table :tableHead="['id', 'name', 'role', 'email']" :tableData="$users" :editRouteAndParam="'user.edit'" :deleteRouteAndParam="'user.destroy'" />
</x-layout>
