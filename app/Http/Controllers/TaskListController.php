<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskListController extends Controller
{
  public function index() {
    $tasks = Task::All()->sortByDesc('updated_at');
    return view('dashboard.pages.task.index', compact('tasks'));
  }

  public function create() {
    return view('dashboard.pages.task.create');
  }

  public function store(Request $request) {
    Task::create([
      'name' => $request->name,
      'description' => $request->description
    ]);

    return redirect()->route('dashboard-tasks')->with('success', 'Your task was added to list successfully.');
  }

  public function edit($id) {
    $task = Task::find($id);
    return view('dashboard.pages.task.edit', compact('task'));
  }

  public function update(Request $request, $id) {
    $task = Task::find($id);
    $result = $task->updateTask($request->name, $request->description);

    if($result) {
      return redirect()->route('dashboard-tasks')->with('success', 'Your task was changed!');
    } else {
      return redirect()->route('dashboard-tasks')->with('delete', 'Some mistake!');
    }
  }

  public function show($id) {
    $task = Task::find($id);
    return view('dashboard.pages.task.show', compact('task'));
  }

  public function delete($id) {
    Task::destroy($id);
    return redirect()->route('dashboard-tasks')->with('delete', 'Your task was deleted successfully.');
  }

  public function changeStatus(Request $request, $id) {
    $status = $request->status;
    Task::where('id', $id)->update(['status'=> $status]);
    return redirect()->route('dashboard-tasks')->with('success', 'Your task status was changed!');
  }

}
