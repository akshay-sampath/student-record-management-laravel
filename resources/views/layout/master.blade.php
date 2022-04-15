<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S.R.M</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<div class="header">
    <div class="title">STUDENT RECORD  MANAGEMENT</div> 
    <div class="header-op">
      <a href="/index">Home</a>
      <a href="/document">Documents</a>
      <a href="/contact">Contact Us</a>
      <a href="/">Log Out</a>
    </div>
</div>
<div>
    @yield('content')
</div>
<div>
    @yield('contents')
</div>
<div>
    @yield('contentt')
</div>
<div>
   @yield('newcontent')
</div>
<div>
  @yield('attend')
</div>
<div>
  @yield('contact')
</div>
<div>
  @yield('announce')
</div>
<div>
  @yield('assign')
</div>
<div>
  @yield('doc')
</div>
</body>
</html>