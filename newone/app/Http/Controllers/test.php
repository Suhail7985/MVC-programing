<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function index(){
        $student = [
            ['name' => "Suhail" , "class" => "12th", "rollno" => '67'],
            ['name' => 'Rahul Sharma', 'class' => '12th', 'roll_no' => '102'],
        ];
        return view('student.viewone', compact('student'));
    }
}
