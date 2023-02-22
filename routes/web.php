<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\customerController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
    $num1=10;
    $num2=20;
    $result=$num1+$num2;
    return view('home',["name"=>"Code Labs","leature"=>"web development","age"=>"<h2 style='color:red;'>Your age is 26</h2>"],["job"=>"Web Developer","num1"=>$num1,"num2"=>$num2,"result"=>$result]);
})->name('myhome');

// Route::get('about',function(){
//     return view('aboutpage',["message"=>"This is testing message from server site."]);
// });


// Route::get('about',function(){
//     $num1=20;
//     $num2=30;
//     $result=$num1+$num2;
//     return view('aboutpage',["message"=>"This is testing message from server site.","result"=>$result]);
// });

// another way 
// Route::view(‘URL’,’view’,’parameter’)
// Route::view('about','aboutpage',["message"=>"This is testing message from server site."]);

Route::view('about','aboutpage',["num1" =>10, "num2"=>20,"fruits"=>['apple','mango','banana',"name"=>"code labs"]]);

// direct for services page
Route::view('customer/help/service','service')->name('ser');

route::get('contact',function(){
    return view('contact');
});

Route::get('customer',function(){
    return view('customer.list');
});



Route::get('vipMaleCustomer',function(){
    return view('customer.vipCustomer.male.list');
});


Route::get('vipFemaleCustomer',function(){
    return view('customer.vipCustomer.female.list');
});



Route::get('resultPage/{num1?}/{num2?}',function($num1,$num2){

    $myresult=$num1+$num2;
    return view('result',['result'=>$myresult]);

})->name('myCalculation');


Route::get('paraPass/{name?}',function($myName="Your Name is empty"){
    return $myName;

})->name('passWithroute');

// Route::get('/about',function(){
//     return "About Page";

// });


// Route::get('user/contact',function(){
//         return "user contact page.";
// });



// parameter with default value 
// Route::get('customer/{name?}/{age?}/{job?}',function($name="Aung Aung",$age=null,$job="Web Developer"){
//         return "customer name is" ."&nbsp;". $name. "&nbsp;"."and his age is "."&nbsp;".$age."<br>"."his job is ". $job;
// });



// function sum($num1){
//     return $num1;
// }
// sum(1);



Route::get('sum/{num1}/{num2}',function($num1,$num2){
    return $num1+$num2;
});


Route::get('add/{num1}/{num2}',fn($num1,$num2)=> $num1 + $num2);




// writing with pure php code
Route::get('getData',function(){
    

    // echo "<pre>";

    // convert row to json format with php 
    

    // return $jsonData;
    // var_dump($jsonData);

    // format json data
    // dd($jsonData);

    // dd($jsonData[0]->price);

    // dd($data[0]->image);

    // each index are asign to j

    // overwrite variable


    // get data from fakestore
    $data = file_get_contents("https://fakestoreapi.com/products");
    // return $data;
    $jsondata=json_decode($data);
    $result=array_filter($jsondata,fn($j)=>$j->price<50);
    dd($result);
});




// writing with laravel style 
// Route::get('laraGetData',function(){
//     $data=Http::get("https://fakestoreapi.com/products");
//     // take data as json format from api website.
//     $data=$data->object();

//     //show result data in browser.
//     // dd($data[0]->title);

//     $data=collect($data)->where("price",'<',10)->toArray();
//     // dd($data);
    
//     foreach ($data as $item) {

//         echo $item->image."<br>";
//     }

// });



// view all data

Route::get('alllaraGetData',function(){
     $data=Http::get("https://fakestoreapi.com/products")->object();
    // take data as json format from api website.
     //last() collection method သည် data ထဲမှာ နောက်ဆုံးခန်းရဲ့ api data များကို ထုတ်ကြည့်ချင်ရင် အသုံးပြုသည်။ 
     //first() collection method သည် data ထဲမှာ ပထမဆုံးအခန်းကို ထုတ်ကြည့်ချင်ရင် အသုံးပြုသည်။ 
    // $data=collect($data)->max();

    dd($data);
});




//view max data from api server

Route::get('laraGetData',function(){
     $data=Http::get("https://fakestoreapi.com/products")->object();
    // take data as json format from api website.
     //last() collection method သည် data ထဲမှာ နောက်ဆုံးခန်းရဲ့ api data များကို ထုတ်ကြည့်ချင်ရင် အသုံးပြုသည်။ 
     //first() collection method သည် data ထဲမှာ ပထမဆုံးအခန်းကို ထုတ်ကြည့်ချင်ရင် အသုံးပြုသည်။ 
    $data=collect($data)->max();

    dd($data);
});


// view max number

Route::get('calCu',function(){
    $num=[1,2,3,4,5,6,7];

    $data=collect($num)->max();

     dd($data);
});



// ကိုယ်သတ်မှတ်တဲ့ price ရဲ့ တန်ဖိုးနဲ့ သက်ဆိုင်သော data ကို ထုတ်ကြည့်ချင်ရင် အောက်ပါအတိုင်း ရေးသည်။ 
//ထုတ်ကြည့်သော တန်ဖိုးက 22.3,109,168 ဖြစ်သည်။
Route::get('customGetData',function(){
     $data=Http::get("https://fakestoreapi.com/products")->object();
    
    $data=collect($data)->whereIn("price",[22.3,109,168])->toArray();

    dd($data);
});



// using get method for testing post method
Route::view('customer/register','customerRegister');


//using post method 
// Route::post('postTest/{name}/{age}',function($name,$age){
//     return"Hello I am"."&nbsp;" . $name."&nbsp;"."and My age is "."&nbsp;". $age;

// })->name('CustomerPostTest');






// Route::post('postTest',function(Request $request){

//     // return value method
//     // return $_POST['userName'];
//     // return $_REQUEST['userName'];


//     dd($request->all());


// })->name('CustomerPostTest');



//  Route::post('postTest/{id},{name}',function(Request $request,$id,$name){

//     // change array format form user send data.
//     $userData=[
//         'name'=>$request->userName ,
//         'age'=>$request->userAge,
//         'address'=> $request->userAddress,
//         'Gender'=>$request->userGender
//     ];

//     // display array format
//     dd($request->all(),$userData,$id,$name);


// })->name('CustomerPostTest');


// customerController
// Route::get('helloTest',function(){
//     return "hello world";
// });

// writing route with controller 
Route::get('helloTest',[customerController::class,'outputhello']);



Route::post('postTest',[AdminController::class,'adminPostTest'])->name('CustomerPostTest');

Route::get('compact/list',[customerController::class,'compactlist']);




?>