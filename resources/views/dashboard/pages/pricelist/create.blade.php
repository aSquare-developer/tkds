@extends('dashboard.layout')

@php $header = 'Price list' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Create new offer</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can create new offer for page price list</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="{{ route('dashboard.priselist.index') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
        </div>
    </div>

    <form action="{{ route('dashboard.priselist.store') }}" method="post">@csrf

        <div class="mt-2">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
                <input type="text" name="title" id="title" class="block w-1/2 rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Title" required>
            </div>
        </div>

        <div class="mt-2">
            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
            <div class="mt-2">
                <input type="text" name="price" id="price" class="block w-1/2 rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Price" required>
            </div>
        </div>

        <div class="mt-2">
            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
            <div class="mt-2">
                <input type="text" name="description" id="description" class="block w-1/2 rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Description" required>
            </div>
        </div>

        <div class="mt-2">
            <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Highlighted or NOT</label>
            <select id="status" name="status" required class="mt-2 block rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="0" selected>NOT Highlighted</option>
                <option value="1">Highlighted</option>
            </select>
        </div>

        <button type="submit" class="mt-5 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>

    </form>

@endsection
