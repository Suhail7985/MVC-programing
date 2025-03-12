<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\abc;
Route::get('/abc', [abc::class, 'abcd'] );
Route::get('abc/{name}' ,[abc::class,'abcd']);
Route::get('xyz' ,[abc::class,'xyz']);