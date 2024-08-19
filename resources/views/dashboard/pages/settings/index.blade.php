@extends('dashboard.layout')

@php $header = 'Settings' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

@include('dashboard.includes.message')

<form class="w-1/2" action="{{ route('dashboard.settings.update', $settings) }}" method="POST">
    @csrf
    <fieldset class="border border-gray-300 p-4 rounded-md">
        <legend class="text-lg font-semibold text-gray-700">Contact Information</legend>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input 
                id="address" 
                name="address" 
                type="text"
                value="{{ $settings->address }}"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            />
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input 
                id="phone" 
                name="phone" 
                type="text"
                value="{{ $settings->phone }}"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            />
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                value="{{ $settings->email }}"
                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            />
        </div>

        <button 
            type="submit" 
            class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700"
        >
            Save
        </button>
    </fieldset>
</form>


@endsection
