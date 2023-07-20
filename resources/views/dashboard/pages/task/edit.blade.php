@extends('dashboard.layout')

@php $header = 'Edit: ' . $task->name @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="flex">
        <form name="myform" action="{{ route('dashboard-task-change-status', $task->id) }}" method="post">@csrf
            <select
                class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                onchange="myform.submit()"
                name="status"
            >
                <option value="0" {{ $task->status == 0 ? "selected" : "" }}>Planned</option>
                <option value="1" {{ $task->status == 1 ? "selected" : "" }}>In progress...</option>
                <option value="2" {{ $task->status == 2 ? "selected" : "" }}>Completed</option>
            </select>
        </form>
    </div>

    <form action="{{ route('dashboard-task-update', $task->id) }}" method="post" class="relative mt-2">@csrf
        <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
            <label for="title" class="sr-only">Title</label>
            <input
                type="text"
                name="name"
                id="title"
                class="block w-full border-0 border-gray-300 border-b pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                placeholder="Title"
                value="{{ $task->name }}"
                required
            >
            <label for="description" class="sr-only">Description</label>
            <textarea
                rows="10"
                name="description"
                id="description"
                class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                placeholder="Write a description..."
                required
            >{{ $task->description }}</textarea>

            <!-- Spacer element to match the height of the toolbar -->
            <div aria-hidden="true">
                <div class="h-px"></div>
                <div class="py-2">
                    <div class="py-px">
                        <div class="h-9"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute inset-x-px bottom-0">
            <div class="flex items-center justify-end space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3">

                <div class="flex">
                    <a
                        href="{{ route('dashboard-tasks') }}"
                        class="block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 "
                    >
                        Back
                    </a>
                </div>
                <div class="flex-shrink-0">
                    <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </div>
    </form>

@endsection
