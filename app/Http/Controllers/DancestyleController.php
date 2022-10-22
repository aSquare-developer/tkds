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

    public function create() {
      return view('dashboard.pages.dancestyle.create');
    }

    public function store(Request $request) {
      Dancestyle::create([
        'name' => $request->name,
        'slug' => \Str::slug($request->name),
        'description' => $request->description,
        'dancestyle_description' => $request->dancestyle_description,
        'youtube_link' => $request->youtube_link
      ]);

      return redirect()->route('dashboard-dancestyle')->with('success', 'Your dancestyle was successfully added!');
    }

    public function edit($id) {
      $dancestyle = Dancestyle::find($id);
      return view('dashboard.pages.dancestyle.edit', compact('dancestyle'));
    }

    public function update(Request $request, $id) {
      $dancestyle = Dancestyle::find($id);
      $result = $dancestyle->updateDancestyle(
        $request->name,
        $request->slug,
        $request->description,
        $request->dancestyle_description,
        $request->youtube_link
      );

      if($result) {
        return redirect()->route('dashboard-dancestyle')->with('success', 'Your dancestyle was changed!');
      } else {
        return redirect()->route('dashboard-dancestyle')->with('delete', 'Some mistake!');
      }
    }

    public function delete($id) {
      Dancestyle::destroy($id);
      return redirect()->route('dashboard-dancestyle')->with('delete', 'Your dancestyle was deleted successfully.');
    }

}
