@extends("layouts.app")

@section("content")
    <section class="py-10 lg:py-20">
        <div class="flex flex-col gap-5 text-start md:items-center lg:gap-10">
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-5xl">
                <span class="inline-flex">
                    Pay
                    <span class="text-yellow-500">Here</span>
                </span>
                for Laravel
            </h1>
            <p class="text-start text-sm leading-7 text-white md:text-center md:text-base">Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin.</p>
            <img class="w-full scale-100 md:scale-90" src="{{ Vite::asset("resources/images/screenshot.png") }}" alt="Filament panel's screenshot" />
        </div>
    </section>
    <section class="py-20">
        <div class="flex flex-col items-center gap-5">
            <h2 class="text-xl text-white md:text-2xl lg:text-3xl">
                Built with the
                <strong>TALL Stack</strong>
            </h2>
            <p class="text-center text-sm text-white opacity-70 md:text-base">We use cutting-edge technologies to deliver the best user experience.</p>
            <div class="mx-auto mt-14 grid w-full max-w-5xl grid-cols-2 items-center justify-between justify-items-stretch gap-y-8 px-8 md:grid-cols-4 md:px-0 xl:flex">
                <img class="h-7" src="{{ Vite::asset("resources/images/laravel.svg") }}" alt="Laravel" />
                <img class="h-9" src="{{ Vite::asset("resources/images/alpinejs.svg") }}" alt="Alpine.js" />
                <img class="h-8" src="{{ Vite::asset("resources/images/livewire.svg") }}" alt="Livewire" />
                <img class="h-7" src="{{ Vite::asset("resources/images/tailwindcss.svg") }}" alt="TailwindCSS" />
            </div>
        </div>
    </section>
    <section class="flex flex-col gap-10 py-20">
        <div class="bg-feature relative flex gap-5 overflow-hidden rounded-xl border border-white border-opacity-20 px-10 py-20 md:px-[80px] md:py-[80px]">
            <div class="max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">Simplified HTML Form Based APIs</h3>
                <p class="mt-10 text-sm text-white md:text-base">PayHere offers four different types of HTML form-based APIs to suit various needs. One of these is the recurring checkout API for subscriptions (as shown on the right). It's a simple HTML form-based POST API, which you can easily implement without leaving the PHP code base.</p>
                <div class="mt-10">
                    <a href="#" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
            <div>
                <img class="absolute top-5 hidden w-2/5 md:block" src="{{ Vite::asset("resources/images/recurring-api-example.png") }}" alt="Recurring API Example" />
            </div>
        </div>
        <div class="bg-feature-reverse flex items-center justify-between overflow-hidden rounded-xl border border-white border-opacity-20 px-10 py-20 md:px-[80px] md:py-[80px]">
            <img class="hidden h-14 md:block" src="{{ Vite::asset("resources/images/filament.svg") }}" alt="Filament logo" />
            <div class="max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">Filament Panel for Manage Payments & Subscriptions</h3>
                <p class="mt-10 text-sm text-white md:text-base">Our plugin includes a built-in Filament panel for managing payments and subscriptions, which allows for processing refunds, canceling subscriptions, and retrying subscriptions.</p>
                <div class="mt-10">
                    <a href="#" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
        </div>
        <div class="bg-feature relative flex gap-10 overflow-hidden rounded-xl border border-white border-opacity-20 px-10 py-20 md:px-[80px] md:py-[80px]">
            <div class="max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">Intermediate RESTful API</h3>
                <p class="mt-10 text-sm text-white md:text-base">PayHere provides RESTful APIs for handling payments, refunds, and subscriptions. Our plugin comes with an intermediate API to easily connect with the PayHere API.</p>
                <div class="mt-10">
                    <a href="#" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
            <div>
                <img class="absolute top-0 hidden w-2/5 md:block" src="{{ Vite::asset("resources/images/api-response.png") }}" alt="Recurring API Example" />
            </div>
        </div>
    </section>
    <section class="py-20">
        <h2 class="text-center text-4xl font-bold text-white">Pay once, use forever</h2>
        <p class="mt-5 text-center text-sm text-white opacity-70 md:text-base">Every purchase includes a perpetual fallback license that you can use forever.</p>
        <div class="mx-auto grid max-w-4xl grid-cols-3">
            <div class="col-span-2 mt-10 flex flex-col bg-gradient-to-l from-blue-700 to-black px-20 py-20">
                <span class="text-lg text-white">For unlimited projects</span>
                <h3 class="mt-1 text-2xl font-bold text-yellow-500">Perpetual License</h3>
                <p class="py-5 text-lg text-white">Enhance your workflow by securely integrating PayHere with your Laravel application.</p>
                <span class="font-['Ubuntu'] text-5xl font-bold text-white">Rs.30,000</span>
                <div class="mt-10">
                    <a href="#" class="rounded-2xl bg-white bg-opacity-10 px-8 py-4 text-base font-semibold text-white">Buy Laravel PayHere</a>
                </div>
            </div>
            <div class="col-span-1 mt-10 bg-gradient-to-r from-[#FFFFFF0D] to-[#FFFFFF00] px-20 py-20">
                <span class="text-lg font-bold text-white">What's Included</span>
                <ul class="mt-5">
                    <li class="text-base text-white">All PayHere APIs</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
