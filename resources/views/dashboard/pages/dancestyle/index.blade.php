@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Dancestyle page')

@section('content-title')
<h1 class="h2">Dancestyle section</h1>
<div class="btn-toolbar mb-2 mb-md-0">
  <div class="btn-group mr-2">
    <a href="#" class="btn btn-sm btn-outline-success">Create new Dancestyle</a>
  </div>
</div>
@endsection


@section('content')

@if($dancestyles->count() > 0)
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="width: 1%">#</th>
        <th style="width: 5%">Image</th>
        <th style="width: 15%">Name</th>
        <th style="width: 69%">Description</th>
        <th style="width: 10%">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dancestyles as $dancestyle)
        <tr>
          <th scope="row">{{ $dancestyle->id }}</th>
          <td>
            <a href="{{ URL::asset('/swiper/' . $dancestyle->slug .'.jpeg') }}" target="_blank">
              <img src="{{ URL::asset('/swiper/' . $dancestyle->slug .'.jpeg') }}" alt="{{ $dancestyle->name }}" style="width: auto; height: 100px;" class="rounded">
            </a>
          </td>
          <td>
            <a href="{{ route('dashboard-dancestyle-show', $dancestyle->id) }}">
              {{ $dancestyle->name }}
            </a>
          </td>
          <td>{{ \Illuminate\Support\Str::limit($dancestyle->description, 175) }}</td>
          <td>
            <a href="#" class="btn btn-warning btn-sm" role="button">Edit</a>
            <a href="#" class="btn btn-danger btn-sm" role="button">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <p>Your dancestyle list is empty!</p>
@endif

@endsection
