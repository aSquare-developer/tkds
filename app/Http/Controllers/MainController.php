<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
      return view('pages.index');
    }

    public function registerForLessons(Request $req) {
      dd($req);
      return "asd";
    }
}
