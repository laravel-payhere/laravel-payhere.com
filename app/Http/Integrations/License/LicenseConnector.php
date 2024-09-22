<?php

declare(strict_types=1);

namespace App\Http\Integrations\License;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

final class LicenseConnector extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return 'https://www.dasun.dev';
    }

    protected function defaultAuth(): ?Authenticator
    {
        $token = config('license-api.token');

        return new TokenAuthenticator($token);
    }
}
