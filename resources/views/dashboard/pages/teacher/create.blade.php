@extends('dashboard.layout')

@php $header = 'Teachers' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Teachers</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can create new profile of teacher.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="{{ route('dashboard-teachers') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Back
            </a>
        </div>
    </div>

    @include('dashboard.includes.message')

    <form class="" action="{{ route('dashboard-teachers-store') }}" method="post" enctype="multipart/form-data">@csrf

        <div class="mt-2">
            <label for="fullname" class="block text-sm font-medium leading-6 text-gray-900">Full name</label>
            <div class="mt-2">
                <input
                    type="text"
                    name="fullname"
                    id="fullname"
                    value="{{ old('fullname') }}"
                    class="block w-1/2 rounded-md border-0 py-1.5 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    required>
            </div>
        </div>

        <div class="mt-2">
            <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Teacher photo</label>
            <div class="mt-2">
                <input
                    class="relative m-0 block w-1/2 min-w-0 flex-auto rounded border border-solid bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none"
                    type="file"
                    id="photo"
                    name="image_url"
                    value="{{ old('image_url') }}"
                />
            </div>

            @error('image_url')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-2">
            <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">Description</label>
            <div class="mt-2.5">
                <textarea
                    name="description"
                    id="description"
                    rows="4"
                    required
                    class="block w-1/2 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                >{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="mt-2">
            <label for="dance_styles" class="block text-sm font-semibold leading-6 text-gray-900">Dance styles</label>
            <div class="mt-2 w-1/2">
                @foreach($danceStyles as $danceStyle)
                <div class="inline-flex items-center">
                    <div class="flex h-6 items-center">
                        <input
                            id="dance_styles"
                            name="dance_styles[]"
                            type="checkbox" value="{{ $danceStyle->id }}"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                            {{ (isset($teacher) && $teacher->danceStyles->contains($danceStyle->id)) || in_array($danceStyle->id, old('dance_styles', [])) ? 'checked' : '' }}
                        >
                    </div>
                    <div class="mx-3 text-sm leading-6">
                        <label for="dance_styles" class="font-medium text-gray-900">{{ $danceStyle->name }}</label>
                    </div>
                </div>
                @endforeach
            </div>

            @error('dance_styles')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-2">
            <label for="instagram_link" class="block text-sm font-medium leading-6 text-gray-900">Instagram Link</label>
            <div class="mt-2">
                <input
                    type="text"
                    name="instagram_link"
                    id="instagram_link"
                    value="{{ old('instagram_link') }}"
                    placeholder="www.example.com"
                    class="block w-1/2 rounded-md border-0 px-3.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    >
            </div>
        </div>

        <div class="mt-2">
            <label for="facebook_link" class="block text-sm font-medium leading-6 text-gray-900">Facebook Link</label>
            <div class="mt-2">
                <input
                    type="text"
                    name="facebook_link"
                    id="facebook_link"
                    value="{{ old('facebook_link') }}"
                    placeholder="www.example.com"
                    class="block w-1/2 rounded-md border-0 px-3.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    >
            </div>
        </div>

        <div class="mt-2">
            <label for="youtube_link" class="block text-sm font-medium leading-6 text-gray-900">Youtube Link</label>
            <div class="mt-2">
                <input
                    type="text"
                    name="youtube_link"
                    id="youtube_link"
                    value="{{ old('youtube_link') }}"
                    placeholder="www.example.com"
                    class="block w-1/2 rounded-md border-0 px-3.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    >
            </div>
        </div>

        <button type="submit" class="mt-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>

    </form>

@endsection
