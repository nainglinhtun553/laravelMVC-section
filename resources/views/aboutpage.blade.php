@extends('layouts.main')



@section('myContent')

  <?php 

 echo "<h1 style='color:red;'>This is About Page...</h1>";
 echo "Hello"."<br>";


 ?>
 {{$num1}}+{{$num2}}={{$num1+$num2}} 
 <hr>
 


 @php 
  echo date("d/m/Y");

  @endphp
  <br>


  @if(false)
    <h1>This is true status</h1>
    @elseif(true)
    <h1>This is false status</h1>
    <h1>false</h1>

    @else
    <h1>This is no process</h1>
    <h1>This is not working </h1>

  @endif


  <hr>






@foreach ($fruits as $f)
<h3>{{$f}}</h3>
@endforeach


<hr>



@isset($name)
  <h1>{{ $name }}</h1>
@endisset


@empty($name)
  <h1>This is empty</h1>
@endempty

@endsection




