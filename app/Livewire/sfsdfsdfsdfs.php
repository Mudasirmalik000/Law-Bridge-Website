<?php

namespace App\Livewire;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $clientname;
    public $clientEmail;
    public $clientPhone;
    public $clientDescription;
    public $currentDate;

    public function __construct($clientname, $clientEmail, $clientPhone, $clientDescription)
    {
        $this->clientname = $clientname;
        $this->clientEmail = $clientEmail;
        $this->clientPhone = $clientPhone;
        $this->clientDescription = $clientDescription;
        // $this->currentDate = now()->format('M d, Y'); // Set current date in Y-m-d format
    }

    public function build()
    {
        return $this->subject('Your Request Received')
            ->view('livewire.appointment-mail-confirmation');
    }
}

?>