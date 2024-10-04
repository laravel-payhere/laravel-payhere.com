<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Mail\NewLicenseSold;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use PayHere\Events\PaymentVerified;
use PayHere\Models\Payment;

final class PurchaseConfirmed implements ShouldQueue
{
    private ?array $customer = null;

    /**
     * Handle the event.
     *
     * @param  PaymentVerified  $event
     * @return void
     *
     * @throws ConnectionException
     */
    public function handle(PaymentVerified $event): void
    {
        $payment = $event->payment;

        $this->customer = $this->fetchCustomer($payment);

        if (is_null($this->customer)) {
            throw new Exception('The customer is null');
        }

        $this->createLicense();

        Mail::send(new NewLicenseSold);
    }

    /**
     * Create a perpetual license for 1 year.
     *
     * @throws ConnectionException
     */
    private function createLicense(): void
    {
        Http::acceptJson()
            ->withToken(config('license-api.token'))
            ->post(config('license-api.endpoint'), [
                'name' => $this->getCustomerName(),
                'email' => $this->getCustomerEmail(),
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
            $this->customer = $response->json('data.0.customer');
        }

        return $this->customer;
    }

    private function getCustomerName(): ?string
    {
        if (is_null($this->customer)) {
            return null;
        }

        return $this->customer['fist_name'].' '.$this->customer['last_name'];
    }

    private function getCustomerEmail(): ?string
    {
        if (is_null($this->customer)) {
            return null;
        }

        return $this->customer['email'];
    }
}
