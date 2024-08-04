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
    <body class="h-screen bg-black bg-gradient-to-b from-blue-700 to-black font-sans antialiased">
        <main class="mx-auto grid h-full max-w-screen-2xl grid-cols-3">
            <div class="col-span-1 h-full place-content-center px-14 py-10">
                <a href="/">
                    <img src="{{ Vite::asset("resources/images/logo@1.svg") }}" class="h-[50px]" alt="Laravel PayHere Logo" />
                </a>
                <nav aria-label="breadcrumb" class="mt-10">
                    <ol class="inline-flex items-center gap-2 text-sm">
                        <li class="font-semibold text-white"><a href="/">Home</a></li>
                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.8125 3.125L9.1875 7.5L4.8125 11.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <li class="font-semibold text-yellow-500" aria-current="page">Payment</li>
                    </ol>
                </nav>
                <div class="mt-20">
                    <form action="#">
                        <div class="text-lg font-semibold text-white">Please enter your details</div>
                        <p class="mt-2 text-sm text-white">We collect this information to process your license and send it to you.</p>
                        <div class="mt-10 flex flex-col gap-5">
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-base text-white">Your name</label>
                                <input id="name" name="name" type="text" class="block w-full rounded-md border-0 bg-black bg-opacity-15 px-3 py-1.5 text-base text-white ring-1 ring-inset ring-gray-300 ring-opacity-15 placeholder:text-gray-400 focus:outline-0 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:leading-6" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="email" class="text-base text-white">Email address</label>
                                <input id="email" name="email" type="text" class="block w-full rounded-md border-0 bg-black bg-opacity-15 px-3 py-1.5 text-base text-white ring-1 ring-inset ring-gray-300 ring-opacity-15 placeholder:text-gray-400 focus:outline-0 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:leading-6" />
                            </div>
                            <button type="submit" class="mt-5 w-full rounded-lg bg-yellow-500 py-2 font-semibold">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-span-2 h-full place-content-center bg-black bg-opacity-20 pl-20">
                <div class="flex flex-col">
                    <span class="text-sm text-white lg:text-base">For unlimited projects</span>
                    <h3 class="mt-1 text-3xl font-bold text-yellow-500">Perpetual License</h3>
                    <p class="py-5 text-white md:text-base lg:text-lg">Easily integrate PayHere into your Laravel application like a pro.</p>
                    <span class="font-['Ubuntu'] text-5xl font-bold text-white">Rs.30,000</span>
                </div>
            </div>
        </main>
    </body>
</html>
