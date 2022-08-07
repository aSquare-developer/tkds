<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TKDS Contact Us Message</title>
  </head>
  <body>
    <p>See sõnum on saadetud lehelt www.tkds.ee</p>

    <p>Nimi: {{ $contactUsMailData['name'] }}</p>
    <p>E-post: {{ $contactUsMailData['email'] }}</p>

    <p>Sõnum: <br />{{ $contactUsMailData['message'] }}</p>
  </body>
</html>
