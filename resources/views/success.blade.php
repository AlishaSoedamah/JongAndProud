<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mail verstuurd| Jong & Proud Amersfoort</title>
        <link href="{{ asset('styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
        <script type="module" src="{{ asset('animations.js') }}"></script>
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
        <div class="center-flex">
            <h1>Je mail is verstuurd!</h1>
        </div>
        </div>
    </body>
</html>
