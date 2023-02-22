<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    //outputhello function
    function outputHello(){
        dd("hello");
    }

    public function compactlist(){
        $message='hello this is compact testing';
        $error='this is error message';
        $name='Naing Lin Htun';
        return view('contactTest',compact('message','error','name'));
    }
}


