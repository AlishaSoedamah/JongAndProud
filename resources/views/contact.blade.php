<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
        <div class="main-wrapper">
        @include('templates/header')
          <h1>Contact</h1>
          <form action="" method="POST">
            <label for="name">Naam</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email<span>*</span></label><br>
            <input type="email" id="email" name="email"><br>
            <label for="message">Bericht<span>*</span></label><br>
            <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>
            <input type="submit" value="Submit">
        </form> 
        @include('templates/footer')
        </div>
    </body>
</html>
