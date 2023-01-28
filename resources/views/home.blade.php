<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home 🏳️‍🌈 🏳️‍⚧️ | Jong & Proud Amersfoort</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" >
        <script type="module" src="{{ URL::asset('scripts/animations.js') }}"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
        <section class="hero fancy-hero-text">
          <div class="animated-letters">
            <h1 class="fancy-text">Jong</h1>
            <h1 class="fancy-text">& Proud</h1>
          </div>
          <div class="desc-block">
            <p class="hero-desc">Jong & Proud is een werkgroep binnen het COC Midden Nederland voor 
                LHBTIQ+ jongvolwassenen tussen 18 en 30 jaar in Amersfoort.
            </p>
          </div>
          <div class="main-hero-img">
          <img class="big-img" src="{{ asset('images/card5.jpeg') }}" alt="">
          <div id="loader-wrapper">
            <div class="loader">
              <img class="hero-img hero-img-two" src="{{ asset('images/card2.jpeg') }}" alt="">
              <img class="hero-img hero-img-three" src="{{ asset('images/card3.jpeg') }}" alt="">
              <img class="hero-img hero-img-four" src="{{ asset('images/card4.jpeg') }}" alt="">
              <img class="hero-img hero-img-five" src="{{ asset('images/card1.jpeg') }}" alt="">
            </div>
          </div>
          </div> 
        <a href="/sign-up"><button class="main-btn">Lid worden?</button></a>
        </section>
        <section class="quote-container">
          <div class="quote-block">
            <blockquote class="quote">I've been embraced by a new community. That's what happens when you're
             finally honest about who you are; you find others like you.</blockquote> 
            <cite>Chaz Bono</cite>
          </div>
        </section>
        <article>
          <div class="center-flex">
            <h2>Wat is Jong & Proud?</h2>
            <p class="text-container">Niet iedereen voelt zich veilig in hun eigen omgeving om over het onderwerp LHBTIQ+ 
              te praten of om hulp te vragen. Dit geldt ook voor jong volwassenen die 
              zich pas net uitvogelen wie ze werkelijk zijn. Jong & Proud is een werkgroep 
              binnen het COC Midden Nederland voor LHBTIQ+ jongvolwassenen tussen 18 en 30 jaar in Amersfoort.
              Wij creëren een veilige plek in Amersfoort om samen plezier te hebben en elkaar te ondersteunen.
            </p>
            <a href="/about"><button class="main-btn">Over ons</button></a>
          </div>
          <div class="core-values">
            <div class="big-widget">
              <div class="core-values-text">
                <h3 class="widget-text" >Veilige plek creëen. Niet bang hoeven zijn om jezelf te kunnen zijn</h3>
              </div>
              <div>
                <img class="big-img-values" src="{{ asset('images/Rainbow-flag-sky.webp') }}" alt="The rainbow flag">
              </div>
            </div>
            <div class="small-left-widget">
              <img class="small-img-left" src="{{ asset('images/Rainbow-flag-sky.webp') }}" alt="The rainbow flag">
              <h3 class="widget-text">Activiteiten organiseren. Plezier hebben met elkaar</h3>
            </div>
            <div class="small-right-widget">
              <img class="small-img-right" src="{{ asset('images/Rainbow-flag-sky.webp') }}" alt="The rainbow flag">
              <h3 class="widget-text">Connecties maken. Leer andere mensen in dezelfde community kennen</h3>
          </div>
          </div>
        </article>
        <section class="cta-bottom center-flex">
          <h2>Lid worden? Jazeker!</h2>
          <p class="text-container">Om lid te worden van Jong & Proud kunt u een email sturen naar het emailadres of u kunt ons contacteren op Facebook of Instagram. 
             Als u zich aanmeld ontvangt u een email met informatie. Nadat wij de aanmelding hebben 
             bevestigd kunt u een account aanmaken op de website waardoor u altijd op de hoogte wordt gehouden 
             met de nieuwste activiteiten en meer!</p>
          <a href="/sign-up"><button class="main-btn">Ik wil lid worden</button></a>
        </section>
      </div>
      @include('templates/footer')
    </body>
</html>
