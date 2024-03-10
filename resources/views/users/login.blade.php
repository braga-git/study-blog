<x-layout>
    <header>
        <h1 class="text-2xl font-semibold">Login</h1>
    </header>

    <hr class="my-8">

    <form method="POST" action="/users/authenticate" class="flex flex-col gap-8">
        @csrf
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

        <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
            Sign In
        </button>
    </form>
</x-layout>
