<div class="mx-auto mt-10 max-w-5xl px-5">
    <h1 class="my-6 text-start text-2xl text-white sm:text-3xl md:text-4xl">Changelog</h1>
    <div class="text-sm text-white md:text-base">
        <p>A changelog of the latest Laravel PayHere plugin feature releases, and important bug fixes.</p>

        @foreach ($releases as $version => $release)
            <div class="my-6">
                <span class="rounded-full bg-white bg-opacity-10 px-2 py-1 text-xs">{{ $release["publishedAt"] }}</span>
                <h2 class="text-lg sm:text-xl md:text-2xl">{{ __("Version :v", ["v" => $version]) }}</h2>
                <ul class="my-2 list-disc pl-10">
                    @foreach ($release["changes"] as $change)
                        <li>{{ $change }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
