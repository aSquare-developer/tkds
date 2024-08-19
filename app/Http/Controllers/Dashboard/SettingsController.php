<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index() {
        $settings = Settings::find(1);
        return view('dashboard.pages.settings.index', ['settings' => $settings]);
    }

    public function update(Request $request, Settings $settings) {

        $data = $request->only(['address', 'phone', 'email']);

        $settings->update($data);

        return redirect()->back()->with('success', 'Contact Information was successfully updated!');
    }
}
