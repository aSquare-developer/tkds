<?php

namespace App\Http\Controllers;

use App\Mail\RegisterForLessonsEmail;
use App\Mail\NewStudentNotificationEmail;

use App\Models\RegisterNewStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index() {
      return view('pages.index');
    }

    public function registerForLessons(Request $req) {

      // Create a record in database of new student
      RegisterNewStudent::create([
        'fullname' => $req->fullname,
        'aeg' => $req->aeg,
        'dancestyles' => $req->dancestyle,
        'email' => $req->email
      ]);

      // Create a data for email
      $mailData = [
        "fullname" => $req->fullname,
        "aeg" => $req->aeg,
        "dancestyle" => $req->dancestyle,
        "email" => $req->email
      ];

      // Send email with data
      Mail::to("info@asquare.ee")->send(new RegisterForLessonsEmail($mailData));

      // Send notification email to new student
      Mail::to($req->email)->send(new NewStudentNotificationEmail());

      // Redirect back to home page with success message
      return redirect()->back()->with('success', 'Teie sõnum on edukalt saadetud.');

    }
}
