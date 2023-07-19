@extends('dashboard.layout')

@php $header = 'Dance styles' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Dance styles</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can modify your dance style list.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="{{ route('dashboard-dancestyle-create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create new</a>
        </div>
    </div>

    @include('dashboard.includes.message')

    @if($dancestyles->count() > 0)
        <div class="mt-3 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($dancestyles as $dancestyle)

                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-blue-600 sm:pl-6">
                                        {{ $dancestyle->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ Str::limit($dancestyle->description, 50) }}
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm space-x-4 font-medium sm:pr-6">
                                        <a href="{{ route('dashboard-dancestyle-edit', $dancestyle->id) }}" class="text-indigo-600 hover:text-indigo-900" role="button">Edit</a>
                                        <a href="{{ route('dashboard-dancestyle-delete', $dancestyle->id) }}" class="text-red-600 hover:text-red-900" role="button">Delete</a>
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
