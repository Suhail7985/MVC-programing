<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abc extends Controller
{
    function abcd ($name){
        return "hi!" .$name;
        // return "this is my controller";
        //return view('abc');
        // $name = "Aman";
        // return $name;

    }
    function xyz(){
        return "this is xyz";
        return "hello";

    }
}
