@extends('layout.master')

@section('doc')

<div class="documents">
<form method="post" action="document">
  @csrf
      <div class="personal-info">
       <span class="personal-header">Personal Information</span>
       
       <div class="per">
          <div class="box">
            <span class="box-input">Full Name</span>
            <input type="text" class="input" name="fullname" placeholder="Enter Your Full Name" >
            <div class="error">@error('fullname')
              {{$message}}
              @enderror
            </div>
          </div>

          <div class="box">
            <span class="box-input">Contact Number</span>
            <input type="text" class="input" name="contact" placeholder="Enter Your Contact Number" >
            <div class="error">
              @error('contact')
              {{$message}}
              @enderror
            </div>
          </div>

          <div class="box">
            <span class="box-input">Email</span>
            <input type="text" class="input" name="email" placeholder="Enter Your Email" >
            <div class="error">
              @error('email')
              {{$message}}
              @enderror
            </div>
          </div>
       </div>
        <div class="address">
          <span class="box-input">Address</span>
          <div class="box">
            <div class="subbox">
            <input type="text" class="input" name="city" placeholder="City" >
            <div class="error">
              @error('city')
              {{$message}}
              @enderror
            </div>
            </div>
            <div class="subbox">
            <input type="text" class="input" name="state" placeholder="State">
            <div class="error">
              @error('state')
              {{$message}}
              @enderror
            </div>
            </div>
           <div class="subbox">
           <input type="text" class="input" name="pincode" placeholder="Pincode">
            <div class="error">
              @error('pincode')
              {{$message}}
              @enderror
            </div>
           </div>
           <div class="subbox">
           <input type="text" class="input" name="country" placeholder="Country">
            <div class="error">
              @error('country')
              {{$message}}
              @enderror
            </div>
           </div>
          </div>
        </div>
    </div>

    <hr>  

    <div class="education">
      <span class="certificate">Certificates</span>
        <div class="box">
          <span class="box-input">10th Class</span>
         <div class="subbox">
         <input type="text" class="school" name="school1" placeholder="Enter your School Name" >
          <div class="error">
            @error('school1')
            {{$message}}
            @enderror
          </div>
         </div>
         <div class="subbox">
         <input type="file" class="input" name="certificate1" >
          <div class="error">
            @error('certificate1')
            {{$message}}
            @enderror
          </div>
         </div>
        </div>
        <div class="box">
          <span class="box-input">12th Class</span>
          <div class="subbox">
          <input type="text" class="school" name="school" placeholder="Enter your School Name" >
          <div class="error">
            @error('school')
            {{$message}}
            @enderror
          </div>
          </div>
          <div class="subbox">
          <input type="file" class="input" name="certificate" >
          <div class="error">
            @error('certificate')
            {{$message}}
            @enderror
          </div>
          </div>
        </div>
    </div>

    <hr>

    <div class="button">
      <input type="submit" name="submit" value="Submit" >
    </div>

  </form>
</div>

@endsection



