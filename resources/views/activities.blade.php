<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activiteiten | Jong & Proud Amersfoort</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <script type="module" src="{{ URL::asset('scripts/animations.js') }}"></script>
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
        <h1>Activiteiten</h1>
        <div class="container">
          <table class="table table-bordered">
            <tr>
              <th>Z</th>
              <th>M</th>
              <th>D</th>
              <th>W</th>
              <th>D</th>
              <th>V</th>
              <th>Z</th>
              </tr>
          </table>
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
        </div>
        @include('templates/footer')
    </body>
</html>
