<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activiteiten</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @include('templates/header')
        <div class="main-wrapper">
          <h1>Activiteiten</h1>
          <div class="calendar">
            <p>this will be a calender</p>
          </div>
          <div class="dates">
            <div class="row1">
              <p><span>19</span>feb</p>
              <p><span>11</span>maa</p>
              <p><span>15</span>apr</p>
              <p><span>20</span>mei</p>
              <p><span>__</span>jun</p>
              <p><span>__</span>juli</p>
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
