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
        $requests = Requests::where('status', 'LIKE', 0)->get();
        return view('dashboard.pages.request.index', compact('requests'));
    }

    /**
     * Show the page for completed requests.
     */
    public function completed()
    {
        $completedRequests = Requests::All()->where('status', 'LIKE', 2 )->sortByDesc('updated_at');
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
        // Get data about our request
        $request = Requests::find($id);

        // Create a data for email
        // $mailData = [
        //     "fullname" => $request->fullname,
        //     "age" => $request->age,
        //     "dancestyles" => $request->dancestyle,
        //     "email" => $request->email
        // ];

        if($fileId == 1) {

            $mailDataAttachment = "https://tkds.ee/storage/tkds_leping_tkd.pdf";

            // Send Email for customer
            Mail::to($request->email)->send(new NewStudentNotificationEmail($mailDataAttachment));

            // Change request status
            Requests::where('id', $request->id)->update(['status' => 2]);

            // Идея!
            // Создание записи в таблице Students
            // Students поля (fullname, age, dancestyle, email, contract, created_at)
            // Плюс этого в том, что будет одна таблица со всеми студентами которым был отправлен контракт.

            // Redirect back with message
            return redirect()->route('dashboard-request')->with('success', 'Your request has been processed!');

        } else if ($fileId == 2) {
            
            $mailDataAttachment = "https://www.tkds.ee/storage/tkds_leping_TT.pdf";

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
