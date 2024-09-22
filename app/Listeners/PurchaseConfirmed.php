<?php

namespace App\Listeners;

use Illuminate\Support\Carbon;
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
        $customer = $this->fetchCustomer($payment);

        $token = config('license-api.token');

        Http::withToken($token)->post('https://www.dasun.dev/licese/api', [
            'name' => $customer['first_name'] . ' ' . $customer['last_name'],
            'email' => $customer['email'],
            'license' => 'Perpetual License (1 Year)',
            'purchasable_type' => 'App\Models\Package',
            'purchasable_id' => 1,
            'expires_at' => Carbon::now()->addYear()
        ]);
    }

    /**
     * Fetch the customer details from PayHere using the provided payment.
     *
     * @param Payment $payment
     * @return array|null
     */
    private function fetchCustomer(Payment $payment): ?array
    {
        $response = Http::get(route('payhere.api.payment.show', ['id' => $payment->payhere_payment_id]));

        if ($response->successful()) {
            return $response->json('data.customer');
        }

        return null;
    }
}
