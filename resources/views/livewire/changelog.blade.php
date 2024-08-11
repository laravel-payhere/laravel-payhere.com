<div class="mx-auto mt-10 max-w-5xl px-5">
    <h1 class="my-6 text-start text-2xl text-white sm:text-3xl md:text-4xl">Changelog</h1>
    <div class="text-sm text-white md:text-base">
        <p>A changelog of the latest Laravel PayHere feature releases, product updates and important bug fixes.</p>

        @foreach ($releases as $version => $release)
            <h2 class="my-6 text-lg sm:text-xl md:text-2xl">{{ __("v:version", ["version" => $version]) }}</h2>
            <ul class="my-2 list-disc pl-10">
                @foreach ($release["changes"] as $change)
                    <li>{{ $change }}</li>
                @endforeach
            </ul>
        @endforeach
    </div>
</div>
