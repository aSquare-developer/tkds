@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Header page')

@section('content-title')
<h1 class="h2">Header section</h1>
@endsection


@section('content')

<form action="{{ route('dashboard-store') }}" method="post">@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $header->title }}" required>
  </div>
  <div class="form-group">
    <label for="sub_title">Sub title</label>
    <textarea class="form-control" id="sub_title" name="sub_title" rows="5" placeholder="" required>{{ $header->sub_title }}</textarea>
  </div>
  <div class="form-group">
    <label for="register_button">Register button text</label>
    <input type="text" class="form-control" id="register_button" name="register_button" placeholder="" value="{{ $header->register_button }}" required>
  </div>
  <div class="form-group">
    <label for="trial_button">Trial button text</label>
    <input type="text" class="form-control" id="trial_button" name="trial_button" placeholder="" value="{{ $header->trial_button }}" required>
  </div>
  <div class="form-group">
    <label for="about_first">About first text block</label>
    <textarea class="form-control" id="about_first" name="about_first" rows="5" placeholder="" required>{{ $header->about_first }}</textarea>
  </div>
  <div class="form-group">
    <label for="about_second">About second text block</label>
    <textarea class="form-control" id="about_second" name="about_second" rows="5" placeholder="" required>{{ $header->about_second }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
