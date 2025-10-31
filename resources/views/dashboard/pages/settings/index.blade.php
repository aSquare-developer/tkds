@extends('dashboard.layout')

@php $header = 'Settings' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

@include('dashboard.includes.message')

<form class="w-1/2" action="{{ route('dashboard.document.handle') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <fieldset class="border border-gray-300 p-4 rounded-md">
        <legend class="text-lg font-semibold text-gray-700">Document Information</legend>

        @if($fileExists)

            <p><b>The file is present:</b> {{ $fileName }}</p>

            <a href="{{ asset('storage/documents/'.$fileName) }}" target="_blank">
                <button type="button" class="mt-5 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Open File</button>
            </a>

            <button type="submit" name="delete" value="1"
            class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                Delete File
            </button>

        @else

            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">The file is missing. Please upload a new one:</label>
                <input 
                    name="file" 
                    type="file"
                    accept="application/pdf"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required
                />
            </div>

            @error('file')
                <p class="text-sm font-medium text-red-800">{{ $message }}</p>
            @enderror

            <button type="submit" class="block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 ">Upload PDF</button>

        @endif

    </fieldset>
</form>

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
