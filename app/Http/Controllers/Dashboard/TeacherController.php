<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dancestyle;
use App\Models\Teacher;
use App\Rules\AtLeastOneCheckbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index() {
        $teachers = Teacher::all();
        return view('dashboard.pages.teacher.index', compact('teachers'));
    }

    public function create() {
        $danceStyles = Dancestyle::all();
        return view('dashboard.pages.teacher.create', compact('danceStyles'));
    }

    public function store(Request $request) {

        $request->validate([
            'fullname' => 'required|string|max:255',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'dance_styles' => ['required', new AtLeastOneCheckbox],
            'instagram_link' => 'required',
            'facebook_link' => 'required',
            'youtube_link' => 'required',
        ], [
            'image_url.image' => 'The file must be an image.',
            'image_url.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image_url.max' => 'The image may not be greater than 2048 kilobytes.',
        ]);

        $imageUrl = 'img/default.jpg'; // Set a default image URL if no image is uploaded

        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('public/image');
        }

        $teacherData = $request->only([
            'fullname',
            'description',
            'instagram_link',
            'facebook_link',
            'youtube_link'
        ]);

        $teacherData['image_url'] = $imagePath; // Assign the image URL to the $teacherData array

        $teacher = Teacher::create($teacherData);
        $teacher->dancestyles()->sync($request->input('dance_styles', []));

        return redirect()->route('dashboard-teachers')->with('success', 'Teacher created successfully.');
    }

    public function destroy($id) {
        Teacher::destroy($id);
        return redirect()->route('dashboard-teachers')->with('success', 'Your teacher was deleted successfully.');
    }
}
