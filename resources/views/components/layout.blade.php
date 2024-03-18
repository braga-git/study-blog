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
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>BLOG 1 | Laravel Only</title>

    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-stone-100">
    <div class="">
        <x-nav />
    </div>

    <main class="bg-white lg:max-w-7xl mx-auto">
        {{ $slot }}
    </main>

    @if (Route::currentRouteName() == 'pages.posts')
        @auth
            <footer class="fixed bottom-0 left-0 w-full font-bold text-white h-16">
                <div class="lg:max-w-5xl w-full mx-auto px-4 flex justify-center">
                    <a href="/posts/create" class="bg-red-500 text-white py-2 px-5 rounded">Create
                        new post</a>
                </div>
            </footer>
        @endauth
    @endif
    <x-toast />
</body>

</html>
