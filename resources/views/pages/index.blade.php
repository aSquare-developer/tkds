@extends('layout')

@section('title', config('app.name') . ' ' . '')

@section('content')

@include('pages.sections.header')
@include('pages.sections.dancestyle')
@include('pages.sections.timetable')
@include('pages.sections.contact')

@endsection
