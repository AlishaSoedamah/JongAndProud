<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign up</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @include('templates/header')
        <div class="main-wrapper">
          <h1>Sign up</h1>
          <form>
            <button>Sign up with Google?</button>
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label for="repeatPassword">Repeat your password</label>
            <input type="password" placeholder="Repeat password" name="repeatPassword" required>
            <a href="/login">Already a member? Click here.</a>
          </form>
        @include('templates/footer')
        </div>
    </body>
</html>
