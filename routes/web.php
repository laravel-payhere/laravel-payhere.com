<?php

declare(strict_types=1);

use App\Livewire\Changelog;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);
Route::get('/changelog', Changelog::class)->name('changelog');
