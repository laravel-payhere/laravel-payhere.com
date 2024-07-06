@extends("layouts.app")

@section("content")
    <section class="flex max-w-7xl flex-col items-center gap-10 py-24">
        <h1 class="text-5xl font-bold text-white">
            Pay
            <span class="text-yellow-500">Here</span>
            for Laravel
        </h1>
        <p class="text-lg text-white">Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin.</p>
        <img class="w-full scale-90" src="{{ Vite::asset("resources/images/screenshot.png") }}" alt="Filament panel's screenshot" />
    </section>
@endsection
