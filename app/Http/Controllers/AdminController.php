<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminPostTest(Request $request){
        // change array format form user send data.
    $userData=[
        'name'=>$request->userName ,
        'age'=>$request->userAge,
        'address'=> $request->userAddress,
        'Gender'=>$request->userGender
    ];

    // display array format
    dd($request->all(),$userData);


    }
}
