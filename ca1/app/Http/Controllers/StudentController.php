<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    private $students = [
        1 => ['id' => 1, 'name' => 'Aman', 'age' => 27, 'image' => 'Suhail.png'],
        2 => ['id' => 2, 'name' => 'Pooja', 'age' => 25, 'image' => 'Avinash.png'],
        3 => ['id' => 3, 'name' => 'Rakesh', 'age' => 29, 'image' => 'Avinash.png']
    ];

    public function index()
    {
        return view('students', ['students' => $this->students]);
    }

    public function show($id)
    {
        if (!isset($this->students[$id])) {
            abort(404);
        }

        return view('details', ['student' => $this->students[$id]]);
    }
}
