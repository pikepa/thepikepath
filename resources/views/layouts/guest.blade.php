<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 bg-green-300 antialiased">
    <div class="max-w-2xl mx-auto py-16">

        <a href="{{ route('posts.index') }}" class="inline-block text-4xl font-extrabold hover:text-blue-500 transition-colours duration-100">{{ config('app.name') }}</a>

        <main class="mt-16">
            {{ $slot }}

        </main>
    </div>
</body>

</html>