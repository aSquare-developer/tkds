@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Create task page')

@section('content-title')
<h1 class="h2">Create task</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-tasks') }}" class="btn btn-sm btn-outline-success">Back</a>

    </div>
  </div>
@endsection


@section('content')

<form>
  <div class="form-group">
    <input type="text" class="form-control" id="taskName" placeholder="Task name" required>
  </div>
  <div class="form-group">
    <textarea class="form-control" id="taskDescription" rows="5" placeholder="Task description" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
