<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign up</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
          <form action="/sign-up" method="POST">
            @csrf {{ csrf_field() }}
            <div>
              <h1>Word lid</h1>
              <button class="google-btn"> Aanmelden met Google</button>
              <label for="email">Email<span>*</span></label>
              <input type="email" name="email" required>
              <label for="email">Naam<span>*</span></label>
              <input type="text" name="name" required>
              <label for="password">Wachtwoord<span>*</span></label>
              <input type="password" name="password" required>
              <label for="repeatPassword">Herhaal wachtwoord<span>*</span></label>
              <input type="password" name="repeatPassword" required>
              <input class="main-btn" type="submit">
              <a href="/login">Already a member? Click here.</a>
            </div>
          </form>
        </div>
        @include('templates/footer')
    </body>
</html>
