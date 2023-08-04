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

    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '228515946316743');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=228515946316743&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</head>
