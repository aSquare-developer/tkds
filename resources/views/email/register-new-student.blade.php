<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registreerimine uue õpilase</title>
  </head>
  <body>
    <h1>Uus õpilane soovib registreerida trennidesse.</h1>

    <p>Ees ja perekonnanimi: {{ $mailData['fullname'] }}</p>
    <p>Vanus: {{ $mailData['aeg'] }}</p>
    <p>Tantsustiilid: {{ $mailData['dancestyle'] }}</p>
    <p>E-post: {{ $mailData['email'] }}</p>

    <p>See sõnum on saadetud lehelt www.tkds.ee</p>
  </body>
</html>
