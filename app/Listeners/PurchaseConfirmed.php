<?php

declare(strict_types=1);

namespace App\Listeners;

use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use PayHere\Events\PaymentVerified;
use PayHere\Models\Payment;

final class PurchaseConfirmed implements ShouldQueue
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

        if (is_null($customer)) {
            throw new Exception('The customer is null');
        }

        $token = config('license-api.token');

        Http::acceptJson()->withToken($token)->post('https://www.dasun.dev/api/license', [
            'name' => $customer['fist_name'].' '.$customer['last_name'],
            'email' => $customer['email'],
            'license' => 'Perpetual License (1 Year)',
            'expires_at' => Carbon::now()->addYear(),
            'purchasable_type' => 'App\Models\Package',
            'purchasable_id' => '4',
        ]);
    }

    /**
     * Fetch the customer details from PayHere using the provided payment.
     *
     * @param  Payment  $payment
     * @return array|null
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
