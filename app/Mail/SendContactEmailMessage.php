<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendContactEmailMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $email, $name, $objet, $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $objet, $email, $message)
    {
        $this->name = $name;
        $this->objet = $objet;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Nouveau message depuis le formulaire de contact',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'mail.send-contact-email-message',
            with: [
                'email' => $this->email, 'objet' => $this->objet, 'message' => $this->message, 'name' => $this->name
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
