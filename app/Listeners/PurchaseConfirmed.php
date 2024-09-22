<?php

declare(strict_types=1);

namespace App\Listeners;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PayHere\Events\PaymentVerified;
use PayHere\Models\Payment;

final class PurchaseConfirmed
{
    public function handle(PaymentVerified $event): void
    {
        $payment = $event->payment;

        $this->createLicense($payment);
    }

    /**
     * Create a perpetual license for 1 year.
     *
     * @throws ConnectionException
     */
    private function createLicense(Payment $payment): void
    {
        $customer = $this->fetchCustomer($payment);

        abort_if(is_null($customer), 500);

        $token = config('license-api.token');

        Http::withToken($token)->post('https://www.dasun.dev/api/license', [
            'name' => $customer['fist_name'].' '.$customer['last_name'],
            'email' => $customer['email'],
            'license' => 'Perpetual License (1 Year)',
            'expires_at' => Carbon::now()->addYear(),
            'purchasable_type' => 'App\Models\Package',
            'purchasable_id' => 1,
        ]);
    }

    /**
     * Fetch the customer details from PayHere using the provided payment.
     */
    private function fetchCustomer(Payment $payment): ?array
    {
        $response = Http::get(route('payhere.api.payment.show', ['id' => $payment->order_id]));

        if ($response->successful()) {
            return $response->json('data.0.customer');
        }

        return null;
    }
}
