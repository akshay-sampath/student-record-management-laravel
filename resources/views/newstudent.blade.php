@extends('layout.master')

@section('newcontent')
  <div class="form">
    <div class="form-title">Add a Student</div>
    <div class="content">
      <form action="newstudent" method="post">
      @csrf
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input name="full_name" type="text" placeholder="Enter Full Name" />
            <div class="error">@error('full_name')
            {{$message}}
            @enderror</div>
          </div>
          

          <div class="input-box">
            <span class="details">Registration Number</span>
            <input name="Registration_number" type="number" placeholder="Enter Registration Number" >
            <div class="error">@error('Registration_number')
            {{$message}}
            @enderror</div>
          </div>

        <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="text" placeholder="Enter Email" >
            <div class="error">@error('email')
            {{$message}}
            @enderror</div>
          </div>  

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input name="phone" type="number" placeholder="Enter Contact Number" >
            <div class="error">@error('phone')
            {{$message}}
            @enderror</div>
          </div>

          <div class="input-box">
            <span class="details">Branch</span>
            <input name="branch" type="text" placeholder="Enter Branch Name" >
            <div class="error">@error('branch')
            {{$message}}
            @enderror</div>
          </div>
          
        </div>
        <div class="gender-details">
          <span>Gender</span>
          <div>
          <input type="radio" name="gender" >Male
          </div>
          <div>
          <input type="radio" name="gender" >Female
          </div>
          <div>
          <input type="radio" name="gender" >Prefer not to say
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</div>

@endsection