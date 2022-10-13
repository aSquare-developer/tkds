@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Create task page')

@section('content-title')
<h1 class="h2">Edit task</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-tasks') }}" class="btn btn-sm btn-outline-success">Back</a>

    </div>
  </div>
@endsection


@section('content')

<form action="{{ route('dashboard-task-update', $task->id) }}" method="post">@csrf
  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Task name" value="{{ $task->name }}" required>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="description" rows="5" placeholder="Task description" required>{{ $task->description }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
