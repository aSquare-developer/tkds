<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;

use App\Rules\ReCaptcha;

class ContactUsController extends Controller
{
    public function sendMessage(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        // Create a data for email
        $ContactUsMailData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        // Send email with data
        Mail::to("info@tkds.ee")->send(new ContactUsMail($ContactUsMailData));

        return redirect()->back()->with('success', 'Teie sõnum on edukalt saadetud.');
    }
}
