<?php

namespace App\Http\Controllers;

use App\Models\Dashboard\Settings;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\RentPage;

class HallBookingController extends Controller
{
    public function index() {
      $header = Header::find(1);
      $rent_page = RentPage::find(1);
      $settings = Settings::find(1);
      return view('pages.hallbooking', compact('header', 'rent_page', 'settings'));
    }
}
