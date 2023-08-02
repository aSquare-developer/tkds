@extends('layout')

@section('title', config('app.name') . ' ' . 'Dance Studio')

@section('content')

@include('pages.sections.header')
@include('pages.sections.features')
@include('pages.sections.dancestyle')
@include('pages.sections.timetable')
@include('pages.sections.contact')

@endsection
