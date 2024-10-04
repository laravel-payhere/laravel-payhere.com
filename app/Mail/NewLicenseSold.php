<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

final class NewLicenseSold extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct() {}

    public function envelope(): Envelope
    {
        return new Envelope(
            to: 'hello@dasun.dev',
            subject: "New License Sold! 🙌",
            tags: ['laravel-payhere']
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.new-license-purchased',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
