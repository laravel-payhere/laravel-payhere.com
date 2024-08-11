<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use App\Services\Changelog as ChangelogService;

class Changelog extends Component
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
