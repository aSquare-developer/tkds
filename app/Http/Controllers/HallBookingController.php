<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallBookingController extends Controller
{
    public function index() {
      return view('pages.hallbooking');
    }
}
