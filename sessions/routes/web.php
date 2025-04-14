<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CookieExampleController;

Route::get('/session/set', [SessionController::class, 'storeSession']);
Route::get('/session/get', [SessionController::class, 'getSession']);
Route::get('/session/delete', [SessionController::class, 'deleteSession']);




Route::get('/cookie/set', [CookieExampleController::class, 'setCookie']);
Route::get('/cookie/get', [CookieExampleController::class, 'getCookie']);
Route::get('/cookie/delete', [CookieExampleController::class, 'deleteCookie']);

Route::resource('students', StudentController::class);


