@props([
    'title' => 'FINDIT',
    'class' => ''
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="relative min-h-screen bg-porcelain font-sans">
    <div class="mx-auto flex min-h-screen w-full max-w-455 flex-col">
        <header class="sticky top-0 z-50 w-full">
            <x-navbar.navbar />
        </header>

        <main class="flex-1 {{ $class }}">
            {{ $slot }}
        </main>

        <footer class="bg-china flex flex-col px-10 py-10">
            <div class="flex gap-120">
                <img src="{{ asset('assets/logo.png') }}" class="logo w-120" alt="FindIt logo">

                <div class="text-midnight font-semibold">
                    <div class="flex flex-col gap-4">
                        <a href="{{ route('home') }}" class="hover:underline">Home</a>
                        <a href="{{ route('auth') }}" class="hover:underline">Dashboard</a>
                        <a href="{{ route('about') }}" class="hover:underline">About</a>
                    </div>
                </div>
            </div>

            <div class="h-px bg-white/80 w-full"></div>
            <p class="text-white self-center my-6">&copy; {{ now()->year }} FindIt. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>