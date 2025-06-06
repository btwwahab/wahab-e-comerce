<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminApprovalMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $statusType;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $order, $statusType)
    {
        $this->order = $order;
        $this->statusType = $statusType;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = 'Order Payment Status Update';

        if ($this->statusType == 'approved') {
            $subject = '✅ Your Payment has been Approved!';
        } elseif ($this->statusType == 'rejected') {
            $subject = '❌ Your Payment has been Rejected';
        }

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.emails.admin-approval',
            with: [
                'order' => $this->order,
                'statusType' => $this->statusType,
            ],
        );
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
