@extends('layout')

@section('title', config('app.name') . ' - ' . 'Hinnakiri')

@section('content')

@include('pages.sections.header')

<div class="container pt-5">
  <div id="pricing-tables" class="padding-top padding-bottom">
    <h1 class="text-center pb-5 text-white">HINNAKIRI 2024/25</h1>
    <div class="container text-center">
        <div class="pricing-table  text-left">
            <div class="row">
              @foreach ($priceList as $item)
              <div class="col-md-6 col-lg-3">
                <div class="single-table {{ $item->status == true ? 'featured-table' : ''}}">
                    <h3 class="p-3 text-center" style="height:90px;margin-bottom:0;">{{ $item->title }}</h3>
                    <p class="price text-center"><span>{{ $item->price }}</span></p>
                    <p class="description">{!! $item->description !!}</p>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
