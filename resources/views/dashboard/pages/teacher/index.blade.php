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
            <a href="{{ route('dashboard-teachers-create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Add new Teacher
            </a>
        </div>
    </div>

    @include('dashboard.includes.message')

    @if($teachers->count() > 0)
        <div class="mt-3 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Image</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Dance styles</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Social Links</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($teachers as $teacher)

                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-blue-600 sm:pl-6">
                                        @if(isset($teacher->image_url))
                                            <img src="{{ Storage::url($teacher->image_url) }}" alt="{{ $teacher->name }}" class="h-16 w-16 rounded-full">
                                        @else
                                            <img src="{{ asset('img/default.jpeg') }}" alt="{{ $teacher->name }}" class="h-16 w-16 rounded-full">
                                        @endif
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $teacher->fullname }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ Str::limit($teacher->description, 50) }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        @foreach($teacher->danceStyles as $danceStyle)
                                            <span class="inline-flex items-center rounded-md bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">
                                                {{ $danceStyle->name }}
                                            </span>
                                        @endforeach
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <div class="flex justify-center items-center gap-2">
                                            @if(isset($teacher->facebook_link))
                                                <a href="{{ $teacher->facebook_link }}" target="_blank">
                                                    <img src="{{ URL::asset('/img/facebook-icon.png') }}" width="28" alt="TKDS Facebook page">
                                                </a>
                                            @endif
                                            @if(isset($teacher->youtube_link))
                                                <a href="{{ $teacher->youtube_link }}" target="_blank">
                                                    <img src="{{ URL::asset('/img/youtube-icon.png') }}" width="28" alt="TKDS YouTube channel">
                                                </a>
                                            @endif
                                            @if(isset($teacher->instagram_link))
                                                <a href="{{ $teacher->instagram_link }}" target="_blank">
                                                    <img src="{{ URL::asset('/img/instagram-icon.png') }}" width="28" alt="TKDS Instagram">
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm space-x-4 font-medium sm:pr-6">
                                        <a href="{{ route('dashboard.teachers.edit', $teacher->id) }}" class="inline-flex items-center rounded-md bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600" role="button">Edit</a>
                                        <form action="{{ route('dashboard.teachers.destroy', $teacher->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex items-center rounded-md bg-red-100 px-2 py-1 text-xs font-medium text-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>You don't have data.</p>
    @endif

@endsection
