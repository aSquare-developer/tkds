<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\RegisterTrialTraining;
use Illuminate\Http\Request;

class TrialLessonController extends Controller
{
    public function index() {
        $objects = RegisterTrialTraining::where('status', 0)->orWhere('status', 1)->get();
        $objects = $objects->sortByDesc('created_at');
        return view('dashboard.pages.trial-training.index', compact('objects'));
    }

    public function show($id) {
        $request = RegisterTrialTraining::find($id);
        return view('dashboard.pages.trial-training.show', compact('request'));
    }

    public function changeStatus(Request $request, $id) {
        $status = $request->status;
        RegisterTrialTraining::where('id', $id)->update(['status'=> $status]);
        return redirect()->route('dashboard.trial.lessons')->with('success', 'Your task status was changed!');
    }

    public function completed() {
        $objects = RegisterTrialTraining::where('status', 'LIKE', 2)->orderByDesc('updated_at')->get();
        return view('dashboard.pages.trial-training.completed', compact('objects'));
    }
}
