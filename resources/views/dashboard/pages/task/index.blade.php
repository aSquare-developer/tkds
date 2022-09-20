@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Tasks page')

@section('content-title')
<h1 class="h2">Tasks</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-tasks-create') }}" class="btn btn-sm btn-outline-success">Create task</a>

    </div>
  </div>
@endsection


@section('content')

<p>Here is tasks page.</p>

@endsection
