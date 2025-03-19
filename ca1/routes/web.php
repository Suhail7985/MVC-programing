<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::group(['prefix' => 'students'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.list');
    Route::get('/{id}', [StudentController::class, 'show'])->name('students.details');
});

