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

<body class="relative min-h-screen flex flex-col bg-porcelain font-sans max-w-455">
    <header class="sticky top-0 z-50 w-full">
        <x-navbar.navbar />
    </header>

    <main class="flex-1 {{ $class }}">
        {{ $slot }}
    </main>
</body>
</html>
