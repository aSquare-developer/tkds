@extends('layout')

@section('title', config('app.name') . ' - ' . $rent_page->title)

@section('content')

    {{-- <header>

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ URL::asset($rent_page->video_url) }}" type="video/mp4">
        </video>

    </header> --}}


<div class="container pt-5">

    {!! $rent_page->content !!}

    
    {{-- <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img
                src="{{ URL::asset('img/gallery/a.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4"
            />

            <img
                src="{{ URL::asset('img/gallery/b.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4"
            />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img
                src="{{ URL::asset('img/gallery/d.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4"
            />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img
                src="{{ URL::asset('img/gallery/e.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4"
            />

            <img
                src="{{ URL::asset('img/gallery/c.jpg') }}"
                class="w-100 shadow-1-strong rounded mb-4"
            />
        </div>
    </div>
     --}}
</div>

@include('pages.sections.contact')

@endsection
