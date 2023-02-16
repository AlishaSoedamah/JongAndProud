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
          <div class="dates">
            <div class="row1">
              <p><span>11</span> maa</p>
              <p><span>15</span>apr</p>
              <p><span>20</span>mei</p>
              <p><span>nvt</span>jun</p>
              <p><span>nvt</span>juli</p>
              <p><span>19</span>aug</p>
            </div>
            <div class="row2">
              <p><span>16</span>sep</p>
              <p><span>11</span>okt</p>
              <p><span>16</span>okt</p>
              <p><span>25</span>nov</p>
              <p><span>16</span>dec</p>
            </div>
          </div>
        </div>
        </div>
        @include('templates/footer')
    </body>
</html>
