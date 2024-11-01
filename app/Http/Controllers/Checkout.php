<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use PayHere\PayHere;

final class Checkout extends Controller
{
    public function __invoke()
    {
        return PayHere::builder()
            ->guest()
            ->title('Perpetual License (1 Year)')
            ->amount(config('pricing.selling_price'))
            ->checkout();
    }
}
