<x-layout>
    <header>
        <h1 class="text-2xl font-semibold">Create new post</h1>
    </header>

    <hr class="my-8">

    <form method="POST" autocomplete="off" action="/posts" enctype="multipart/form-data" class="flex flex-col gap-8">
        @csrf
        <div>
            <label for="title" class="inline-block mb-2">Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                value="{{ old('title') }}" />

            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="inline-block mb-2">Description</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="5">{{ old('description') }}</textarea>

            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="text" class="inline-block mb-2">Text</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="text" rows="10">{{ old('text') }}</textarea>

            @error('text')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="tags" class="inline-block mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Frontend, Backend, Laravel" value="{{ old('tags') }}" />

            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="importance" class="inline-block mb-2">
                Importance
            </label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="importance" placeholder="1-5"
                min="1" max="5" value="{{ old('importance') }}" />

            @error('importance')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="inline-block mb-2">Status</label>
            <select class="bg-white border border-gray-200 rounded p-2 py-2.5 w-full" name="status">
                @foreach (['active', 'inactive'] as $status)
                    <option class="p-2.5" value="{{ $status }}"
                        {{ old('status') == $status ? 'selected' : '' }}>{{ ucfirst(trans($status)) }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="banner" class="inline-block mb-2">
                Banner
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="banner" />

            @error('banner')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                Create post
            </button>
            <button class="bg-gray-50 text-gray-700 border border-gray-200 rounded py-2 px-4 hover:bg-gray-100">
                <a href="/">Back</a>
            </button>
        </div>
    </form>
</x-layout>
