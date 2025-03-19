<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('students.index');
});

Route::get('/student/aman', function () {
    return view('students.aman');
});

Route::get('/student/pooja', function () {
    return view('students.pooja');
});

Route::get('/student/rakesh', function () {
    return view('students.rakesh');
});
