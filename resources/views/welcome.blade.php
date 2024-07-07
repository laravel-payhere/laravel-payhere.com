@extends("layouts.app")

@section("content")
    <section class="my-10 lg:my-20">
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
            <p class="text-center text-xs text-white opacity-70 md:text-sm lg:text-base">We use cutting-edge technologies to deliver the best user experience.</p>
            <div class="mx-auto mt-14 grid w-full max-w-5xl grid-cols-2 items-center justify-between justify-items-stretch gap-y-8 px-8 md:grid-cols-4 md:px-0 xl:flex">
                <img class="h-7" src="{{ Vite::asset("resources/images/laravel.svg") }}" alt="Laravel" />
                <img class="h-9" src="{{ Vite::asset("resources/images/alpinejs.svg") }}" alt="Alpine.js" />
                <img class="h-8" src="{{ Vite::asset("resources/images/livewire.svg") }}" alt="Livewire" />
                <img class="h-7" src="{{ Vite::asset("resources/images/tailwindcss.svg") }}" alt="TailwindCSS" />
            </div>
        </div>
    </section>
@endsection
