<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>

  @include('includes.navbar')

  @include('includes.message')

  @yield('content')

  @include('includes.footer')

  @include('includes.scripts')

</body>
</html>
