<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dancestyle;
use App\Models\Dashboard\Requests;
use App\Models\Dashboard\Task;
use App\Models\Dashboard\Timetable;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

      if (!Auth::check()) {
          return redirect()->route('sign-in-page');
      }

      $requestsCount = Requests::all()->count();
      $tasksCount = Task::where('status', 0)->orWhere('status', 1)->count();
      $lessonsCount = Timetable::all()->count();
      $dancestylesCount = Dancestyle::all()->count();

      return view('dashboard.pages.index',
          compact(
              'requestsCount',
              'tasksCount',
              'lessonsCount',
              'dancestylesCount'
          ));
    }
}
