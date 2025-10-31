@extends('dashboard.layout')

@php $header = 'Requests' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Request from {{ $request->fullname }}</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can find some details about request</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="{{ route('dashboard-request') }}" class="block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 ">Back to List</a>
        </div>
    </div>

    @include('dashboard.includes.message')

    <div>
        <div class="mt-6">
            <dl class="grid grid-cols-1 sm:grid-cols-2">
                <div class="px-4 py-6 sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->fullname }}</dd>
                </div>
                <div class="px-4 py-6 sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Age</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->age }}</dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->email }}</dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Dance styles</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->dancestyles }}</dd>
                </div>

                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-2 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Comment</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{ $request->comment }}</dd>
                </div>


                <div class="px-4 py-6 sm:col-span-2 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">You can send some Contracts</dt>
                    <dd class="mt-2 text-sm text-gray-900">
                        <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">

                                @php
                                    $fileName = 'Leping_TKDS.pdf';
                                    $filePath = 'documents/' . $fileName;
                                    $fileExists = Storage::disk('public')->exists($filePath);
                                @endphp

                                @if($fileExists)
                                    {{-- ✅ Файл есть — показываем ссылку и кнопку отправки --}}
                                    <div class="flex w-0 flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                        </svg>

                                        <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                            <span class="truncate font-medium">
                                                <a href="{{ Storage::url('public/documents/Leping_TKDS.pdf') }}" target="_blank">
                                                    {{ basename('Leping_TKDS.pdf') }}
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="ml-4 flex-shrink-0">
                                        <a href="{{ route('dashboard-request-sendContract', ['id' => $request->id, 'fileId' => 2]) }}"
                                            class="font-medium text-indigo-600 hover:text-indigo-500">
                                            Send
                                        </a>
                                    </div>
                                @else
                                {{-- ❌ Файла нет — показываем сообщение --}}
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500 text-sm">File not found</span>
                                </div>
                                @endif

                            </li>
                        </ul>
                    </dd>
                </div>
            </dl>
        </div>
    </div>


@endsection
