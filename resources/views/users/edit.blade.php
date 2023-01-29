<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <form class="main-wrapper" action="{{ url('index/' . $users->id) . '/edit'}}" method="POST">
        @csrf {{ csrf_field() }}
        @method('PUT')
        <div>
        <h2>Edit user</h2>
            <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$users->name}}"></br>
            <label>email</label></br>
            <input type="email" name="email" id="email" value="{{$users->email}}"></br>
            <input type="submit" value="Update" class="main-btn send-btn"></br>
        </div>
    </form>
    </body>
</html>