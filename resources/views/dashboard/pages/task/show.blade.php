@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Task page')

@section('content-title')
<h1 class="h2">{{ $task->name }}</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-tasks') }}" class="btn btn-sm btn-outline-success">Back</a>
    </div>
  </div>
@endsection


@section('content')

<p>{{ $task->description }}</p>

@endsection
