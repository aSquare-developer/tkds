@extends('layout')

@section('title', config('app.name') . ' - ' . $rent_page->title)

@section('content')

@include('pages.sections.header')

<div class="container pt-5">

  <video playsinline="playsinline" width="100%" autoplay="autoplay" muted="muted" loop="loop" controls>
    <source src="{{ URL::asset($rent_page->video_url) }}" type="video/mp4">
  </video>

  {!! $rent_page->content !!}

</div>

@include('pages.sections.contact')

@endsection
