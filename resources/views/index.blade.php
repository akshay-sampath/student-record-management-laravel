@extends('layout.master')

@section('content')
  <div class="body">
    <div class="pos">
    <p>Welcome<br>
     To The <span>Student</span><br>
     <span>Record Management</span> </p>
    <img class="body-img" src="https://www.vettrak.com.au/wp-content/uploads/2020/10/student-management-banner-1920x1080-1-1024x576.png">
    </div>
    <div class="container">
      <a href="/students" class="box">
        <div class="data">
          <i class="fa fa-graduation-cap"></i>
          <span>Students</span>
        </div>
      </a>
     
      <a href="/assignments" class="box">
        <div class="data">
        <i class="fa fa-pencil"></i>
          <span>Assignment</span>
        </div>
      </a>
      <a href="/announcement" class="box">
        <div class="data">
        <i class="fa fa-bullhorn" aria-hidden="true"></i>
          <span>Announcement</span>
        </div>
      </a>
      <a href="/document" class="box">
        <div class="data">
        <i class="fa fa-file"></i>
          <span>Document</span>
        </div>
      </a>
    </div>
  </div>

@endsection