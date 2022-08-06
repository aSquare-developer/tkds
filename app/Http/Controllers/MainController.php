<?php

namespace App\Http\Controllers;

use App\Mail\RegisterForLessonsEmail;

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
        'email' => $req->email,
        'phone' => $req->phone,
        'experience' => $req->experience,
        'dancestyles' => implode(", ", $req->dancestyle),
        'howfindus' => implode(", ", $req->howfindus)
      ]);

      // Create a data for email
      $mailData = [
        "fullname" => $req->firstlastname,
        "aeg" => $req->aeg,
        "email" => $req->email,
        "phone" => $req->phone,
        "experience" => $req->experience,
        "dancestyle" => implode(", ", $req->dancestyle),
        "howfindus" => implode(", ", $req->howfindus)
      ];

      // Send email with data
      Mail::to("info@asquare.ee")->send(new RegisterForLessonsEmail($mailData));

      // Redirect back to home page with success message
      return redirect()->back()->with('success', 'Teie sõnum on edukalt saadetud.');

    }
}
