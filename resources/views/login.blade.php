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
      <form action="{{url('logindata')}}" method="POST"> @csrf> <div class="form-control">
          <input type="text" name="email">
          <label>Email</label>
        </div>
        <div class="form-control">
          <input type="password" name="password">
          <label>Password</label>
        </div>
        <button class="btn">Login</button>
      </form>
    </div>
  </body>
</html>