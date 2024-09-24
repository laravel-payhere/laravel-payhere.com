<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Checkout - Laravel PayHere</title>

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
        <link rel="manifest" href="{{ asset("site.webmanifest") }}" />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=ubuntu:400,500,700" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600" rel="stylesheet" />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="min-h-screen bg-black bg-gradient-to-b from-blue-700 to-black font-sans antialiased">
        <main class="mx-auto grid h-full max-w-screen-2xl grid-cols-1 lg:grid-cols-3">
            <div class="order-2 col-span-1 h-full place-content-start px-5 py-10 lg:order-1 lg:px-14">
                <div class="hidden lg:block">
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
                </div>
                <div class="mt-0 lg:mt-20">
                    <form id="checkoutForm" action="{{ $data["action"] }}" method="post">
                        <div class="text-base font-semibold text-white md:text-lg">Please enter your details</div>
                        <p class="mt-2 text-xs text-white md:text-sm">We collect this information to process your license and send it to you.</p>
                        <div class="mt-10 flex flex-col gap-5">
                            <div class="flex flex-col gap-2">
                                <label for="firstName" class="text-base text-white">First name</label>
                                <input id="firstName" name="first_name" type="text" class="block w-full rounded-md border-0 bg-black bg-opacity-15 px-3 py-1.5 text-base text-white ring-1 ring-inset ring-gray-300 ring-opacity-15 placeholder:text-gray-400 focus:outline-0 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:leading-6" required />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="lastName" class="text-base text-white">Last name</label>
                                <input id="lastName" name="last_name" type="text" class="block w-full rounded-md border-0 bg-black bg-opacity-15 px-3 py-1.5 text-base text-white ring-1 ring-inset ring-gray-300 ring-opacity-15 placeholder:text-gray-400 focus:outline-0 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:leading-6" required />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="email" class="text-base text-white">Email address</label>
                                <input id="email" name="email" type="email" class="block w-full rounded-md border-0 bg-black bg-opacity-15 px-3 py-1.5 text-base text-white ring-1 ring-inset ring-gray-300 ring-opacity-15 placeholder:text-gray-400 focus:outline-0 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:leading-6" required />
                            </div>
                            <button type="submit" class="mt-5 w-full rounded-lg bg-yellow-500 py-2 font-semibold">Continue</button>
                            <p class="text-start text-xs text-gray-300">
                                We will securely share your data with payhere.lk, dasun.dev, and this website to process your order. See our
                                <a href="{{ route("privacy-policy") }}" class="underline">privacy policy</a>
                                for details.
                            </p>
                        </div>

                        @php
                            unset($data["customer"]["first_name"]);
                            unset($data["customer"]["last_name"]);
                            unset($data["customer"]["email"]);
                        @endphp

                        @foreach ($data["customer"] as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}" />
                        @endforeach

                        @isset($data["recurring"])
                            <input type="hidden" name="recurrence" value="{{ $data["recurring"]["recurrence"] }}" />
                            <input type="hidden" name="duration" value="{{ $data["recurring"]["duration"] }}" />
                        @endisset

                        @isset($data["platform"])
                            <input type="hidden" name="platform" value="{{ $data["platform"] }}" />
                        @endisset

                        @isset($data["startup_fee"])
                            <input type="hidden" name="startup_fee" value="{{ $data["startup_fee"] }}" />
                        @endisset

                        @isset($data["custom_1"])
                            <input type="hidden" name="custom_1" value="{{ $data["custom_1"] }}" />
                        @endisset

                        @isset($data["custom_2"])
                            <input type="hidden" name="custom_2" value="{{ $data["custom_2"] }}" />
                        @endisset

                        @isset($data["title"])
                            <input type="hidden" name="items" value="{{ $data["title"] }}" />
                        @endisset

                        @foreach ($data["items"] as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}" />
                        @endforeach

                        <input type="hidden" name="merchant_id" value="{{ $data["merchant_id"] }}" />
                        <input type="hidden" name="notify_url" value="{{ $data["notify_url"] }}" />
                        <input type="hidden" name="return_url" value="{{ $data["return_url"] }}" />
                        <input type="hidden" name="cancel_url" value="{{ $data["cancel_url"] }}" />
                        <input type="hidden" name="order_id" value="{{ $data["order_id"] }}" />
                        <input type="hidden" name="currency" value="{{ $data["currency"] }}" />
                        <input type="hidden" name="amount" value="{{ $data["amount"] }}" />
                        <input type="hidden" name="hash" value="{{ $data["hash"] }}" />
                    </form>
                </div>
            </div>
            <div class="order-1 col-span-2 h-full place-content-start bg-none px-5 pb-10 pt-10 lg:order-2 lg:bg-black lg:bg-opacity-20 lg:px-14 lg:pl-20 lg:pt-[15rem]">
                <div class="block lg:hidden">
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
                </div>
                <div class="mt-20 flex flex-col lg:mt-0">
                    <span class="text-sm text-white lg:text-base">For unlimited projects</span>
                    <h3 class="mt-1 text-3xl font-bold text-yellow-500">Perpetual License</h3>
                    <p class="py-5 text-white md:text-base lg:text-lg">Easily integrate PayHere into your Laravel application like a pro.</p>
                    <span class="font-['Ubuntu'] text-4xl font-bold text-white lg:text-5xl">Rs.30,000</span>
                    <div class="mt-10 flex flex-wrap gap-2 sm:gap-5">
                        <ul class="flex flex-col gap-x-5 gap-y-2">
                            <li class="inline-flex items-center gap-2 text-sm text-white md:text-base">
                                <svg class="size-4" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_152_202)">
                                        <path d="M13.5 26.2275C20.6799 26.2275 26.5 20.4074 26.5 13.2275C26.5 6.04764 20.6799 0.227539 13.5 0.227539C6.3201 0.227539 0.5 6.04764 0.5 13.2275C0.5 20.4074 6.3201 26.2275 13.5 26.2275Z" fill="#2447D7" />
                                        <path d="M7.6167 14.0681L10.9785 17.4299L19.3831 9.02539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_202">
                                            <rect width="26" height="26" fill="white" transform="translate(0.5 0.227539)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                All PayHere APIs
                            </li>
                            <li class="inline-flex items-center gap-2 text-sm text-white md:text-base">
                                <svg class="size-4" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_152_202)">
                                        <path d="M13.5 26.2275C20.6799 26.2275 26.5 20.4074 26.5 13.2275C26.5 6.04764 20.6799 0.227539 13.5 0.227539C6.3201 0.227539 0.5 6.04764 0.5 13.2275C0.5 20.4074 6.3201 26.2275 13.5 26.2275Z" fill="#2447D7" />
                                        <path d="M7.6167 14.0681L10.9785 17.4299L19.3831 9.02539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_202">
                                            <rect width="26" height="26" fill="white" transform="translate(0.5 0.227539)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Webhook protection
                            </li>
                            <li class="inline-flex items-center gap-2 text-sm text-white md:text-base">
                                <svg class="size-4" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_152_202)">
                                        <path d="M13.5 26.2275C20.6799 26.2275 26.5 20.4074 26.5 13.2275C26.5 6.04764 20.6799 0.227539 13.5 0.227539C6.3201 0.227539 0.5 6.04764 0.5 13.2275C0.5 20.4074 6.3201 26.2275 13.5 26.2275Z" fill="#2447D7" />
                                        <path d="M7.6167 14.0681L10.9785 17.4299L19.3831 9.02539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_202">
                                            <rect width="26" height="26" fill="white" transform="translate(0.5 0.227539)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Filament panel
                            </li>
                        </ul>
                        <ul class="flex flex-col gap-x-5 gap-y-2 lg:flex-nowrap">
                            <li class="inline-flex items-center gap-2 text-sm text-white md:text-base">
                                <svg class="size-4" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_152_202)">
                                        <path d="M13.5 26.2275C20.6799 26.2275 26.5 20.4074 26.5 13.2275C26.5 6.04764 20.6799 0.227539 13.5 0.227539C6.3201 0.227539 0.5 6.04764 0.5 13.2275C0.5 20.4074 6.3201 26.2275 13.5 26.2275Z" fill="#2447D7" />
                                        <path d="M7.6167 14.0681L10.9785 17.4299L19.3831 9.02539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_202">
                                            <rect width="26" height="26" fill="white" transform="translate(0.5 0.227539)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                1 year of updates
                            </li>
                            <li class="inline-flex items-center gap-2 text-sm text-white md:text-base">
                                <svg class="size-4" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_152_202)">
                                        <path d="M13.5 26.2275C20.6799 26.2275 26.5 20.4074 26.5 13.2275C26.5 6.04764 20.6799 0.227539 13.5 0.227539C6.3201 0.227539 0.5 6.04764 0.5 13.2275C0.5 20.4074 6.3201 26.2275 13.5 26.2275Z" fill="#2447D7" />
                                        <path d="M7.6167 14.0681L10.9785 17.4299L19.3831 9.02539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_202">
                                            <rect width="26" height="26" fill="white" transform="translate(0.5 0.227539)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Email support
                            </li>
                            <li class="inline-flex items-center gap-2 text-sm text-white md:text-base">
                                <svg class="size-4" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_152_202)">
                                        <path d="M13.5 26.2275C20.6799 26.2275 26.5 20.4074 26.5 13.2275C26.5 6.04764 20.6799 0.227539 13.5 0.227539C6.3201 0.227539 0.5 6.04764 0.5 13.2275C0.5 20.4074 6.3201 26.2275 13.5 26.2275Z" fill="#2447D7" />
                                        <path d="M7.6167 14.0681L10.9785 17.4299L19.3831 9.02539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_202">
                                            <rect width="26" height="26" fill="white" transform="translate(0.5 0.227539)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Repository access
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
