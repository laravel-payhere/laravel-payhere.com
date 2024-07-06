<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=Figtree" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black font-sans antialiased">
    <div class="bg-gradient-to-b from-blue-700 to-black">
        <img src="{{ Vite::asset('resources/images/hero-background.png') }}" class="opacity-50" alt="Hero Background">
    </div>
    <div class="absolute w-full top-0">
        <div>Laravel</div>
        <div class="font-['Ubuntu']">PayHere</div>
    </div>
</body>
</html>
