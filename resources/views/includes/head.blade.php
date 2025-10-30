<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="aSquare">

  <title>@yield('title')</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/header.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/sticky-footer.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('/css/timetable.css') }}">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.querySelector("form").submit();
        }
    </script>

</head>
