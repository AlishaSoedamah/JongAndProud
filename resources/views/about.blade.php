<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Over ons | Jong & Proud Amersfoort</title>
        <link href="{{ asset('build/assets/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <script type="module" src="{{ URL::asset('scripts/animations.js') }}"></script>
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
          <div class="about-container">
            <div class="about-row-left">
              <h1>Over ons</h1>
              <p>Jong & Proud organiseert om de maand een 
                activiteit. Deze activiteiten zijn bedoelt om plezier 
                te maken met elkaar of lekker en nieuwe LHBTI+ 
                mensen te leren kennen. 
              </p>
              <p>
                Jong & Proud creëert een veilige plek voor LHBTI+ 
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
              <button class="main-btn">Word lid</button> 
            </div>
            <div class="about-row-right">
              <img class="about-img" src="{{ asset('images/logo.png') }}" alt="Jong & Proud logo">
            </div>
          </div>
          <h1 class="center-title">Ons team</h1>
          <div class="team">
            <div class="team-row-one">
                <h2>Joshua Kraan</h2>
                <img class="team-pictures" src="{{ asset('images/Teamlead1.webp') }}" alt="Joshua Kraan">
                <h3>organisator</h3>
                <p>Joshua Kraan is 24 jaar en is de oprichter en organisator
                   van Jong & Proud. Naast Jong & Proud zit Joshua bij het 
                   Regenboogplatform Amersfoort en is hij één van de begeleiders 
                   van Jong & Out Amersfoort. Verder houdt Joshua zich bezig met 
                   muziek en fotografie.
                </p>
            </div>
            <div class="team-row-two">
                <h2>Marjolein du Pree</h2>
                <img class="team-pictures" src="{{ asset('images/Teamlead2.webp') }}" alt="Marjolein du Pree">
                <h3>organisator</h3>
                <p>Marjolein du Pree is 21 jaar en is kort nadat Jong & Proud is 
                   opgericht mede organisator van Jong & Proud. Ook marjolein is 
                   één van de begeleiders van Jong & Out en zit in het Regenboogplatform
                   Amersfoort. Verder houdt Marjolein zich bezig met muziek, schrijven
                   en lezen. 
                </p>
            </div>
          </div>
        </div>
        @include('templates/footer')
    </body>
</html>
