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
            <div class="mx-auto max-w-7xl">
                <header class="px-5 py-10 xl:px-0">
                    <a href="{{ config("app.url") }}">
                        <img src="{{ Vite::asset("resources/images/logo@1.svg") }}" class="h-[50px]" alt="Laravel PayHere Logo" />
                    </a>
                    <nav aria-label="breadcrumb" class="mt-10">
                        <ol class="inline-flex items-center gap-2 text-sm">
                            <li class="font-semibold text-yellow-500"><a href="#">Your details</a></li>
                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.8125 3.125L9.1875 7.5L4.8125 11.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <li class="font-semibold text-white" aria-current="page">Payment</li>
                        </ol>
                    </nav>
                </header>

                <main></main>

                <footer class="mt-0 flex flex-col items-start gap-3 px-5 py-8 md:items-center md:gap-5 md:px-0 md:py-8 lg:mt-20">
                    <a href="{{ config("app.url") }}">
                        <img src="{{ Vite::asset("resources/images/logo@2.svg") }}" class="h-6 md:h-8" alt="Laravel PayHere Logo" />
                    </a>
                    <div class="inline-flex flex-col gap-2 md:flex-row md:gap-10">
                        <a href="#" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Privacy Policy</a>
                        <a href="#" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Terms and Conditions</a>
                        <a href="#" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Refund Policy</a>
                    </div>
                    <div class="mt-5 text-start text-xs text-white md:text-center md:text-sm">
                        <a href="https://payhere.lk/" class="font-medium text-white transition-colors hover:underline">PayHere</a>
                        is a trademark and usage of their trademark for this project has been approved by them.
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
