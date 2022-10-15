@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Task page')

@section('content-title')
<h1 class="h2">{{ $task->name }}</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="form-group mr-2">
      <form name="myform" action="{{ route('dashboard-task-change-status', $task->id) }}" method="post">@csrf
          <select class="form-control-sm" onchange="myform.submit()" name="status">
            <option value="0" {{ $task->status == 0 ? "selected" : "" }}>Planned</option>
            <option value="1" {{ $task->status == 1 ? "selected" : "" }}>In progress...</option>
            <option value="2" {{ $task->status == 2 ? "selected" : "" }}>Completed</option>
          </select>
      </form>
    </div>
    <div class="form-group mr-2">
      <a href="{{ route('dashboard-task-edit', $task->id) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
    </div>
    <div class="form-group mr-2">
      <a href="{{ route('dashboard-tasks') }}" class="btn btn-sm btn-outline-success">Back</a>
    </div>
  </div>
@endsection

@section('content')

<p>{{ $task->description }}</p>

@endsection
