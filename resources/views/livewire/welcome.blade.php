<div>
    <section class="px-5 py-10 lg:py-20 xl:px-0">
        <div class="flex flex-col gap-5 text-start md:items-center lg:gap-10">
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-6xl">
                <span class="inline-flex">
                    Pay
                    <span class="text-yellow-500">Here</span>
                </span>
                for Laravel
            </h1>
            <p class="text-start leading-7 text-white md:text-center md:text-lg lg:text-xl">Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin.</p>
            <img class="w-full scale-100 md:scale-90" src="{{ Vite::asset("resources/images/screenshot.webp") }}" alt="Filament panel's screenshot" />
        </div>
    </section>
    <section class="px-10 py-10 md:py-20 lg:px-0">
        <div class="flex flex-col">
            <h2 class="text-center text-2xl font-semibold text-white md:text-3xl xl:text-4xl">Built with the TALL Stack</h2>
            <p class="mt-2 text-center text-sm text-white opacity-70 md:text-base xl:text-lg">We use cutting-edge technologies to deliver the best user experience.</p>
            <div class="mx-auto mt-14 grid w-full max-w-5xl grid-cols-2 items-center justify-between justify-items-stretch gap-x-5 gap-y-5 px-8 md:grid-cols-4 md:px-0 xl:flex">
                <img class="h-7" src="{{ Vite::asset("resources/images/tailwindcss.svg") }}" alt="TailwindCSS" />
                <img class="h-9" src="{{ Vite::asset("resources/images/alpinejs.svg") }}" alt="Alpine.js" />
                <img class="h-7" src="{{ Vite::asset("resources/images/laravel.svg") }}" alt="Laravel" />
                <img class="h-8" src="{{ Vite::asset("resources/images/livewire.svg") }}" alt="Livewire" />
            </div>
        </div>
    </section>
    <section id="features" class="flex flex-col gap-10 px-0 py-10 md:px-10 md:py-20">
        <div class="bg-feature relative flex gap-5 overflow-hidden rounded-none border-y border-white border-opacity-20 px-5 py-14 md:rounded-xl md:border md:px-10 lg:px-[80px] lg:py-[80px]">
            <div class="max-w-full xl:max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">HTML Form Based API Builder</h3>
                <p class="mt-10 text-sm text-white md:text-base">PayHere uses HTML form-based APIs to process various types of checkouts, such as recurring checkout. Yes, the example you see (as shown on the right) is exactly the same one we use to check out your perpetual license using the HTML form-based API builder.</p>
                <div class="mt-10">
                    <a href="{{ asset("docs/builder/examples.html") }}" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
            <div class="ml-5 hidden xl:block">
                <pre class="absolute top-10 w-2/5 rounded-xl border border-white border-opacity-20 px-8 shadow-2xl">
                    <x-torchlight-code language='php' >
                        use PayHere\PayHere;

                        class Checkout extends Controller
                        {
                            public function __invoke()
                            {
                                return PayHere::builder()
                                    ->guest()
                                    ->title('Perpetual License (1 Year)')
                                    ->amount(30000)
                                    ->checkout();
                            }
                        }
                    </x-torchlight-code>
                </pre>
            </div>
        </div>
        <div class="bg-feature-reverse flex items-center justify-between overflow-hidden rounded-none border-y border-white border-opacity-20 px-5 py-14 md:rounded-xl md:border md:px-10 lg:px-[80px] lg:py-[80px]">
            <img class="hidden h-14 xl:block" src="{{ Vite::asset("resources/images/filament.svg") }}" alt="Filament logo" />
            <div class="max-w-full xl:max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">Filament Panel for Manage Payments & Subscriptions</h3>
                <p class="mt-10 text-sm text-white md:text-base">Our plugin includes a built-in Filament panel for managing payments and subscriptions, which allows for processing refunds, canceling subscriptions, and retrying subscriptions with a beautiful user interface.</p>
                <div class="mt-10">
                    <a href="{{ asset("docs/panel/introduction.html") }}" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
        </div>
        <div class="bg-feature relative flex gap-10 overflow-hidden rounded-none border-y border-white border-opacity-20 px-5 py-14 md:rounded-xl md:border md:px-10 lg:px-[80px] lg:py-[80px]">
            <div class="max-w-full xl:max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">Intermediate RESTful API</h3>
                <p class="mt-10 text-sm text-white md:text-base">PayHere provides RESTful APIs for handling payments, refunds, and subscriptions. Our plugin includes an intermediate API that makes it easy to connect with the PayHere API. This is extremely helpful when consuming REST APIs from a mobile app.</p>
                <div class="mt-10">
                    <a href="{{ asset("docs/rest-api/introduction.html") }}" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
            <div class="ml-0 hidden md:ml-5 xl:block">
                <pre class="absolute top-10 w-2/5 rounded-xl border border-white border-opacity-20 px-8 shadow-2xl">
                    <x-torchlight-code language='json' >
                        {
                            "status": 1,
                            "msg": "Found 2 payments",
                            "data": [
                                {
                                    "payment_id": 320032426827,
                                    "order_id": "676181237",
                                    "date": "2024-09-21 16:42:37",
                                    "description": "Test",
                                    "status": "RECEIVED",
                                    "currency": "LKR",
                                    "amount": 100,
                                    "customer": {
                                        "fist_name": "",
                    </x-torchlight-code>
                </pre>
            </div>
        </div>
    </section>
    <section class="px-0 py-10 md:px-0 md:py-20">
        <h2 class="text-center text-2xl font-semibold text-white md:text-3xl xl:text-4xl">Pay once, use forever</h2>
        <p class="mt-2 px-5 text-center text-sm text-white opacity-70 md:px-0 md:text-base xl:text-lg">
            Every purchase includes a
            <a href="{{ route("perpetual-license") }}" class="underline">perpetual fallback license</a>
            that you can use forever.
        </p>
        <div class="mx-auto grid max-w-5xl grid-cols-1 lg:grid-cols-3">
            <div class="col-span-2 mt-10 flex flex-col bg-gradient-to-l from-blue-700 px-5 pb-5 pt-10 md:px-20 lg:py-20">
                @php
                    $fixedSellingPrice = config("pricing.fixed_price");
                    $currentPrice = config("pricing.selling_price");
                    $discountPercentage = 0;

                    if ($currentPrice < $fixedSellingPrice) {
                        $discountPercentage = (1 - $currentPrice / $fixedSellingPrice) * 100;
                    }
                @endphp

                @if ($discountPercentage)
                    <span class="text-md mb-10 w-[120px] rounded-full bg-red-500 px-3 py-2 text-center font-medium text-white">SAVE {{ number_format($discountPercentage) }}%</span>
                @endif

                <span class="text-sm text-white lg:text-base">For unlimited projects</span>
                <h3 class="mt-1 text-3xl font-bold text-yellow-500">Perpetual License</h3>
                <p class="py-5 text-white md:text-base lg:text-lg">Easily integrate PayHere into your Laravel application like a pro.</p>
                <span class="font-['Ubuntu'] text-5xl font-bold text-white">Rs.{{ number_format($currentPrice) }}</span>
                <div class="mt-10">
                    <a href="{{ route("checkout") }}" class="rounded-2xl bg-white bg-opacity-10 px-8 py-4 text-base font-semibold text-white transition-colors hover:bg-opacity-20">Buy Laravel PayHere</a>
                </div>
            </div>
            <div class="col-span-1 place-content-center bg-transparent bg-gradient-to-r from-black to-blue-700 px-5 pb-10 md:px-20 lg:mt-10 lg:from-[#FFFFFF0D] lg:to-[#FFFFFF00] lg:py-20">
                <span class="hidden text-lg font-bold text-white lg:block">What's Included</span>
                <ul class="mt-5 flex flex-row flex-wrap gap-x-5 gap-y-1 lg:flex-col lg:flex-nowrap lg:gap-1">
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
    </section>
</div>
