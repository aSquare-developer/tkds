<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>@yield('title')</title>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

   <!-- Custom styles for this template -->
   <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}">
 </head>


<body class="text-center">
  @include('includes.message')
<form class="form-signin" method="POST" action="{{ route('login') }}">
  @csrf

  <h1 class="mb-3 font-weight-normal">Please sign in</h1>

  @if (session()->has('error-message'))
    <p class="text-danger"><small>
      {{ session()->get('error-message') }}
    </small></p>
  @endif

  <div class="form-group mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
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

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <!-- <p>
    <small>
      If you don't have a user, you can <a href="{{ route('sign-up-page') }}">Sign up</a>.
    </small>
  </p> -->
</form>

</body>
</html>
