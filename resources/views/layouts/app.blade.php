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
        <link href="https://fonts.bunny.net/css?family=ubuntu:400,500,700" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="bg-black font-sans antialiased">
        <div class="bg-gradient-to-b from-blue-700 to-black">
            <img src="{{ Vite::asset("resources/images/hero-background.png") }}" class="opacity-80" alt="Hero Background" />
        </div>
        <div class="absolute top-0 w-full">
            <div class="mx-auto max-w-7xl">
                <header class="px-5 xl:px-0">
                    <nav class="flex items-center justify-between py-5">
                        <a href="{{ config("app.url") }}">
                            <img src="{{ Vite::asset("resources/images/logo@1.svg") }}" class="h-[50px]" alt="Laravel PayHere Logo" />
                        </a>
                        <div class="hidden gap-8 lg:inline-flex">
                            <a href="#" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Features</a>
                            <a href="#" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Docs</a>
                            <a href="#" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Changelog</a>
                            <a href="#" class="rounded-xl bg-white bg-opacity-10 px-4 py-2 text-sm font-medium text-white transition-all hover:bg-opacity-15">Purchase a license</a>
                        </div>
                    </nav>
                </header>

                <main>
                    @yield("content")
                </main>

                <footer class="mt-0 flex flex-col items-start gap-3 px-5 py-8 md:items-center md:gap-5 md:px-0 md:py-8 lg:mt-20">
                    <a href="{{ config("app.url") }}">
                        <img src="{{ Vite::asset("resources/images/logo@2.svg") }}" class="h-6 md:h-8" alt="Laravel PayHere Logo" />
                    </a>
                    <div class="inline-flex flex-col gap-3 md:flex-row md:gap-10">
                        <a href="#" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Privacy Policy</a>
                        <a href="#" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Terms and Conditions</a>
                        <a href="#" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Refund Policy</a>
                    </div>
                    <div class="mt-5 text-start text-sm text-white md:text-center">
                        <a href="https://payhere.lk/" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">PayHere</a>
                        is a trademark and usage of their trademark for this project has been approved by them.
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
