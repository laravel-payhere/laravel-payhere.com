<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=ubuntu:400,500" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="bg-black font-sans antialiased">
        <div class="bg-gradient-to-b from-blue-700 to-black">
            <img src="{{ Vite::asset("resources/images/hero-background.png") }}" class="opacity-50" alt="Hero Background" />
        </div>
        <div class="absolute top-0 w-full px-5 md:px-10 lg:px-32">
            <nav class="flex items-center justify-between py-5">
                <img src="{{ Vite::asset("resources/images/logo@1.svg") }}" class="h-[50px]" alt="Laravel PayHere Logo" />
                <div class="hidden gap-8 lg:inline-flex">
                    <a href="#" class="cursor-pointer rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-black hover:bg-opacity-15">Features</a>
                    <a href="#" class="cursor-pointer rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-black hover:bg-opacity-15">Docs</a>
                    <a href="#" class="cursor-pointer rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-black hover:bg-opacity-15">Changelog</a>
                    <a href="#" class="cursor-pointer rounded-xl bg-white bg-opacity-10 px-4 py-2 text-sm font-medium text-white transition-all hover:bg-opacity-15">Buy now</a>
                </div>
            </nav>
        </div>
        <footer class="flex justify-center">
            <img src="{{ Vite::asset("resources/images/logo@2.svg") }}" alt="Laravel PayHere Logo" width="h-[50px]" />
        </footer>
    </body>
</html>
