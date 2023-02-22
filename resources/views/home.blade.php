
@extends('layouts.main')


@section('myContent')
    <h1 style="color:blue;">This is home page.</h1>
    
    


  {{url('about')}}
  
  <h3>Your Name is {{$name}}</h3>
  <h3>the leature is {{$leature}}</h3>
  <h3>Your job is {{$job}}</h3>

  {!! $age !!}
   {{$num1}}+{{$num2}}= {{$result}}

   <hr>
   <a href="{{url('resultPage/20/30')}}">URL</a>|
   <a href="{{route('myCalculation',[50,40])}}">Route </a>|
   <a href="{{route('passWithroute','Naing Lin Htun')}}">Para Pass</a><br>  

   <img src="{{asset('image/photo.png')}}" width="300px" style="margin:5px;">

@endsection


@section('footer')
  <h1> This is footer</h1>
  <p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus reprehenderit numquam itaque repellendus iure, recusandae mollitia optio excepturi dolorem. Nemo doloribus error saepe, dolores perferendis vitae. Sed tenetur quo eum labore totam ullam dolore, quidem iusto, rem, error magnam suscipit assumenda qui commodi possimus iure quaerat ab enim cum laudantium. Beatae accusantium, quibusdam voluptas, in eveniet nam. Itaque repudiandae eum esse rerum, earum minus eos similique soluta vel inventore nisi, deleniti, molestiae dicta odit in praesentium cupiditate natus. Maxime nostrum quae laborum libero. Tenetur amet deserunt, expedita vel iusto ipsam recusandae, veniam voluptatem assumenda aliquam, laboriosam odit soluta deleniti praesentium aut dignissimos earum inventore. Eaque fugiat aliquam maiores iure accusantium voluptate delectus? Quibusdam, laudantium nemo qui similique dolorem cupiditate debitis culpa, hic cum magni modi numquam. Vero possimus libero nemo itaque illo enim sint suscipit corrupti a, dolorem perferendis in excepturi consequuntur quas rem consectetur ullam. Deserunt explicabo vitae numquam id nostrum architecto eos, voluptatum placeat, eligendi rem totam, aperiam perspiciatis repudiandae laudantium est. Rerum, neque assumenda libero repellendus officia a quia delectus sint numquam explicabo itaque voluptate provident, nam in ipsum dolore, vitae et, placeat quibusdam eos deserunt obcaecati. Repellat incidunt, rem! Iusto exercitationem enim harum dolorem incidunt vero!</p>
  <p>Naing Lin Htun</p>
@endsection



@section('myJavascript')
  <script>
    
      alert('This is Laravel Tutorials');

  </script>
@endsection


<!-- @push('mydoc')
  <script>
    
      document.write('This is js section');
  </script>
@endpush -->