<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Invoice;

class InvoiceOverdueReminder extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $tries = 3;
    public $backoff = [60, 300, 900];

    /**
     * Create a new message instance.
     */
    public function __construct(public Invoice $invoice)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Vadesi Geçmiş Fatura Hatırlatma');
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(markdown: 'mail.invoice_overdue', with: [
            'invoice' => $this->invoice,
        ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
