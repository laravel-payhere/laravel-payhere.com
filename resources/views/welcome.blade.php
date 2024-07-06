@extends("layouts.app")

@section("content")
    <section class="flex flex-col items-center gap-10 py-16">
        <h1 class="text-5xl font-bold text-white">
            Pay
            <span class="text-yellow-500">Here</span>
            for Laravel
        </h1>
        <p class="text-lg text-white">Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin.</p>
        <img class="mt-10 w-full" src="{{ Vite::asset("resources/images/screenshot.png") }}" alt="Filament panel's screenshot" />
    </section>
@endsection
