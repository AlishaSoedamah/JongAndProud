<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @include('templates/header')
        <div class="main-wrapper">
          <h1>Login</h1>
          <form>
            <button>Login with Google?</button>
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <a href="/sign-up">Not a member? Click here.</a>
          </form>
        </div>
        @include('templates/footer')
    </body>
</html>
