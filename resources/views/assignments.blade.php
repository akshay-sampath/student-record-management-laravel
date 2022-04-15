@extends('layout.master')

@section('assign') 

<div class="assignment-form">
  <div class="box-2">
  <div class="atitle">ASSIGNMENTS</div>
    <div class="aform">
      <form method="post" action="assignment">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Section</span>
            <select name="option" class="input">
            <option value="option">Select</option>
            <option value="option1">KM001</option>
            <option value="option2">KM002</option>
            <option value="option3">KM003</option>
            <option value="option4">KM004</option>
            <option value="option5">KM005</option>
            <option value="option6">KM006</option>
            <option value="option7">KM007</option>
            <option value="option8">KM008</option>
            <option value="option9">KM009</option>
          </select>
          <div class="error">@error('option')
            {{$message}}
            @enderror</div>
         </div>

         <div class="input-box">
           <label for="file" class="details">Assignment File</label>
           <input class="inputfile" id="file" type="file" name="assignment" >
           <div class="error">@error('assignment')
            {{$message}}
            @enderror</div>
         </div>

         <div class="button">
          <input type="submit" value="Submit">
        </div>
        </div>

        
      </form>
    </div>
  </div>
</div>

@endsection 