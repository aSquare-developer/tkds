<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dancestyle;

class DancestyleController extends Controller
{
    public function index() {
      $dancestyles = Dancestyle::all();

      return view('dashboard.pages.dancestyle.index', compact('dancestyles'));
    }

    public function show($id) {
      $dancestyle = Dancestyle::find($id);
      return view('dashboard.pages.dancestyle.show', compact('dancestyle'));
    }
}
