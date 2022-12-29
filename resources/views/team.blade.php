<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Team</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @include('templates/header')
        <div class="main-wrapper">
          <h1>Team</h1>
          <div>
            <div>
                <h2>Team lead 1</h2>
                <img src="" alt="here is a picture of team lead 1">
                <p>Lorem ipsum dolor sit amet, consectetur 
                   adipiscing elit, sed do eiusmod tempor 
                   incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div>
                <h2>Team lead 2</h2>
                <img src="" alt="here is a picture of team lead 2">
                <p>Lorem ipsum dolor sit amet, consectetur 
                   adipiscing elit, sed do eiusmod tempor 
                   incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
          </div>
        </div>
        @include('templates/footer')
    </body>
</html>
