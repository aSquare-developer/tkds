<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New student registration notification</title>
  </head>
  <body>
    <h1>This letter confirms the sending of a letter to the client with the following data:</h1>

    <p>First and Last name of student: {{ $mailData['fullname'] }}</p>
    <p>Age: {{ $mailData['age'] }}</p>
    <p>Dance styles: {{ $mailData['dancestyle'] }}</p>
    <p>Comment: {{ $mailData['comment'] }} </p>
    <p>Email: {{ $mailData['email'] }}</p>

  </body>
</html>
