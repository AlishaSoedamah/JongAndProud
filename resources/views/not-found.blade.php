<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404 | Jong & Proud Amersfoort</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <script type="module" src="{{ URL::asset('scripts/animations.js') }}"></script>
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
            <div class="center-flex">
                <h1>404</h1>
                <h2>Oops! We kunnen deze pagina niet vinden</h2>
            </div>
        </div>
    </body>
</html>
