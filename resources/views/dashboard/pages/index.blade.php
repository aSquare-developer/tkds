@extends('dashboard.layout')

@php $header = 'Dashboard' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header'){{ $header }}@endsection

@section('content')
    <p>Here is dashboard index page.</p>
@endsection
