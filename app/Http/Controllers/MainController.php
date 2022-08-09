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
        'email' => $req->email,
        'phone' => $req->phone,
        'experience' => $req->experience,
        'dancestyles' => implode(", ", $req->dancestyle),
        'howfindus' => implode(", ", $req->howfindus)
      ]);

      // Create a data for email
      $mailData = [
        "fullname" => $req->fullname,
        "aeg" => $req->aeg,
        "email" => $req->email,
        "phone" => $req->phone,
        "experience" => $req->experience,
        "dancestyle" => implode(", ", $req->dancestyle),
        "howfindus" => implode(", ", $req->howfindus)
      ];

      // Send email with data
      Mail::to("info@asquare.ee")->send(new RegisterForLessonsEmail($mailData));

      // Create link to file
      $file = public_path('lepingut/tkds-leping.docx');

      // Create a data for notification email
      $notificationMailData = [
        'file' => $file
      ];
      

      // Send notification email to new student
      Mail::to($req->email)->send(new NewStudentNotificationEmail($notificationMailData));

      // Redirect back to home page with success message
      return redirect()->back()->with('success', 'Teie sõnum on edukalt saadetud.');

    }
}
