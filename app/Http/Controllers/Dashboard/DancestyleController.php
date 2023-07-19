<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dancestyle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'description' => trim($request->description)
        ]);

        return redirect()->route('dashboard-dancestyle')->with('success', 'Your dancestyle was added to list successfully.');
    }

    public function edit($id) {
        $dancestyle = Dancestyle::find($id);
        return view('dashboard.pages.dancestyle.edit', compact('dancestyle'));
    }

    public function update(Request $request, $id) {
        $result = Dancestyle::where('id', $id)->update([
            'name' => trim($request->name),
            'description' => trim($request->description)
        ]);

        if($result) {
            return redirect()->route('dashboard-dancestyle')->with('success', 'Your task was changed!');
        } else {
            return redirect()->route('dashboard-dancestyle')->with('delete', 'Some mistake!');
        }
    }

    public function delete($id) {
        Dancestyle::destroy($id);
        return redirect()->route('dashboard-dancestyle')->with('success', 'Your dance style was deleted successfully.');
    }

}
