<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Dashboard\Requests;

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
        $completedRequests = Requests::where('status', 'LIKE', 2)->get();
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
        if($fileId == 1) {
            return "Send First file";
        } else if ($fileId == 2) {
            return "Send Second file";
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
