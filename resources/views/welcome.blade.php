@extends("layouts.app")

@section("content")
    <section class="mx-auto mt-10 max-w-7xl px-5 lg:mt-20">
        <div class="flex flex-col gap-5 text-start md:items-center lg:gap-10">
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-5xl">
                <span class="inline-flex">
                    Pay
                    <span class="text-yellow-500">Here</span>
                </span>
                for Laravel
            </h1>
            <p class="mx-auto max-w-5xl text-start text-sm leading-7 text-white md:text-center md:text-base">Easily and securely integrate the PayHere payment gateway into your Laravel application with our trusted third-party plugin. Laravel PayHere is more than just a payment processing plugin — it also enables you to manage payments and subscriptions with just a click.</p>
            <img class="w-full scale-100 md:scale-90" src="{{ Vite::asset("resources/images/screenshot.png") }}" alt="Filament panel's screenshot" />
        </div>
    </section>
    <section class="mx-auto mt-20 max-w-7xl">
        <div class="flex flex-col items-center gap-5">
            <h2 class="text-3xl text-white">
                Built with the
                <strong>TALL Stack</strong>
            </h2>
            <p class="text-md text-white opacity-70">We use the latest technologies to provide you with the best user experience.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-16">
                <img class="h-[30px]" src="{{ Vite::asset("resources/images/tailwindcss.svg") }}" alt="TailwindCSS" />
                <img class="h-[35px]" src="{{ Vite::asset("resources/images/alpinejs.svg") }}" alt="Alpine.js" />
                <img class="h-[28px]" src="{{ Vite::asset("resources/images/laravel.svg") }}" alt="Laravel" />
                <img class="h-[35px]" src="{{ Vite::asset("resources/images/livewire.svg") }}" alt="Livewire" />
            </div>
        </div>
    </section>
@endsection
