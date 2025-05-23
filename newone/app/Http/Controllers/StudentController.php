<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function show($id)
    {
        return view("students.details", ['id' => $id]);
    }
}
