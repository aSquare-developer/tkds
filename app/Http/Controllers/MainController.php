<?php

namespace App\Http\Controllers;

use App\Mail\RegisterForLessonsEmail;
use App\Mail\NewStudentNotificationEmail;
use App\Mail\RegisterForTrialTrainingEmail;

use App\Models\RegisterNewStudent;
use App\Models\RegisterTrialTraining;
use App\Models\Dancestyle;
use App\Models\Header;
use App\Models\Timetable;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Rules\ReCaptcha;

class MainController extends Controller
{
    public function index() {
      $arrayOflessons = Timetable::getDataOfLessons();
      $dancestyles = Dancestyle::all();
      $header = Header::find(1);
      return view('pages.index', compact('dancestyles', 'header', 'arrayOflessons'));
    }

    public function registerForLessonsPage() {
        return view('pages.registerForLesson');
    }

    public function registerForLessons(Request $request) {

        // Validate the form
        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        // Create a record in database of new student
        RegisterNewStudent::create([
            'fullname' => $request->fullname,
            'aeg' => $request->aeg,
            'dancestyles' => $request->dancestyle,
            'email' => $request->email
        ]);

        // Create a data for email
        $mailData = [
            "fullname" => $request->fullname,
            "aeg" => $request->aeg,
            "dancestyle" => $request->dancestyle,
            "email" => $request->email
        ];

        // Send email with data
        Mail::to("info@tkds.ee")->send(new RegisterForLessonsEmail($mailData));

        // Send notification email to new student
        Mail::to($request->email)->send(new NewStudentNotificationEmail());

        // Redirect back to home page with success message
        return redirect()->route('home')->with('success', 'Teie sõnum on edukalt saadetud.');

    }

    public function registerForTrialTrainingPage() {
        return view('pages.registerForTrialTraining');
    }

    public function registerForTrialTraining(Request $request) {

        $request->validate([
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        
      // Create a record in database of new student
      RegisterTrialTraining::create([
        'fullname' => $request->fullname,
        'aeg' => $request->aeg,
        'dancestyles' => $request->dancestyle,
        'email' => $request->email
      ]);

      // Create a data for email
      $mailData = [
        "fullname" => $request->fullname,
        "aeg" => $request->aeg,
        "dancestyle" => $request->dancestyle,
        "email" => $request->email
      ];

      // Send email with data
      Mail::to("info@tkds.ee")->send(new RegisterForTrialTrainingEmail($mailData));

      // Redirect back to home page with success message
      return redirect()->route('home')->with('success', 'Täname registreerimise eest!');
    }
}
