<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Http;
use PayHere\Events\PaymentVerified;
use PayHere\Models\Payment;

class PurchaseConfirmed
{
    public function handle(PaymentVerified $event): void
    {
        $payment = $event->payment;

        $this->createLicense($payment);
    }

    /**
     * Create a perpetual license for 1 year.
     *
     * @param Payment $payment
     * @return void
     */
    private function createLicense(Payment $payment): void
    {
        $response = Http::get(route('payhere.api.payment.show', ['id' => $payment->payhere_payment_id]));

        abort_if($response->failed(), 500);
    }
}
