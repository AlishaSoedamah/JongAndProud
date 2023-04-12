<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Overzicht accounts</title>
        <link href="{{ asset('styles.css') }}" rel="stylesheet" type="text/css" >
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="main-wrapper">
    <h1 class="mt-5 mb-5">Dashboard accounts J&P 🏳️‍🌈</h1>
    <table class="table table-hover">
      <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Edit</th>
            <th>Delete</th>
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
              <td>
                <a href="{{ url('/index/' . $user->id . '/edit') }}" title="Edit user"><button class="btn btn-info">Edit</button></a>
              </td>
              <td>
                <form method="POST" action="{{ url('/index' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" title="Delete Student" onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen')">Delete</button>
                </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>