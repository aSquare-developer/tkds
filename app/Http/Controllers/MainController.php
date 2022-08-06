<?php

namespace App\Http\Controllers;

use App\Mail\RegisterForLessonsEmail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index() {
      return view('pages.index');
    }

    public function registerForLessons(Request $req) {

      $mailData = [
        "fullname" => $req->firstlastname,
        "aeg" => $req->aeg,
        "email" => $req->email,
        "phone" => $req->phone,
        "experience" => $req->experience,
        "dancestyle" => implode(", ", $req->dancestyle),
        "howfindus" => implode(", ", $req->howfindus)
      ];

    Mail::to("info@asquare.ee")->send(new RegisterForLessonsEmail($mailData));

    return redirect()->back()->with('success', 'Teie sõnum on edukalt saadetud.');

    }
}
