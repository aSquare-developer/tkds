<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendMessage(Request $req) {
      ContactUs::create([
        'name' => $req->name,
        'email' => $req->email,
        'message' => $req->message
      ]);

      // Create a data for email
      $ContactUsMailData = [
        'name' => $req->name,
        'email' => $req->email,
        'message' => $req->message
      ];

      // Send email with data
      Mail::to("info@asquare.ee")->send(new ContactUsMail($ContactUsMailData));

      return redirect()->back()->with('success', 'Teie sõnum on edukalt saadetud.');
    }
}
