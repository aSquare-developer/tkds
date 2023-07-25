@extends('dashboard.layout')

@php $header = 'Dashboard' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header'){{ $header }}@endsection

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-7xl space-y-8">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 border rounded-2xl p-10">
                    <dt class="text-base leading-7 text-gray-600">Requests</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $requestsCount }}</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 border rounded-2xl p-10">
                    <dt class="text-base leading-7 text-gray-600">Tasks</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $tasksCount }}</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 border rounded-2xl p-10">
                    <dt class="text-base leading-7 text-gray-600">Lessons</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $lessonsCount }}</dd>
                </div>
            </dl>
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 border rounded-2xl p-10">
                    <dt class="text-base leading-7 text-gray-600">Dancestyles</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $dancestylesCount }}</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 border rounded-2xl p-10">
                    <dt class="text-base leading-7 text-gray-600">Teachers</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $teachersCount }}</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4 border rounded-2xl p-10">
                    <dt class="text-base leading-7 text-gray-600">Trial Lessons</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $trialLessonsCount }}</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
