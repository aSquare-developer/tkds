@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Tasks page')

@section('content-title')
<h1 class="h2">Tasks</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-task-create') }}" class="btn btn-sm btn-outline-success">Create task</a>
    </div>
  </div>
@endsection


@section('content')

@if($tasks->count() > 0)
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Created/Updated</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
        <tr>
          <th scope="row">{{ $task->id }}</th>
          <td>
            <a href="{{ route('dashboard-task-show', $task->id) }}">
              {{ $task->name }}
            </a>
          </td>
          <td>{{ $task->description }}</td>
          <td>{{ $task->created_at->format('d M Y H:i') }} / {{ $task->updated_at->format('d M Y H:i') }}</td>
          <td>@include('dashboard.pages.task.status.template')</td>
          <td>
            <a href="{{ route('dashboard-task-edit', $task->id) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
            <a href="{{ route('dashboard-task-delete', $task->id) }}" class="btn btn-danger btn-sm" role="button">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
<p>Your task list is empty</p>
@endif

@endsection
