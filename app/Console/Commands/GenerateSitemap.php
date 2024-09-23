<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

final class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap.';

    public function handle(): void
    {
        SitemapGenerator::create('https://laravel-payhere.com')
            ->getSitemap()
            ->writeToFile(public_path('sitemap.xml'));
    }
}
