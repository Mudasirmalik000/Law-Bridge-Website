<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail;

class AppointmentController extends Controller
{
    public function request(Request $request)
    {
        $validatedData = $request->validate([
            'clientname' => 'required|string|max:255',
            'clientEmail' => 'required|email|max:255',
            'clientPhone' => 'required|max:50',
            'clientDescription' => 'required|string|max:1000',
        ]);

        try {
            Mail::to($validatedData['clientEmail'])->send(new RequestMail($validatedData));
            return redirect()->back()->with('success', 'Appointment made successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Email sending failed! Try again later.');
        }
    }
}