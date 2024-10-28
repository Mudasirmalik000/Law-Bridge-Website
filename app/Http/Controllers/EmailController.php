<?php

namespace App\Http\Controllers;

use App\Services\BrevoEmailService;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    protected $brevoEmailService;

    public function __construct(BrevoEmailService $brevoEmailService)
    {
        $this->brevoEmailService = $brevoEmailService;
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $response = $this->brevoEmailService->sendTransactionalEmail(
            $request->to,
            $request->subject,
            $request->message
        );

        if (isset($response['error'])) {
            return response()->json(['error' => $response['error']], 500);
        }

        return response()->json(['success' => 'Email sent successfully!']);
    }
}
