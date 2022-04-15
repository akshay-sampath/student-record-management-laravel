@extends('layout.master')

@section('contact')

<div class="contact-form">
  <div class="ctitle">
    <span>CONTACT US</span>
  </div>
  <div class="cform">
  <form  action="reply" method="post">
    @csrf
    <div class="user-details">
    <div class="input-box">
                <span class="details">Name</span>
                <input name="name" type="text" placeholder="Enter Your Name" />
                <div class="error">@error('name')
            {{$message}}
            @enderror</div>
      </div>
     <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="text" placeholder="Enter Your Email" />
            <div class="error">@error('email')
            {{$message}}
            @enderror</div>
      </div> 
      <div class="input-box">
            <span class="details">Subject</span>
            <input name="subject" type="text" placeholder="Enter Your Subject" />
            <div class="error">@error('subject')
            {{$message}}
            @enderror</div>
      </div>
      <div class="input-box">
            <span class="details">Message</span>
            <textarea class="textarea" rows = "8" cols = "62" name="message">
            </textarea>
            <div class="error">@error('message')
            {{$message}}
            @enderror</div>
      </div>
    </div>
    <div class="button">
      <input  type="submit"  value="Send Message" />
    </div>
  </form>
  </div>
</div>

@endsection
