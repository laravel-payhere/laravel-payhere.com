<?php

use App\Livewire\PrivacyPolicy;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
Route::view('/checkout', 'checkout')->name('checkout');
