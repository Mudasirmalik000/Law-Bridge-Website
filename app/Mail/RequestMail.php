<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $requestData;
    /**
     * Create a new message instance.
     */
    public function __construct($requestData)
    {
        $this->requestData = $requestData; 
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        $subject = 'New Appointment' . $this->requestData['clientname'];
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
            markdown: 'mail.request-mail',
            with:[
                'content' => $this->requestData
            ]
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
