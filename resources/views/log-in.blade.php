<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Jong & Proud Amersfoort</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper"> 
        @include('templates/header')
          <form action="/login" method="POST">
            @csrf {{ csrf_field() }}
            <div>
              <h1>Login</h1>
              <label for="email">Email</label>
              <input type="text" name="email" required>
              <label for="password">Wachtwoord</label>
              <input type="password" name="password" required>
              <input class="main-btn send-btn" type="submit">
              <a href="/sign-up">Nog geen lid? Meld je hier aan</a>
            </div>
          </form>
        </div>
        @include('templates/footer')
    </body>
</html>
