@extends('layout')

@section('title', config('app.name') . ' ' . '')

@section('content')

@include('pages.sections.header')

<div class="container pt-5">
  <h1>Kui laps on haigestunud covidi tõttu, siis me arvet ümber ei arvuta. Õppetunde saab täiendada teiste stiilidega</h1>
  <img src="img/hinnakiri.webp" class="rounded mx-auto d-block" alt="TKDS Hinnakiri">
</div>

@endsection
