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
        <section class="hero main-wrapper">
          <div class="fancy-hero-text">
            <h1>Jong</h1>
            <h1>&</h1>
            <h1>Proud</h1>
          </div>
          <p class="hero-desc">Jong & Proud is een werkgroep binnen het COC Midden Nederland voor 
                LHBTIQ+ jongvolwassenen tussen 18 en 30 jaar in Amersfoort.
          </p>
          <butto class="cta-btn">Lid worden?</button>
        </section>
        @include('templates/footer')
    </body>
</html>
