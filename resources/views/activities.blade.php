<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activiteiten</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <script type="module" src="{{ URL::asset('scripts/animations.js') }}"></script>
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
          <h1>Activiteiten</h1>
          <div class="wrapper">
        <header>
          <p class="current-date"></p>
          <div class="icons">
            <span id="prev" class="material-symbols-rounded"><</span>
            <span id="next" class="material-symbols-rounded">></span>
          </div>
          </header>
            <div class="calendar">
              <ul class="weeks">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
              </ul>
              <ul class="days"></ul>
            </div>
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
            <p>Meld je hier aan voor de komende activiteit deze maand!</p>
            <button class="main-btn">Meld je aan!</button>
          </div>
        @include('templates/footer')
        </div>
    </body>
</html>
