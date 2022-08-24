@extends('dashboard.layout')

@section('title', config('app.name') . ' ' . 'Sign up')

@section('content')

<form class="form-signin" method="POST" action="{{ route('store-new-user') }}">
  @csrf
  <!-- <img class="mb-4" src="{{ URL::asset('img/TKDSv2white.webp') }}" alt="" width="72" height="72"> -->
  <h1 class="mb-3 font-weight-normal">Please sign up</h1>

  <div class="form-group mb-3">
    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
    @error('name')
      <p class="text-danger"><small>{{ $message }}</small></p>
    @enderror
  </div>

  <div class="form-group mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email address" value="{{ old('email') }}" required>
    @error('email')
      <p class="text-danger"><small>{{ $message }}</small></p>
    @enderror
  </div>

  <div class="form-group mb-3">
    <input type="password" class="form-control" name="password" placeholder="Password" required>
    @error('password')
      <p class="text-danger"><small>{{ $message }}</small></p>
    @enderror
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
  <p>
    <small>
      If you have a user, you can <a href="{{ route('sign-in-page') }}">Sign in</a>.
    </small>
  </p>

</form>

@endsection
