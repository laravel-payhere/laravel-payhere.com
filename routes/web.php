<?php

declare(strict_types=1);

use App\Livewire\Changelog;
use App\Livewire\PrivacyPolicy;
use App\Livewire\RefundPolicy;
use App\Livewire\Terms;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);
Route::get('/terms', Terms::class)->name('terms');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::get('/refund-policy', RefundPolicy::class)->name('refund-policy');
Route::get('/changelog', Changelog::class)->name('changelog');
Route::view('/checkout', 'checkout')->name('checkout');
