@extends('layout.login')

@section('signup')
<div class="reg">
    <div class="head">
    <a class="form-title login-click" href="/">LOGIN</a>
    <a class="form-title signup-click" href="/register">REGISTER</a>
    </div>
    
    <div class="content">
      <form action="register" method="post">
        @csrf
        <div class="user-details">

        <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="text" placeholder="Enter Your Email" />
            <div class="error">@error('email')
            {{$message}}
            @enderror</div>
          </div> 

          <div class="input-box">
            <span class="details">Userame</span>
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

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input name="confirm_password" type="password" placeholder="Enter your password" />
            <div class="error">@error('confirm_password')
            {{$message}}
            @enderror</div>
          </div>

          <div class="button submit">
          <input type="submit" value="REGISTER">
        </div>
        
   </div>
</form>
</div>
</div>
@endsection