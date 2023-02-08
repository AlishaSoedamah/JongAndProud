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
        <h1>Activiteiten</h1>
          <div class="card">
            <div class="calendar-toolbar">
              <button class="prev month-btn"><i class="fas fa-chevron-left"></i></button>
              <div class="current-month"></div>
              <button class="next month-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="calendar">
              <div class="weekdays">
                <div class="weekday-name">Sa</div>
                <div class="weekday-name">Su</div>
                <div class="weekday-name">Mo</div>
                <div class="weekday-name">Tu</div>
                <div class="weekday-name">We</div>
                <div class="weekday-name">Th</div>
                <div class="weekday-name">Fr</div>
              </div>
              <div class="calendar-days"></div>
            </div>
            <div class="goto-buttons">
              <button type="button" class="btn prev-year">Prev Year</button>
              <button type="button" class="btn today">Today</button>
              <button type="button" class="btn next-year">Next Year</button>
            </div>
          </div>
          <div class="container">
          <p>Meld je hier aan voor de komende activiteit deze maand!</p>
            <button class="main-btn">Meld je aan!</button>
          </div>
          <div class="dates">
            <div class="row1">
              <p><span>19</span> feb</p>
              <p><span>11</span> maa</p>
              <p><span>15</span>apr</p>
              <p><span>20</span>mei</p>
              <p><span>nvt</span>jun</p>
              <p><span>nvt</span>juli</p>
            </div>
            <div class="row2">
              <p><span>19</span>aug</p>
              <p><span>16</span>sep</p>
              <p><span>11</span>okt</p>
              <p><span>16</span>okt</p>
              <p><span>25</span>nov</p>
              <p><span>16</span>dec</p>
            </div>
          </div>
        </div>
        @include('templates/footer')
    </body>
</html>
