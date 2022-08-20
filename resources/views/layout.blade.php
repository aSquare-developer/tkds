<!DOCTYPE html>
<html lang="et">
@include('includes.head')
<body>

  @include('includes.navbar')

  @include('includes.message')

  @yield('content')

  @include('includes.footer')

  @include('includes.scripts')

</body>
</html>
