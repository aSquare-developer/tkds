<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Header;

class HeaderController extends Controller
{
    public function index() {
      $header = Header::find(1);
      return view('dashboard.pages.header.index', compact('header'));
    }

    public function store(Request $request) {
      $header = Header::find(1);

      $result = $header->editHeader(
        $request->title,
        $request->sub_title,
        $request->register_button,
        $request->trial_button,
        $request->about_first,
        $request->about_second);

        if($result) {
          return redirect()->route('dashboard-header')->with('success', 'Your data was changed!');
        } else {
          return redirect()->route('dashboard-header')->with('delete', 'Some mistake!');
        }
    }
}
