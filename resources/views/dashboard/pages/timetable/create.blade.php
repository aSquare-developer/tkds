@extends('dashboard.layout')

@php $header = 'Timetable' @endphp

@section('title', config('app.name') . ' ' . $header .' page')
@section('page-header') {{ $header }} @endsection

@section('content')

    <div class="mb-3 sm:flex sm:items-center space-x-4">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Create new lesson</h1>
            <p class="mt-2 text-sm text-gray-700">Here you can create new lesson</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:flex-none">
            <a href="{{ route('dashboard-timetable') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
        </div>
    </div>

  <form class="" action="{{ route('dashboard-timetable-store') }}" method="post">@csrf

      <div>
          <label for="day" class="block text-sm font-medium leading-6 text-gray-900">Choose a day</label>
          <select id="day" name="day" required class="mt-2 block rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="1" selected>Monday</option>
              <option value="2">Tuesday</option>
              <option value="3">Wednesday</option>
              <option value="4">Thursday</option>
              <option value="5">Friday</option>
              <option value="6">Saturday</option>
              <option value="7">Sunday</option>
          </select>
      </div>

      <div class="mt-2">
          <label for="hall_size" class="block text-sm font-medium leading-6 text-gray-900">Choose a hall</label>
          <select id="hall_size" name="hall_size" required class="mt-2 block rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="0" selected>Studio</option>
              <!-- <option value="1">Small hall</option> -->
          </select>
      </div>

      <div class="mt-2">
        <label for="color" class="block text-sm font-medium leading-6 text-gray-900">Choose a color</label>
        <select id="color" name="color" required class="mt-2 block rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <option value="sky" selected>Sky</option>
            <option value="green">Green</option>
            <option value="purple">Purple</option>
            <option value="yellow">Yellow</option>
        </select>
        </div>

      <div class="mt-2">
          <label for="dancestyle" class="block text-sm font-medium leading-6 text-gray-900">Dance style</label>
          <div class="mt-2">
              <input type="text" name="dancestyle" id="dancestyle" class="block rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Dancestyle" required>
          </div>
      </div>

      <div class="mt-2">
          <label for="lesson_start" class="block text-sm font-medium leading-6 text-gray-900">Type lesson start time</label>
          <div class="mt-2">
              <input type="text" name="lesson_start" id="lesson_start" class="block rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Format: 12:30" required>
          </div>
      </div>

      <div class="mt-2">
          <label for="lesson_end" class="block text-sm font-medium leading-6 text-gray-900">Type lesson end time</label>
          <div class="mt-2">
              <input type="text" name="lesson_end" id="lesson_end" class="block rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Format: 12:30" required>
          </div>
      </div>

      <div class="mt-2">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
          <div class="mt-2">
              <input type="text" name="description" id="description" class="block rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Exmaple Open/Close..." required>
          </div>
      </div>

      <div class="mt-2">
          <label for="order_of_lesson" class="block text-sm font-medium leading-6 text-gray-900">Order of Lesson</label>
          <div class="mt-2">
              <input
                  type="number"
                  name="order_of_lesson"
                  id="order_of_lesson"
                  value="1"
                  min="1"
                  max="5"
                  class="block rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                  placeholder=""
              >
          </div>
          <p class="mt-2 text-sm text-gray-500" id="email-description">Порядковый номер тренировки в этот день.</p>
      </div>

    <button type="submit" class="mt-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>

  </form>

@endsection
