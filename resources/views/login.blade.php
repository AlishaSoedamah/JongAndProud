<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper"> 
        @include('templates/header')
          <h1>Login</h1>
          <form action="/login" method="POST">
            @csrf {{ csrf_field() }}
            <button class="google-btn">Login with Google</button>
            <label for="email">Email</label>
            <input type="text" name="email" required>
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" required>
            <input class="submit-btn" type="submit">
            <a href="/sign-up">Nog geen lid? Klik hier</a>
          </form>
        @include('templates/footer')
        </div>
    </body>
</html>
