<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3">Edit Users Page</h1><hr>
        <a href="{{ url('users/index') }}" class="btn btn-primary mt-5">View Unit</a>
        <form class="mt-5" action="{{ url('users/update/'. $users->id) }}" method="POST">
            @csrf
            <div class="mb-3">
              <input value="{{ $users->firstname }}" name="firstname" type="text" class="form-control" placeholder="Firstname">
            </div>
            <div class="mb-3">
                <input value="{{ $users->lastname }}" name="lastname" type="text" class="form-control" placeholder="Lastname">
            </div>
            <div class="mb-3">
                <input value="{{ $users->email }}" name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <input value="{{ $users->username }}" name="username" type="text" class="form-control" placeholder="Username">
            </div>
            <div class="mb-3">
                <input value="{{ $users->password }}" name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <select value="{{ $users->status }}" name="status" id="" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>
            </div>
            <div class="mb-3">
                <select value="{{ $users->role }}" name="role" id="" class="form-control">
                    <option value="0">Admin</option>
                    <option value="1">Manager</option>
                    <option value="2">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>