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
        <meta property="og:image" content="{{ Vite::asset("resources/images/laravelpayhere-og.webp") }}" />

        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("favicon-32x32.png") }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("favicon-16x16.png") }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("apple-touch-icon.png") }}" />
        <link rel="manifest" href="{{ asset("site.webmanifest") }}" />

        <link rel="canonical" href="{{ url()->current() }}" />

        @googlefonts
        @googlefonts("ubuntu")

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="bg-black font-sans antialiased">
        <div class="bg-gradient-to-b from-blue-700 to-black">
            <div class="z-20 h-[500px] bg-[url('/resources/images/hero-background.webp')] opacity-80 lg:h-[1000px]" />
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
                            <a href="https://github.com/laravel-payhere/laravel-payhere" target="_blank" rel="noopener noreferrer nofollow" class="inline-flex gap-2 rounded-xl bg-white bg-opacity-10 px-4 py-2 text-sm font-medium text-white transition-all hover:bg-opacity-15">
                                <svg height="24" width="24" fill="currentColor" aria-hidden="true" viewBox="0 0 24 24" version="1.1" data-view-component="true" class="text-white">
                                    <path d="M12.5.75C6.146.75 1 5.896 1 12.25c0 5.089 3.292 9.387 7.863 10.91.575.101.79-.244.79-.546 0-.273-.014-1.178-.014-2.142-2.889.532-3.636-.704-3.866-1.35-.13-.331-.69-1.352-1.18-1.625-.402-.216-.977-.748-.014-.762.906-.014 1.553.834 1.769 1.179 1.035 1.74 2.688 1.25 3.349.948.1-.747.402-1.25.733-1.538-2.559-.287-5.232-1.279-5.232-5.678 0-1.25.445-2.285 1.178-3.09-.115-.288-.517-1.467.115-3.048 0 0 .963-.302 3.163 1.179.92-.259 1.897-.388 2.875-.388.977 0 1.955.13 2.875.388 2.2-1.495 3.162-1.179 3.162-1.179.633 1.581.23 2.76.115 3.048.733.805 1.179 1.825 1.179 3.09 0 4.413-2.688 5.39-5.247 5.678.417.36.776 1.05.776 2.128 0 1.538-.014 2.774-.014 3.162 0 .302.216.662.79.547C20.709 21.637 24 17.324 24 12.25 24 5.896 18.854.75 12.5.75Z"></path>
                                </svg>
                            </a>
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
                            <a href="https://github.com/laravel-payhere/laravel-payhere" target="_blank" rel="noopener noreferrer nofollow" class="rounded-full px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-white hover:bg-opacity-15">GitHub</a>
                        </div>
                    </nav>
                </header>

                <main>
                    {{ $slot }}
                </main>

                <footer class="mt-0 flex flex-col items-start gap-3 px-5 py-8 md:items-center md:gap-5 md:px-0 md:py-8 lg:mt-20">
                    <a href="/">
                        <img src="{{ Vite::asset("resources/images/logo@2.svg") }}" class="h-6 md:h-8" alt="Laravel PayHere Logo" />
                    </a>
                    <div class="mt-5 text-start text-xs text-white md:text-center md:text-sm">
                        <a href="https://payhere.lk/" rel="noreferrer nofollow noopener" target="_blank" class="font-medium text-white transition-colors hover:underline">PayHere</a>
                        is a trademark and usage of their trademark for this project has been approved by them.
                    </div>
                </footer>
            </div>
        </div>
        @umamiJS
    </body>
</html>
