<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @include('templates/header')
        <div>
          <h1>Over ons</h1>
          <p>Jong & Proud organiseer t om de maand een 
             activiteit. Deze activiteiten zijn bedoelt om plezier 
             te maken met elkaar of lekker en nieuwe LHBTI+ 
             mensen te leren kennen. 
          </p>
          <p>
            Jong & Proud creëer t een veilige plek voor LHBTI+ 
            jong volwassen tussen de 18 en 30 jaar. 
            Niet alleen organiseren wij activiteiten voor plezier 
            en veiligheid maar we hebben ook veel educatieve 
            mogelijkheden gepland staan! 
          </p>
          <p>
            Voor de Jong & Proud leden zijn er enkele privé 
            activiteiten, verder Iedereen is welkom en wij 
            ver welkomen allen om lid te worden.
          </p>
          <img src="" alt="logo">
        </div>
        @include('templates/footer')
    </body>
</html>
