<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [RegistrationController::class, 'showForm']);
Route::post('/register', [RegistrationController::class, 'submitForm']);