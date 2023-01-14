<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Team</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        @include('templates/header')
        <div class="main-wrapper">
          <h1>Het Jong & Proud team</h1>
          <div>
            <div>
                <h2>Joshua Kraan</h2>
                <img class="team-pictures" src="{{ asset('images/Teamlead1.webp') }}" alt="Foto van Joshua Kraan">
                <p>Joshua Kraan is 24 jaar en is de oprichter en organisator
                   van Jong & Proud. Naast Jong & Proud zit Joshua bij het 
                   Regenboogplatform Amersfoort en is hij één van de begeleiders 
                   van Jong & Out Amersfoort. Verder houdt Joshua zich bezig met 
                   muziek en fotografie.
                </p>
            </div>
            <div>
                <h2>Marjolein du Pree</h2>
                <img class="team-pictures" src="{{ asset('images/Teamlead2.webp') }}" alt="Foto van Marjolein du Pree">
                <p>Marjolein du Pree is 21 jaar en is kort nadat Jong & Proud is 
                   opgericht mede organisator van Jong & Proud. Ook marjolein is 
                   één van de begeleiders van Jong & Out en zit in het Regenboogplatform
                   Amersfoort. Verder houdt Marjolein zich bezig met muziek, schrijven
                   en lezen. 
                </p>
            </div>
          </div>
        @include('templates/footer')
        </div>
    </body>
</html>
