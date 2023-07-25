@extends('dashboard.layout')

@php $header = 'Interested in a trial lesson' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Request from {{ $request->fullname }}</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can find some details about person</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="{{ route('dashboard.trial.lessons') }}" class="block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 ">Back to List</a>
        </div>
    </div>

    @include('dashboard.includes.message')

    <div class="flex">
        <form name="myform" action="{{ route('dashboard.trial.lessons.change.status', $request->id) }}" method="post">@csrf
            <select
                class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                onchange="myform.submit()"
                name="status"
            >
                <option value="0" {{ $request->status == 0 ? "selected" : "" }}>Planned</option>
                <option value="1" {{ $request->status == 1 ? "selected" : "" }}>In progress...</option>
                <option value="2" {{ $request->status == 2 ? "selected" : "" }}>Completed</option>
            </select>
        </form>
    </div>

    <div>
        <div class="mt-6">
            <dl class="grid grid-cols-1 sm:grid-cols-2">
                <div class="sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->fullname }}</dd>
                </div>
                <div class="sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Age</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->age }}</dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
                    <dd class="mt-1 text-sm leading-6 text-blue-700 sm:mt-2 hover:underline">
                        <a href = "mailto: {{ $request->email }}">{{ $request->email }}</a>
                    </dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Dance styles</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->dancestyles }}</dd>
                </div>
            </dl>
        </div>
    </div>


@endsection
