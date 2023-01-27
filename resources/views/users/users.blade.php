<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Overzicht accounts</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" >
        <script type="module" src="{{ URL::asset('scripts/animations.js') }}"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    </head>
    <body>
    <div class="container">
    <table class="table">
      <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Updated at</th>
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at}}</td>
              <td>{{$user->updated_at}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>

    </body>
</html>