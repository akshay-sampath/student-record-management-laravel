<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<center class="login-title"> STUDENT <span> RECORD</span> MANAGEMENT</center>
<div class="login">
<div class="head">
    <a class="form-title signin" href="/">LOGIN</a>
    <a class="form-title signup" href="/register">REGISTER</a>
    </div>
    
    
    <div class="content">
      <form action="/" method="post">
      @csrf
        <div class="user-details">

          <div class="input-box">
            <span class="details">Username</span>
            <input name="username" type="text" placeholder="Enter Your Username" />
            <div class="error">@error('username')
            {{$message}}
            @enderror</div>
          </div>
          

          <div class="input-box">
          <span class="details">Password</span>
            <input name="password" type="password" placeholder="Enter your password" />
            <div class="error">@error('password')
            {{$message}}
            @enderror</div>
          </div>

          <div class="button submit">
          <input  type="submit" value="LOGIN">
          </div>

       </div>
     </form>
</div>
</div>
<div class="signup">
  @yield('signup')
</div>
</body>
</html>