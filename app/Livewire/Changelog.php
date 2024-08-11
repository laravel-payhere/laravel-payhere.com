<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\Changelog as ChangelogService;

class Changelog extends Component
{
    public function mount(ChangelogService $changelog)
    {
        dd($changelog->getReleases());
    }
}
