<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @include('templates/header')
        <div>
          <h1>Jong</h1>
          <h1>&</h1>
          <h1>Proud</h1>
          <p>Jong & Proud is een werkgroep binnen het COC Midden Nederland voor 
             LHBTIQ+ jongvolwassenen tussen 18 en 30 jaar in Amersfoort.
          </p>
          <button>Lid worden?</button>
        </div>
        @include('templates/footer')
    </body>
</html>
