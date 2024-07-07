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
    <section class="pb-20 pt-0">
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
                <h3 class="text-2xl font-semibold text-white">Simplified HTML Form Based APIs</h3>
                <p class="mt-10 text-base text-white">PayHere offers four different types of HTML form-based APIs to suit various needs. One of these is the recurring checkout API for subscriptions (as shown on the right). It's a simple HTML form-based POST API, which you can easily implement without leaving the PHP code base.</p>
                <div class="mt-10 text-base text-white">
                    <a href="#" class="text-base font-medium text-white transition-colors hover:underline">Read more</a>
                </div>
            </div>
            <div>
                <img class="absolute top-5 hidden w-2/5 md:block" src="{{ Vite::asset("resources/images/recurring-api-example.png") }}" alt="Recurring API Example" />
            </div>
        </div>
        <div class="bg-feature-reverse flex items-center justify-between overflow-hidden rounded-xl border border-white border-opacity-20 px-10 py-20 md:px-[80px] md:py-[80px]">
            <img class="hidden h-10 md:block" src="{{ Vite::asset("resources/images/filament.svg") }}" alt="Filament logo" />
            <div class="max-w-3xl">
                <h3 class="text-2xl font-semibold text-white">Filament Panel for Manage Payments & Subscriptions</h3>
                <p class="mt-10 text-base text-white">Our plugin includes a built-in Filament panel for managing payments and subscriptions, which allows for processing refunds, canceling subscriptions, and retrying subscriptions.</p>
                <div class="mt-10 text-base text-white">
                    <a href="#" class="text-base font-medium text-white transition-colors hover:underline">Read more</a>
                </div>
            </div>
        </div>
        <div class="bg-feature relative flex gap-10 overflow-hidden rounded-xl border border-white border-opacity-20 px-10 py-20 md:px-[80px] md:py-[80px]">
            <div class="max-w-2xl">
                <h3 class="text-2xl font-semibold text-white">Intermediate RESTful API</h3>
                <p class="mt-10 text-base text-white">PayHere provides RESTful APIs for handling payments, refunds, and subscriptions. Our plugin comes with an intermediate API to easily connect with the PayHere API.</p>
                <div class="mt-10 text-base text-white">
                    <a href="#" class="text-base font-medium text-white transition-colors hover:underline">Read more</a>
                </div>
            </div>
            <div>
                <img class="absolute top-0 hidden w-2/5 md:block" src="{{ Vite::asset("resources/images/api-response.png") }}" alt="Recurring API Example" />
            </div>
        </div>
    </section>
@endsection
