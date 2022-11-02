@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Create new lesson')

@section('content-title')
<h1 class="h2">Create new lesson</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-timetable') }}" class="btn btn-sm btn-outline-success">Back</a>
    </div>
  </div>
@endsection

@section('content')

  <form class="" action="{{ route('dashboard-timetable-store') }}" method="post">@csrf

    <div class="form-group">
      <label for="day">Choose a day</label>
      <select class="form-control" id="day" name="day" required>
        <option value="1" selected>Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="6">Saturday</option>
        <option value="7">Sunday</option>
      </select>
    </div>

    <div class="form-group">
      <label for="hall_size">Choose a hall</label>
      <select class="form-control" id="hall_size" name="hall_size" required>
        <option value="0" selected>Big hall</option>
        <option value="1">Small hall</option>
      </select>
    </div>

    <div class="form-group">
      <label for="dancestyle">Dancestyle</label>
      <input type="text" class="form-control" id="dancestyle" name="dancestyle" placeholder="Dancestyle" required>
    </div>

    <div class="form-group">
      <label for="lesson_start">Type lesson start time</label>
      <input type="time" class="form-control" id="lesson_start" name="lesson_start" placeholder="Exmaple 12:30" required>
    </div>

    <div class="form-group">
      <label for="lesson_end">Type lesson end time</label>
      <input type="time" class="form-control" id="lesson_end" name="lesson_end" placeholder="Exmaple 12:30" required>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Exmaple Open/Close...">
    </div>

    <div class="form-group">
      <label for="order_of_lesson">Order of Lesson</label>
      <input type="number" id="order_of_lesson" name="order_of_lesson" aria-describedby="order_of_lesson_help" value="1" min="1" max="5" required>
      <small id="order_of_lesson_help" class="form-text text-muted">Порядковый номер тренировки в этот день.</small>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>

  </form>

@endsection
