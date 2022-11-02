@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Timetable page')

@section('content-title')
<h1 class="h2">Timetable</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-timetable-create') }}" class="btn btn-sm btn-outline-success">Create new</a>
    </div>
  </div>
@endsection

@section('content')

<input class="form-control" id="myInput" type="text" placeholder="Type some data for example day or hall size...">
<br>
@if($lessons->count() > 0)
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Day</th>
        <th scope="col">Dancestyle</th>
        <th scope="col">Lesson start and end</th>
        <th scope="col">Description</th>
        <th scope="col">Hall size</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach($lessons as $lesson)
        <tr>
          <td>{{ $lesson->getWeekDay() }}</td>
          <td>{{ $lesson->dancestyle }}</td>
          <td>{{ $lesson->lesson_start }} - {{ $lesson->lesson_end }}</td>
          <td>{{ $lesson->description }}</td>
          <td>{{ $lesson->getHallSize() }}</td>
          <td>
            <a href="{{ route('dashboard-timetable-edit', $lesson->id) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
            <a href="{{ route('dashboard-timetable-delete', $lesson->id) }}" class="btn btn-danger btn-sm" role="button">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@else
<p>Your lessons list is empty</p>
@endif

@endsection
