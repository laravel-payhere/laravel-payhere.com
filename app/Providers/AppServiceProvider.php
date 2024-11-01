<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureUrl();
        $this->configureCommands();
    }

    /**
     * Configure the application's url scheme.
     *
     * @return void
     */
    private function configureUrl(): void
    {
        if ($this->app->isProduction()) {
            URL::forceScheme('https');
        }
    }

    /**
     * Configure the application's commands.
     *
     * @return void
     */
    private function configureCommands(): void
    {
        DB::prohibitDestructiveCommands(
            $this->app->isProduction()
        );
    }
}
