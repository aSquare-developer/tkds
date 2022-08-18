@extends('layout')

@section('title', config('app.name') . ' - ' . 'Tantsusaalide rent')

@section('content')

@include('pages.sections.header')

<div class="container pt-5">
  <h1>Tantsusaalide rent</h1>
  <h3>Meil on kaks saalid: 45m2 ja 90m2</h3>
  <h3 class="text-success">Väike saal 1 tund = 15 euro</h3>
  <h3 class="text-success">Suur saal 1 tund = 25 euro</h3>
  <h3>
    Kui soovite võtta palju tunde / individuaaltunde / regulaarset trennid,<br />
    võtke meiega ühendust.<br />
    Teeme Teile hinnapakkumise:)
  </h3>
</div>

@include('pages.sections.contact')

@endsection
