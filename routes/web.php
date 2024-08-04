<?php

use App\Livewire\Checkout;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);
Route::get('/checkout', Checkout::class);
