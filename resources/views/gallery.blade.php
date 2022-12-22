<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gallery</title>
    </head>
    <body>
        @include('templates/header')
        <div>
          <h1>Galerij</h1>
        </div>
        @include('templates/footer')
    </body>
</html>
