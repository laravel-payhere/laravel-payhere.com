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
    <body class="h-screen bg-gradient-to-b from-blue-700 to-black font-sans antialiased">
        <main class="grid h-full grid-cols-3 pl-14">
            <div class="col-span-1 h-full py-10">
                <a href="{{ config("app.url") }}">
                    <img src="{{ Vite::asset("resources/images/logo@1.svg") }}" class="h-[50px]" alt="Laravel PayHere Logo" />
                </a>
                <nav aria-label="breadcrumb" class="mt-10">
                    <ol class="inline-flex items-center gap-2 text-sm">
                        <li class="font-semibold text-yellow-500"><a href="{{ config("app.url") }}">Home</a></li>
                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.8125 3.125L9.1875 7.5L4.8125 11.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <li class="font-semibold text-white" aria-current="page">Payment</li>
                    </ol>
                </nav>
            </div>
            <div class="col-span-2 h-full place-content-center bg-black bg-opacity-20 pl-20">
                <div class="flex flex-col">
                    <span class="text-sm text-white lg:text-base">For unlimited projects</span>
                    <h3 class="mt-1 text-3xl font-bold text-yellow-500">Perpetual License</h3>
                    <p class="py-5 text-white md:text-base lg:text-lg">Easily integrate PayHere into your Laravel application like a pro.</p>
                    <span class="font-['Ubuntu'] text-5xl font-bold text-white">Rs.30,000</span>
                    <div class="mt-10">
                        <a href="#" class="rounded-2xl bg-white bg-opacity-10 px-8 py-4 text-base font-semibold text-white">Buy Laravel PayHere</a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
