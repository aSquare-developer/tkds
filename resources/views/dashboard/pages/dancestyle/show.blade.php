@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Dancestyle page')

@section('content-title')
<h1 class="h2">{{ $dancestyle->name }}</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="form-group mr-2">
      <a href="#" class="btn btn-warning btn-sm" role="button">Edit</a>
    </div>
    <div class="form-group mr-2">
      <a href="{{ route('dashboard-dancestyle') }}" class="btn btn-sm btn-outline-success">Back</a>
    </div>
  </div>
@endsection

@section('content')



@endsection
