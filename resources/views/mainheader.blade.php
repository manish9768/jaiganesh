<!DOCTYPE html>
<html>
<head>


  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

img {
    height: 60px;
    width: 90px;
}
.logo
{
    text-decoration: none !important;
    padding: 0px !important;
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="{{asset('/')}}" class="logo"><img src="{{asset('images\logo-new.png')}}" class="img-rounded" alt="Cinque Terre"></a>
  <div class="header-right">
    <a class="@if(isset($topbar) && $topbar == 'home') active @endif" href="{{asset('/')}}">Home</a>
   <a class="@if(isset($topbar) && $topbar == 'about') active @endif" href="{{asset('aboutus')}}">About Us</a>
    <a class="@if(isset($topbar) && $topbar == 'contact') active @endif" href="{{asset('contactus')}}">Contact Us</a>
  </div>
</div>

<div style="padding-left:20px">
    
</div>

</body>
</html>
