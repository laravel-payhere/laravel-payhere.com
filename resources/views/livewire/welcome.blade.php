<div>
    <section class="px-5 py-10 lg:py-20 xl:px-0">
        <div class="flex flex-col gap-5 text-start md:items-center lg:gap-10">
            <h1 class="text-3xl font-bold text-white md:text-4xl lg:text-6xl">
                <span class="inline-flex">
                    Pay
                    <span class="text-yellow-500">Here</span>
                </span>
                for Laravel
            </h1>
            <p class="text-start leading-7 text-white md:text-center md:text-lg lg:text-xl">Easily and securely integrate PayHere into your Laravel application with our trusted third-party plugin.</p>
            <img class="w-full scale-100 md:scale-90" src="{{ Vite::asset("resources/images/screenshot.webp") }}" alt="Filament panel's screenshot" />
        </div>
    </section>
    <section class="px-10 py-10 md:py-20 lg:px-0">
        <div class="flex flex-col">
            <h2 class="text-center text-2xl font-semibold text-white md:text-3xl xl:text-4xl">Built with the TALL Stack</h2>
            <p class="mt-2 text-center text-sm text-white opacity-70 md:text-base xl:text-lg">We use cutting-edge technologies to deliver the best user experience.</p>
            <div class="mx-auto mt-14 grid w-full max-w-5xl grid-cols-2 items-center justify-between justify-items-stretch gap-x-5 gap-y-5 px-8 md:grid-cols-4 md:px-0 xl:flex">
                <img class="h-7" src="{{ Vite::asset("resources/images/tailwindcss.svg") }}" alt="TailwindCSS" />
                <img class="h-9" src="{{ Vite::asset("resources/images/alpinejs.svg") }}" alt="Alpine.js" />
                <img class="h-7" src="{{ Vite::asset("resources/images/laravel.svg") }}" alt="Laravel" />
                <img class="h-8" src="{{ Vite::asset("resources/images/livewire.svg") }}" alt="Livewire" />
            </div>
        </div>
    </section>
    <section id="features" class="flex flex-col gap-10 px-0 py-10 md:px-10 md:py-20">
        <div class="bg-feature relative flex gap-5 overflow-hidden rounded-none border-y border-white border-opacity-20 px-5 py-14 md:rounded-xl md:border md:px-10 lg:px-[80px] lg:py-[80px]">
            <div class="max-w-full xl:max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">HTML Form Based API Builder</h3>
                <p class="mt-10 text-sm text-white md:text-base">PayHere uses HTML form-based APIs to process various types of checkouts, such as recurring checkout. Yes, the example you see (as shown on the right) is a normal checkout.</p>
                <div class="mt-10">
                    <a href="{{ asset("docs/builder/examples.html") }}" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
            <div class="ml-5 hidden xl:block">
                <pre class="absolute top-10 w-2/5 rounded-xl border border-white border-opacity-20 px-8 shadow-2xl">
                    <x-torchlight-code language='php' >
                        use PayHere\PayHere;

                        class Checkout extends Controller
                        {
                            public function __invoke()
                            {
                                return PayHere::builder()
                                    ->guest()
                                    ->title('iPhone 16 Pro')
                                    ->amount(329900)
                                    ->checkout();
                            }
                        }
                    </x-torchlight-code>
                </pre>
            </div>
        </div>
        <div class="bg-feature-reverse flex items-center justify-between overflow-hidden rounded-none border-y border-white border-opacity-20 px-5 py-14 md:rounded-xl md:border md:px-10 lg:px-[80px] lg:py-[80px]">
            <img class="hidden h-14 xl:block" src="{{ Vite::asset("resources/images/filament.svg") }}" alt="Filament logo" />
            <div class="max-w-full xl:max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">Filament Panel for Manage Payments & Subscriptions</h3>
                <p class="mt-10 text-sm text-white md:text-base">Our plugin includes a built-in Filament panel for managing payments and subscriptions, which allows for processing refunds, canceling subscriptions, and retrying subscriptions with a beautiful user interface.</p>
                <div class="mt-10">
                    <a href="{{ asset("docs/panel/introduction.html") }}" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
        </div>
        <div class="bg-feature relative flex gap-10 overflow-hidden rounded-none border-y border-white border-opacity-20 px-5 py-14 md:rounded-xl md:border md:px-10 lg:px-[80px] lg:py-[80px]">
            <div class="max-w-full xl:max-w-2xl">
                <h3 class="text-xl font-semibold text-white md:text-2xl">Intermediate RESTful API</h3>
                <p class="mt-10 text-sm text-white md:text-base">PayHere provides RESTful APIs for handling payments, refunds, and subscriptions. Our plugin includes an intermediate API that makes it easy to connect with the PayHere API. This is extremely helpful when consuming REST APIs from a mobile app.</p>
                <div class="mt-10">
                    <a href="{{ asset("docs/rest-api/introduction.html") }}" class="text-sm font-medium text-white transition-colors hover:underline md:text-base">Read more</a>
                </div>
            </div>
            <div class="ml-0 hidden md:ml-5 xl:block">
                <pre class="absolute top-10 w-2/5 rounded-xl border border-white border-opacity-20 px-8 shadow-2xl">
                    <x-torchlight-code language='json' >
                        {
                            "status": 1,
                            "msg": "Found 2 payments",
                            "data": [
                                {
                                    "payment_id": 320032426827,
                                    "order_id": "676181237",
                                    "date": "2024-09-21 16:42:37",
                                    "description": "Test",
                                    "status": "RECEIVED",
                                    "currency": "LKR",
                                    "amount": 100,
                                    "customer": {
                                        "fist_name": "",
                    </x-torchlight-code>
                </pre>
            </div>
        </div>
    </section>
</div>
