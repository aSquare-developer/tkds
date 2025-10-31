<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Dashboard\Settings;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{

    private $fileName = 'Leping_TKDS.pdf';

    public function index() {
        $settings = Settings::find(1);

        $exists = Storage::disk('public')->exists('documents/' . $this->fileName);
        
        return view('dashboard.pages.settings.index', 
        [
            'settings' => $settings, 
            'fileExists' => $exists,
            'fileName' => $this->fileName
        ]);
    }

    // Document
    public function handle(Request $request)
    {

        if ($request->has('delete')) {
            Storage::disk('public')->delete('documents/' . $this->fileName);
            return back()->with('success', 'The file was successfully deleted!');
        }

        $request->validate([
            'file' => 'required|mimes:pdf|max:5120'
        ]);

        $request->file('file')->storeAs('documents', $this->fileName, 'public');

        return back()->with('success', 'The file was successfully added!');
    }

    public function update(Request $request, Settings $settings) {

        $data = $request->only(['address', 'phone', 'email']);

        $settings->update($data);

        return redirect()->back()->with('success', 'Contact Information was successfully updated!');
    }
}
