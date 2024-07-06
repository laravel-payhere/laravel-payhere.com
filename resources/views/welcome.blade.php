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
@endsection
