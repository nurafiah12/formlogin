<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>
<body>
  <div class="login-page">
    <div class="form">
    
      <form class="login-form" method="POST" action="/dashboard">
        @csrf
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <div class="tombol">
          <button type="submit">Login</button>
          <button><a href="/">Kembali</a></button>
      </div>
      </form>
    </div>
  </div>
</body>
</html>