@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Dancestyle page')

@section('content-title')
<h1 class="h2">{{ $dancestyle->name }}</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="form-group mr-2">
      <a href="{{ route('dashboard-dancestyle') }}" class="btn btn-sm btn-outline-success">Back</a>
    </div>
  </div>
@endsection

@section('content')

<form action="{{ route('dashboard-dancestyle-update', $dancestyle->id) }}" method="post">@csrf
  <div class="form-group">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ $dancestyle->name }}" required>
  </div>
  <div class="form-group">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="" value="{{ $dancestyle->slug }}" readonly>
  </div>
  <div class="form-group">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="5" placeholder="" required>{{ $dancestyle->description }}</textarea>
  </div>
  <div class="form-group">
    <label for="dancestyle_description" class="form-label">Dancestyle description</label>
    <textarea class="form-control" id="dancestyle_description" name="dancestyle_description" rows="5" placeholder="" required>{{ $dancestyle->dancestyle_description }}</textarea>
  </div>
  <div class="form-group">
    <label for="youtube_link" class="form-label">Youtube link</label>
    <textarea class="form-control" id="youtube_link" name="youtube_link" rows="5" placeholder="" required>{{ $dancestyle->youtube_link }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
