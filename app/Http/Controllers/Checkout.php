<?php

namespace App\Http\Controllers;

use PayHere\PayHere;

class Checkout extends Controller
{
    public function __invoke()
    {
        return PayHere::builder()
            ->guest()
            ->title('Perpetual License (1 Year)')
            ->amount(30000)
            ->checkout();
    }
}
