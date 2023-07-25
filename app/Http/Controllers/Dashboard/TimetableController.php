<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index() {
      $lessons = Timetable::All()->sortBy('day');
      return view('dashboard.pages.timetable.index', compact('lessons'));
    }

    public function create() {
      return view('dashboard.pages.timetable.create');
    }

    public function store(Request $req) {
      Timetable::create([
        'day' => $req->day,
        'dancestyle' => $req->dancestyle,
        'lesson_start' => $req->lesson_start,
        'lesson_end' => $req->lesson_end,
        'description' => $req->description,
        'order_of_lesson' => $req->order_of_lesson,
        'hall_size' => $req->hall_size
      ]);

      return redirect()->route('dashboard-timetable')->with('success', 'Your lesson was added to list successfully.');
    }

    public function edit($id){
      $lesson = Timetable::find($id);
      return view('dashboard.pages.timetable.edit', compact('lesson'));
    }

    public function update(Request $req, $id){
      $lesson = Timetable::find($id);
      $result = $lesson->updateLesson(
        $req->day,
        $req->dancestyle,
        $req->lesson_start,
        $req->lesson_end,
        $req->description,
        $req->order_of_lesson,
        $req->hall_size
      );

      if($result) {
        return redirect()->route('dashboard-timetable')->with('success', 'Your lesson was changed!');
      } else {
        return redirect()->route('dashboard-timetable')->with('delete', 'Some mistake!');
      }
    }

    public function delete($id) {
      Timetable::destroy($id);
      return redirect()->route('dashboard-timetable')->with('delete', 'Your lesson was deleted successfully.');
    }
}
