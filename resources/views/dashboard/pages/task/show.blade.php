@extends('dashboard.layout')

@php $header = $task->name @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="flex flex-wrap items-center justify-between">
        <div class="">
            <form name="myform" action="{{ route('dashboard-task-change-status', $task->id) }}" method="post">@csrf
                <select
                    class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    onchange="myform.submit()"
                    name="status"
                >
                    <option value="0" {{ $task->status == 0 ? "selected" : "" }}>Planned</option>
                    <option value="1" {{ $task->status == 1 ? "selected" : "" }}>In progress...</option>
                    <option value="2" {{ $task->status == 2 ? "selected" : "" }}>Completed</option>
                </select>
            </form>
        </div>

        <div class="flex space-x-4">
            <div>
                <a
                    href="{{ route('dashboard-task-edit', $task->id) }}"
                    class="block rounded-md bg-yellow-400 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 "
                >
                    Edit
                </a>
            </div>
            <div>
                <a
                    href="{{ route('dashboard-tasks') }}"
                    class="block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 "
                >
                    Back
                </a>
            </div>
        </div>
    </div>

    <div class="p-4 mt-5 border rounded">
        <p>{!! $task->description !!}</p>
    </div>

@endsection
