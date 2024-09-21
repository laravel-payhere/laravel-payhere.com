<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Services\Changelog as ChangelogService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Changelog - Laravel PayHere')]
final class Changelog extends Component
{
    public function render(ChangelogService $changelog): View
    {
        return view('livewire.changelog', [
            'releases' => Cache::remember(
                'changelog.releases', 120, fn (): array => $changelog->getReleases(),
            ),
        ]);
    }
}
