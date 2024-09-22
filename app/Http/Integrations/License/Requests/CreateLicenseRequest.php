<?php

declare(strict_types=1);

namespace App\Http\Integrations\License\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

final class CreateLicenseRequest extends Request implements HasBody
{
    use HasJsonBody;

    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::POST;

    public function __construct(private readonly array $data) {}

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/api/license';
    }

    /**
     * The default body for the request
     */
    protected function defaultBody(): array
    {
        return $this->data;
    }
}
