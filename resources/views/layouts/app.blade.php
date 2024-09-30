<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ $title }}</title>

        <meta name="title" content="PayHere for Laravel" />
        <meta name="description" content="Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin." />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ config("app.url") }}" />
        <meta property="og:title" content="PayHere for Laravel" />
        <meta property="og:description" content="Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin." />
        <meta property="og:image" content="{{ Vite::asset("resources/images/card.png") }}" />

        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("favicon-32x32.png") }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("favicon-16x16.png") }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("apple-touch-icon.png") }}" />
        <link rel="manifest" href="{{ asset("webmanifest.json") }}" />

        <link rel="canonical" href="{{ url()->current() }}" />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=ubuntu:400,500,700" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="bg-black font-sans antialiased">
        <div class="bg-gradient-to-b from-blue-700 to-black">
            <div class="z-20 h-[500px] bg-[url('/resources/images/hero-background.png')] opacity-80 lg:h-[1000px]" />
        </div>
        <div class="absolute top-0 w-full">
            <div class="mx-auto max-w-7xl">
                <header class="px-5 xl:px-0">
                    <nav x-data="{ open: false }" class="flex items-start justify-between py-5 lg:items-center">
                        <a href="/">
                            <img src="{{ Vite::asset("resources/images/logo@1.svg") }}" class="h-[50px]" alt="Laravel PayHere Logo" />
                        </a>
                        <button type="button" @click="open = !open" class="block lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                        <div x-cloak x-show="!open" class="hidden gap-8 lg:inline-flex">
                            <a href="/#features" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Features</a>
                            <a href="/docs" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Docs</a>
                            <a href="{{ route("changelog") }}" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Changelog</a>
                            <a href="{{ route("checkout") }}" class="rounded-xl bg-white bg-opacity-10 px-4 py-2 text-sm font-medium text-white transition-all hover:bg-opacity-15">Purchase a license</a>
                        </div>
                        <div x-cloak x-show="open" class="fixed right-0 top-0 z-50 ml-10 flex h-full w-10/12 flex-col gap-8 bg-black p-10" x-transition:enter="transform transition duration-300 ease-in-out" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition duration-300 ease-in-out" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                            <div class="inline-flex justify-end">
                                <button type="button" @click="open = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <a href="/#features" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Features</a>
                            <a href="/docs" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Docs</a>
                            <a href="{{ route("changelog") }}" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Changelog</a>
                            <a href="{{ route("checkout") }}" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">Purchase a license</a>
                        </div>
                    </nav>
                </header>

                <main>
                    {{ $slot }}
                </main>

                <footer class="mt-0 flex flex-col items-start gap-3 px-5 py-8 md:items-center md:gap-5 md:px-0 md:py-8 lg:mt-20">
                    <a href="{{ config("app.url") }}">
                        <img src="{{ Vite::asset("resources/images/logo@2.svg") }}" class="h-6 md:h-8" alt="Laravel PayHere Logo" />
                    </a>
                    <div class="inline-flex flex-col gap-2 md:flex-row md:gap-10">
                        <a href="{{ route("privacy-policy") }}" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Privacy Policy</a>
                        <a href="{{ route("terms") }}" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Terms and Conditions</a>
                        <a href="{{ route("refund-policy") }}" class="text-xs font-medium text-white transition-colors hover:underline md:text-sm">Refund Policy</a>
                    </div>
                    <div class="mt-5 text-start text-xs text-white md:text-center md:text-sm">
                        <a href="https://payhere.lk/" class="font-medium text-white transition-colors hover:underline">PayHere</a>
                        is a trademark and usage of their trademark for this project has been approved by them.
                    </div>
                </footer>
            </div>
        </div>
        <x-support-bubble />
    </body>
</html>
