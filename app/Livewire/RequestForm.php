<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail; // Adjusted namespace for RequestMail

class RequestForm extends Component
{
    public $clientname;
    public $clientEmail;
    public $clientPhone;
    public $clientDescription;

    

    protected $rules = [
        'clientname' => 'required|string|max:255',
        'clientEmail' => 'required|email|max:255',
        // 'clientPhone' => 'required|regex:/^\+?\d{10,15}$/',
        'clientPhone' => 'required|max:50',
        'clientDescription' => 'required|string|max:1000',
    ];

    public function render()
    {
        return view('request-form')->with('clientname', $this->clientname);
    }

    public function updated($propertyName){

        $this->validateOnly($propertyName);
    }
    public function send()
    {
        $validateddData = $this->validate();
        try {
            $requestMail = new RequestMail($validateddData);
            Mail::to('connectwithlawbridge@gmail.com')->send($requestMail);
            
            $this->clientDescription = "we have received your request Wait for  our response
            or Contact Us Directly through Whatsapp +923122162196 
            ";
            Mail::to($this->clientEmail)->send($requestMail);
            // $requestMail = new RequestMail(
            //     $this->clientname,
            //     $this->clientEmail,
            //     $this->clientPhone,
            //     $this->clientDescription
            // );
            // Mail::to($this->clientEmail)->send(New RequestMail($validateddData));
            // Mail::to($this->clientEmail)->send($requestMail);

            session()->flash('success', 'Appointment made successfully!');
    
        } catch (\Throwable $th) {

            session()->flash('error', 'Email sent Failed! Try after a short while');

        }
        $this->reset();
    }

    
}


?>