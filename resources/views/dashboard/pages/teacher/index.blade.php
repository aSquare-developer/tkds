@extends('dashboard.layout')

@php $header = 'Teachers' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Teachers</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can see all your teacher list.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="#" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new Teacher</a>
        </div>
    </div>

    @include('dashboard.includes.message')

    List of Teachers here!

@endsection
