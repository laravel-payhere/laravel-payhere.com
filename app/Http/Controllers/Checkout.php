<?php

namespace App\Http\Controllers;

use PayHere\PayHere;

class Checkout extends Controller
{
    public function __invoke()
    {
        return PayHere::builder()
            ->guest()
            ->amount(30000)
            ->checkout();
    }
}
