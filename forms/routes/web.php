<?php

use App\Http\Controllers\FormController;

Route::get('/simple-form', [FormController::class, 'showForm']);
Route::post('/simple-form', [FormController::class, 'submitForm'])->name('form.submit');


