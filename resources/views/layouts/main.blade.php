<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <style>
    
    a{
      text-decoration: none;

    }


    *{
     
     font-family: "Sofia", sans-serif;
     color:white;
      
    }
  </style>
</head>
<body>

  <a href="{{route('myhome')}}">Home Page</a> |
  <a href="{{url('about')}}">About Page</a> |
  <a href="{{url('contact')}}">Contact Page</a> |
  <a href="{{route('ser')}}">Service Page</a>
  <hr>
  


  @yield('myContent')
      <h1 style="background-color:#34568b;">This is end of my content with yield method</h1>

  @yield('footer')

  <h1 style="color:red;margin:0 600px;">The End</h1>






  
</body>
<script src="{{asset('js/app.js')}}"></script>
@yield('myJavascript')

<!-- @stack('mydoc') -->
</html>