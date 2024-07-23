<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class sendCast extends Mailable
{
    use Queueable, SerializesModels;
    
    public $refkey, $gov, $vice_gov, $sec, $ass_sec, $tres, $ass_tres, $audit, $pub_rel, $second, $third, $fourth, $pres, $vice_pres,  $senatorsArray, $college;

    public function __construct($college, $refkey, $gov, $vice_gov, $sec, $ass_sec, $tres, $ass_tres, $audit, $pub_rel, $second, $third, $fourth, $pres, $vice_pres,  $senatorsArray)
    {
        $this->college = $college;
        $this->refkey = $refkey;
        $this->gov = $gov;
        $this->vice_gov = $vice_gov;
        $this->sec = $sec;
        $this->ass_sec = $ass_sec;
        $this->tres = $tres;
        $this->ass_tres = $ass_tres;
        $this->audit = $audit;
        $this->pub_rel = $pub_rel;
        $this->second = $second;
        $this->third = $third;
        $this->fourth = $fourth;

        $this->pres = $pres;
        $this->vice_pres = $vice_pres;
        $this->senatorsArray = $senatorsArray;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('buksucomelec@buksu.edu.ph', 'Buksu Comelec 2024'),
            subject: 'Buksu Comelec Casted Vote receipt'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'components.sendCast',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
