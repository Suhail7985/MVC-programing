<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{name}/{class}', function ($name, $class) {
//     return view('welcome', ["name" => $name, "class" => $class]);
// });

Route::get('/{name}/{class}', function ($name, $class) {
    return view('welcome', compact("name", "class"));
});


