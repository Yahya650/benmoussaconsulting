<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class MessageNotifMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    public function __construct($message)
    {
        $this->message = $message;
        // dd($this->message->email);
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'New Message Notification - ' . $this->message->subject,
            from: new Address("noreply@benmoussaconsulting.com", $this->message->full_name)
        );
    }

    public function content()
    {
        return new Content(
            view: 'v1.mails.new_message',
            with: ['message_content' => $this->message]
        );
    }

    public function attachments()
    {
        return [];
    }
}
