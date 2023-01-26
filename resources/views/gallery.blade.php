<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galerij | Jong & Proud Amersfoort</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
          <h1>Galerij</h1>
        </div>
        @include('templates/footer')
    </body>
</html>
