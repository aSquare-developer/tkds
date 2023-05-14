@extends('dashboard.layout')

@php $header = 'Requests' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Requests</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can find new request for new students</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="" class="block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 ">Completed Requests</a>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">New Requests</a>
        </div>
    </div>

@if($requests->count() > 0)

    @include('dashboard.includes.message')

    <div class="mt-3 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                   Random Text
                </div>
            </div>
        </div>
    </div>

@else
    <p>Your request list is empty</p>
@endif

@endsection
