<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\NewStudentNotificationEmail;
use App\Mail\NewStudentNotificationForTrialEmail;
use App\Mail\RegisterForLessonsEmail;
use App\Mail\RegisterForTrialTrainingEmail;
use Illuminate\Http\Request;

use App\Models\Dashboard\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Requests::where('status', 'LIKE', 0)->orderBy('created_at', 'desc')->get();
        return view('dashboard.pages.request.index', compact('requests'));
    }

    /**
     * Show the page for completed requests.
     */
    public function completed()
    {
        $completedRequests = Requests::where('status', 'LIKE', 2 )->orderBy('updated_at', 'desc')->paginate(5);
        return view('dashboard.pages.request.completed', compact('completedRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.request.create');
    }

    public function sendContract($id, $fileId)
    {
        // OLD CODE HERE. NEED TO UPGRADE...
        // Get data about our request
        $request = Requests::find($id);

        if($fileId == 1) {

            $mailDataAttachment = "https://tkds.ee/storage/Leping_TKDS.pdf";

            // Send Email for customer
            Mail::to($request->email)->send(new NewStudentNotificationEmail($mailDataAttachment));

            // Change request status
            Requests::where('id', $request->id)->update(['status' => 2]);

            // Redirect back with message
            return redirect()->route('dashboard-request')->with('success', 'Your request has been processed!');

        } else if ($fileId == 2) {

            $mailDataAttachment = "https://www.tkds.ee/storage/Leping_TKDS.pdf";

            // Send Email for customer
            Mail::to($request->email)->send(new NewStudentNotificationEmail($mailDataAttachment));

            // Change request status
            Requests::where('id', $request->id)->update(['status' => 2]);

            // Redirect back with message
            return redirect()->route('dashboard-request')->with('success', 'Your request has been processed!');
        } else {
            return redirect()->back()->with('delete', 'Something happened wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $request = Requests::find($id);
        return view('dashboard.pages.request.show', compact('request'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Requests::destroy($id);
        return redirect()->route('dashboard-request')->with('success', 'Your request was deleted successfully.');
    }
}
