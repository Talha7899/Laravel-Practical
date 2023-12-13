<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($userData as $value)
              <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->password}}</td>
                <td><a class="btn btn-danger" href="{{url('/')}}/table/delete/{{$value->id}}">Delete</a></td>
                <td><a class="btn btn-warning" href="{{url('/')}}/edit/{{$value->id}}">Edit</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="container">
          <a class="btn btn-success" href="{{ url('/form') }}">Go Back</a>
        </div>
    </div>













<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>