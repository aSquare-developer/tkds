@extends('layout')

@section('title', config('app.name') . ' - ' . 'Tantsusaalide rent')

@section('content')

@include('pages.sections.header')

<div class="container pt-5">

  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{ URL::asset('/video/Marianna-Hutti.mp4') }}"></iframe>
  </div>

  <h1>Tantsusaalide rent</h1>
  <h3>Meil on kaks saali: 45m2 ja 90m2</h3>
  <h3 class="text-success">Väike saal 1 tund = 15 euro</h3>
  <h3 class="text-success">Suur saal 1 tund = 30 euro</h3>
  <h3>
    Kui soovite võtta palju tunde / individuaaltunde / regulaarset trennid,<br />
    võtke meiega ühendust.<br />
    Teeme Teile hinnapakkumise:)
  </h3>
</div>

@include('pages.sections.contact')

@endsection
