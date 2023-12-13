<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container my-5">
      <h1>Update User Information</h1>
        <form action="{{ $url }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ $userData->name }}">
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                  </span>
                  <br>
              </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $userData->email }}">
              <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
              </span>
              <br>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{ $userData->password }}">
              <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
              </span>
              <br>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
          </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>