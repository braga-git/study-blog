<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>BLOG 1 | Laravel Only</title>

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="mb-48">
    <nav class="bg-neutral-900 text-white py-4 mb-5">
        <div class="lg:max-w-5xl mx-auto px-4 flex justify-between items-center">
            <a class="text-2xl font-bold" href="/">BLOG 1</a>
            <ul class="flex space-x-6">
                @auth
                    <li>
                        <a href="/posts/manage"><i class="fa-solid fa-bars mr-1"></i> Manage posts</a>
                    </li>
                    <li>
                        <form class="inline" action="/logout" method="post">
                            @csrf
                            <button type="submit" href="/"><i class="fa-solid fa-right-from-bracket mr-1"></i>
                                Logout</button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="/register">Register</a>
                    </li>
                    <li>
                        <a href="/login">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <main class="lg:max-w-5xl mx-auto px-4">
        {{ $slot }}
    </main>

    <footer class="fixed bottom-0 left-0 w-full font-bold text-white h-16">
        <div class="lg:max-w-5xl w-full mx-auto px-4 flex justify-center">
            <a href="/posts/create" class="bg-red-500 text-white py-2 px-5 rounded">Create new post</a>
        </div>
    </footer>

    <x-toast />
</body>

</html>
