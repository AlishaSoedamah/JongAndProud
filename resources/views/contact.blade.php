<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact | Jong & Proud Amersfoort</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
          <form action="" method="POST">
          @csrf {{ csrf_field() }}
            <div>
                <h1>Contact</h1>
                <label for="name">Naam</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="email">Email<span>*</span></label><br>
                <input type="email" id="email" name="email"><br>
                <label for="message">Bericht<span>*</span></label><br>
                <div>
                    <textarea style="resize: none;" id="message" name="message" rows="10" cols="60"></textarea><br><br>
                    <input class="main-btn send-btn" type="submit" value="Verzenden">
                </div>
            </div>
        </form> 
        </div>
        @include('templates/footer')
    </body>
</html>
