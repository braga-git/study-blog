<x-layout>
    <header>
        <h1 class="text-2xl font-semibold">Register user</h1>
    </header>

    <hr class="my-8">

    <form method="POST" autocomplete="off" action="/users" class="flex flex-col gap-8">
        @csrf
        <div>
            <label for="name" class="inline-block mb-2">Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                value="{{ old('name') }}" />

            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="inline-block mb-2">
                Email
            </label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ old('email') }}" />

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="inline-block mb-2">
                Password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                value="{{ old('password') }}" />

            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="inline-block mb-2">
                Confirm Password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                value="{{ old('password_confirmation') }}" />

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="inline-block mb-2">Role</label>
            <select class="bg-white border border-gray-200 rounded p-2 py-2.5 w-full" name="role">
                @foreach ($roles as $role)
                    <option class="p-2.5" value="{{ $role['name'] }}"
                        {{ old('role') == $role['name'] ? 'selected' : '' }}>{{ ucfirst(trans($role->name)) }}</option>
                @endforeach
            </select>
        </div>

        <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
            Register
        </button>
    </form>
</x-layout>
