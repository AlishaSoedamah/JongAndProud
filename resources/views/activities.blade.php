<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activiteiten | Jong & Proud Amersfoort</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <script type="module" src="{{ URL::asset('scripts/animations.js') }}"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
        <h1 class="center-title">Activiteiten</h1>
        <div class="activities-container">
            <div>
              <button class="accordion">15 april</button>
              <div class="panel">
                <p>Paaseieren zoeken door stad</p>
              </div>
              <button class="accordion">20 mei</button>
              <div class="panel">
                <p>Karaoke</p>
              </div>
              <button class="accordion">juni</button>
              <div class="panel">
                <p>Pride Amersfoort</p>
              </div>
              <button class="accordion">juli</button>
              <div class="panel">
                <p>Pride Amsterdam</p>
              </div>
              <button class="accordion">19 augustus</button>
              <div class="panel">
                <p>BBQ</p>
              </div>
              <button class="accordion">16 september</button>
              <div class="panel">
                <p>Bowlen</p>
              </div>
              <button class="accordion">11 oktober</button>
              <div class="panel">
                <p>Coming out Weekend</p>
              </div>
              <button class="accordion">16 oktober</button>
              <div class="panel">
                <p>Halloween</p>
              </div>
              <button class="accordion">25 november</button>
              <button class="accordion">16 december</button>
              <div class="panel">
                <p>Kerst</p>
              </div>
          </div>
          <div class="card">
            <div class="calendar-toolbar">
              <button class="prev month-btn"><i class="fas fa-chevron-left"></i></button>
              <div class="current-month"></div>
              <button class="next month-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="calendar">
              <div class="weekdays">
                <div class="weekday-name">Za</div>
                <div class="weekday-name">Zo</div>
                <div class="weekday-name">Ma</div>
                <div class="weekday-name">Di</div>
                <div class="weekday-name">Wo</div>
                <div class="weekday-name">Do</div>
                <div class="weekday-name">Vr</div>
              </div>
              <div class="calendar-days"></div>
              <p>Meld je hier aan voor de komende activiteit deze maand!</p>
              <button href="https://docs.google.com/forms/d/e/1FAIpQLSf_zqe7K2WCmbVzHfwzEiCePTN7P7pzgvgylXcjs9zEbjXQFQ/viewform" class="main-btn">Meld je aan!</button>
            </div>
          </div>
</div>
</div>
        @include('templates/footer')
    </body>
</html>
