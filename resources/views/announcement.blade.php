@extends('layout.master')

@section('announce')

  <div class="announcement-form">
  <div class="ctitle">
    <span>ANNOUNCEMENT</span>
  </div>
   <div class="cform">
   <form  action="notification" method="post">
      @csrf
      <div class="user-details">

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
