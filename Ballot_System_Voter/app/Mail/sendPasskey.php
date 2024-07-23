<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class sendPasskey extends Mailable
{
    use Queueable, SerializesModels;

    public $student_id;
    public $name;
    public $passkey;

    public function __construct($student_id, $name ,$passkey)
    {
        $this->student_id = $student_id;
        $this->name = $name;
        $this->passkey = $passkey;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('buksucomelec@buksu.edu.ph', 'Buksu Comelec 2024'),
            subject: 'Buksu Comelec Passkey Reset'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'components.sendmail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
