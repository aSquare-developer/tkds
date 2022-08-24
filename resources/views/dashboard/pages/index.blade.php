@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Sign in')

@section('content')

  <div class="bg-light p-5 rounded">
    @auth
    <h1>Dashboard</h1>
    <p class="lead">Hello, {{ auth()->user()->name }}</p>
    <p>
      You can <a href="{{ route('logout.perform') }}">Log out</a>
    </p>
    @endauth

    @guest
    <h1>Warning!</h1>
    <p class="lead">Please login to view the restricted data.</p>
    <p>
      You can <a href="{{ route('sign-in-page') }}">Sing in here</a>
    </p>
    @endguest
</div>

@endsection
