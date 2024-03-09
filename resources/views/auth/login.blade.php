<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/Login/login.css') }}">
    <script src="{{ asset('assets/Login/login.js') }}"></script>
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form method="POST" action="{{url('logindata')}}"> @csrf <div class="form-control">
          <label>Username</label>
          <br>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-control">
          <label>Password</label>
          <br>
          <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
    </div>
  </body>
</html>