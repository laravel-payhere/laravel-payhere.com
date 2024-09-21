<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

final readonly class Changelog
{
    /**
     * Get the latest release from the changelog.
     *
     * @return array<string, array<string, array<int, string>|string>>
     *
     * @throws ConnectionException
     */
    public function getReleases(): array
    {
        $response = Http::withToken(config('services.github.token'))
            ->get('https://raw.githubusercontent.com/laravel-payhere/laravel-payhere/refs/heads/1.x/CHANGELOG.md');

        $content = $response->body();

        $blocks = preg_split(
            '/## Version/',
            $content,
            -1,
            PREG_SPLIT_NO_EMPTY
        );

        assert(is_array($blocks));

        return collect($blocks)
            ->skip(1)
            ->mapWithKeys(function (string $block): array {
                $lines = explode("\n", trim($block));
                $version = trim(array_shift($lines));

                $publishedAt = trim(str_replace('>', '', (string) array_shift($lines)));
                array_shift($lines);
                $changes = collect($lines)
                    ->filter(fn (string $line): bool => ! str_starts_with($line, '##'))
                    ->map(fn (string $line): string => trim(str_replace('- ', '', $line)))
                    ->all();

                return [$version => ['publishedAt' => $publishedAt, 'changes' => $changes]];
            })->all();
    }
}
