@extends('layout')

@section('title', config('app.name') . ' - ' . 'Hinnakiri')

@section('content')

@include('pages.sections.header')

<div class="container pt-5">
  <h1 class="text-center pb-5">HINNAKIRI 2022</h1>

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">1 STIIL</h4>
      </div>
      <div class="card-body">
        <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
        <ul class="list-unstyled mt-3 mb-4">
          <li>1.5H X NÄDALAS / KUU | 40€</li>
          <li>2H X NÄDALAS / KUU | 43€</li>
          <li>3H X NÄDALAS / KUU | 45€</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">+ 1 LISA STIIL</h4>
      </div>
      <div class="card-body">
        <!-- <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1> -->
        <ul class="list-unstyled mt-3 mb-4">
          <li>+ 1.5H X NÄDALAS / KUU | 30€</li>
          <li>+ 2H X NÄDALAS / KUU | 35€</li>
          <li>+ 3H X NÄDALAS / KUU | 40€</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PROOVITUND 1H</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">TASUTA</h1>
      </div>
    </div>
  </div>

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">ÜKSIKTUND</h4>
      </div>
      <div class="card-body">
        <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
        <ul class="list-unstyled mt-3 mb-4">
          <li>1H - 1.5/2H | 10€-15€</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">10H KAART</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">60€</h1>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PERESOODUSTUS</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">-10%</h1>
      </div>
    </div>
  </div>

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PIIRAMATU PAKETT</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">100€</h1>
      </div>
    </div>
  </div>

</div>

@endsection
