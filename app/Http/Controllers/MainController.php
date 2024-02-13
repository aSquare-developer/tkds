<?php

namespace App\Http\Controllers;

use App\Mail\NotificationForTrialTrainingEmail;
use App\Mail\NewStudentNotificationEmail;
use App\Mail\RegisterForLessonsEmail;
use App\Mail\RegisterForTrialTrainingEmail;
use App\Models\Dancestyle;
use App\Models\Dashboard\Requests;
use App\Models\Dashboard\Timetable;
use App\Models\Header;
use App\Models\RegisterNewStudent;
use App\Models\RegisterTrialTraining;
use App\Models\Teacher;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index() {
      $arrayOflessons = Timetable::getDataOfLessons();
      $dancestyles = Dancestyle::all();
      $header = Header::find(1);
      $teachers = Teacher::all();
      return view('pages.index', compact('dancestyles', 'header', 'arrayOflessons', 'teachers'));
    }

    public function registerForLessonsPage() {
        return view('pages.registerForLesson');
    }

    public function registerForLessons(Request $request) {

        // Validate the form [RECAPTCHA]
        // $request->validate([
        //     'g-recaptcha-response' => ['required', new ReCaptcha]
        // ]);

        Requests::create([
            'fullname' => $request->fullname,
            'age' => $request->age,
            'dancestyles' => $request->dancestyle,
            'comment' => $request->comment,
            'email' => $request->email,
        ]);

        // Create a data for email
        $mailData = [
            "fullname" => $request->fullname,
            "age" => $request->age,
            "dancestyle" => $request->dancestyle,
            "comment" => $request->comment,
            "email" => $request->email
        ];

        // Send email with data
        // Mail::to("info@tkds.ee")->send(new RegisterForLessonsEmail($mailData));

        // Redirect back to home page with success message
        return redirect()->route('home')->with('success', 'Täname registreerumise eest! Võtame teiega ühendust esimesel võimalusel.');

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
        'age' => $request->age,
        'dancestyles' => $request->dancestyle,
        'email' => $request->email
      ]);

      // Create a data for email
      $mailData = [
        "fullname" => $request->fullname,
        "age" => $request->age,
        "dancestyle" => $request->dancestyle,
        "email" => $request->email
      ];

      // Send email with data
        Mail::to("info@tkds.ee")->send(new RegisterForTrialTrainingEmail($mailData));

      // Redirect back to home page with success message
      return redirect()->route('home')->with('success', 'Täname registreerumise eest! Võtame teiega ühendust esimesel võimalusel.');
    }
}
