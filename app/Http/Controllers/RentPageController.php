<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RentPage;

class RentPageController extends Controller
{
    public function index() {
      $rent_page = RentPage::find(1);
      return view('dashboard.pages.rent.index', compact('rent_page'));
    }

    public function store(Request $req) {
      $rent_page = RentPage::find(1);

      $result = $rent_page->editRentPageWith(
        $req->title,
        $req->video_url,
//        $req->content
      );

      if($result) {
        return redirect()->route('dashboard-rent')->with('success', 'Your data was changed!');
      } else {
        return redirect()->route('dashboard-rent')->with('delete', 'Some mistake!');
      }

    }
}
