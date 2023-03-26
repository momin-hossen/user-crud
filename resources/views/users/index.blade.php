<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
      <h1 class="text-center mt-3">All Users Page</h1><hr>
        <a href="{{ url('users/create') }}" class="btn btn-primary mt-5">Creat Users</a>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Starus</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->status }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      <a href="{{ url('users/edit').'/'.$user->id }}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ url('users/delete').'/'.$user->id }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>