@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Rent page')

@section('content-title')
<h1 class="h2">Rent page section</h1>
@endsection


@section('content')

<form action="{{ route('dashboard-rent-store') }}" method="post">@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $rent_page->title }}" required>
  </div>
  <div class="form-group">
    <label for="video_url">Video URL</label>
    <input type="text" class="form-control" id="video_url" name="video_url" value="{{ $rent_page->video_url }}" readonly>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content" name="content" rows="10" placeholder="" required>{{ $rent_page->content }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
