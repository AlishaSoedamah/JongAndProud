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
        <div class="main-wrapper">
          <section class="hero fancy-hero-text">
          <div class="hero-img-container">
            <div class="hero-img hero-img-one">
              <img src="" alt="">
            </div>
            <div class="hero-img hero-img-two">
              <img src="" alt="">
            </div>
            <div class="hero-img hero-img-three">
              <img src="" alt="">
            </div>
            <div class="hero-img hero-img-four">
              <img src="" alt="">
            </div>
            <div class="hero-img hero-img-five">
              <img src="" alt="">
            </div>
          </div>

            <h1>Jong</h1>
            <h1>&</h1>
            <h1>Proud</h1>
            <p class="hero-desc">Jong & Proud is een werkgroep binnen het COC Midden Nederland voor 
                LHBTIQ+ jongvolwassenen tussen 18 en 30 jaar in Amersfoort.
            </p>
          <button class="cta-btn">Lid worden?</button>
          </section>
        <section>
          <div class="quote-container">
            <p class="quote">Chaz Bono <q>I've been embraced by a new community. That's what happens when you're
             finally honest about who you are; you find others like you.</q> 
            <p>
          </div>
        </section>
        <article>
          <h2>Wat is Jong & Proud?</h2>
          <p>Niet iedereen voelt zich veilig in hun eigen omgeving om over het onderwerp LHBTIQ+ 
            te praten of om hulp te vragen. Dit geldt ook voor jong volwassenen die 
            zich pas net uitvogelen wie ze werkelijk zijn. Jong & Proud is een werkgroep 
            binnen het COC Midden Nederland voor LHBTIQ+ jongvolwassenen tussen 18 en 30 jaar in Amersfoort.
            Wij creëren een veilige plek in Amersfoort om samen plezier te hebben en elkaar te ondersteunen.
          </p>
          <button class="main-btn" >Over ons</button>
          <div class="core-values">
            <div class="big-widget">
              <h3>Veilige plek creëen</h3>
              <p>Niet bang hoeven zijn om jezelf te kunnen zijn</p>
            </div>
          <div class="small-widget-container">
            <div class="small-left-widget">
              <h3>Activiteiten organiseren</h3>
              <p>Plezier hebben met elkaar</p>
            </div>
            <div class="small-right-widget">
              <h3>Connecties maken</h3>
              <p>Leer andere mensen in dezelfde community kennen</p>
            </div>
          </div>
          <p>Om meer te weten, stuur gerust een email</p>
          </div>
        </article>
        <section class="cta-bottom">
          <h2>Lid worden? Jazeker!</h2>
          <p>Om lid te worden van Jong & Proud kunt u een email sturen naar het emailadres of u kunt ons contacteren op Facebook of Instagram. 
             Als u zich aanmeld ontvangt u een email met informatie. Nadat wij de aanmelding hebben 
             bevestigd kunt u een account aanmaken op de website waardoor u altijd op de hoogte wordt gehouden 
             met de nieuwste activiteiten en meer!</p>
             <button class="cta-btn">Ik wil lid worden</button>
        </section>
        @include('templates/footer')
      </div>
    </body>
</html>
