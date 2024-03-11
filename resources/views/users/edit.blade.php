<x-layout>
    <header>
        <h1 class="text-2xl font-semibold">Register user</h1>
    </header>

    <hr class="my-8">

    <form method="POST" autocomplete="off" action="/users/{{$user->id}}" class="flex flex-col gap-8">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="inline-block mb-2">Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                value="{{ $user->name }}" />

            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="inline-block mb-2">
                Email
            </label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ $user->email }}" />

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="inline-block mb-2">
                New password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />

            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="inline-block mb-2">
                Confirm new password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
            Update
        </button>
    </form>
</x-layout>
<x-layout>
    <header>
        <h1 class="text-2xl font-semibold">Register user</h1>
    </header>

    <hr class="my-8">

    <form method="POST" action="/users/{{$user->id}}" class="flex flex-col gap-8">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="inline-block mb-2">Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                value="{{ $user->name }}" />

            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="inline-block mb-2">
                Email
            </label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ $user->email }}" />

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="inline-block mb-2">
                New password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />

            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="inline-block mb-2">
                Confirm new password
            </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
            Update
        </button>
    </form>
</x-layout>
