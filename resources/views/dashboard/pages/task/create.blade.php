
@section('content-title')
<h1 class="h2">Create task</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a href="{{ route('dashboard-tasks') }}" class="btn btn-sm btn-outline-success">Back</a>

    </div>
  </div>
@endsection


@section('contentsss')

<form action="{{ route('dashboard-task-store') }}" method="post">@csrf
  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Task name" required>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="description" rows="5" placeholder="Task description" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection

@extends('dashboard.layout')

@php $header = 'Create task' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <form action="{{ route('dashboard-task-store') }}" method="post" class="relative">@csrf
        <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
            <label for="title" class="sr-only">Title</label>
            <input
                type="text"
                name="name"
                id="title"
                class="block w-full border-0 border-gray-300 border-b pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                placeholder="Title"
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
            ></textarea>

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

