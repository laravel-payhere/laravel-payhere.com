@extends("layouts.app")

@section("content")
    <section class="mx-auto max-w-7xl py-24">
        <div class="flex flex-col items-center gap-10">
            <h1 class="text-5xl font-bold text-white">
                <span class="inline-flex">
                    Pay
                    <span class="text-yellow-500">Here</span>
                </span>
                for Laravel
            </h1>
            <p class="text-lg text-white">Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin.</p>
            <img class="w-full scale-90" src="{{ Vite::asset("resources/images/screenshot.png") }}" alt="Filament panel's screenshot" />
        </div>
    </section>
    <section class="mx-auto max-w-7xl py-24">
        <div class="flex flex-col items-center gap-2">
            <h2 class="text-3xl text-white">
                Built with the
                <strong>TALL Stack</strong>
            </h2>
            <p class="text-md text-gray-500">We use the latest technologies to provide you with the best user experience.</p>
        </div>
    </section>
@endsection
