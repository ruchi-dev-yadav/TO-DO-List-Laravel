<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register',[AuthController::class,'register'])->name('user.register');
Route::get('/login',[AuthController::class,'login'])->name('user.login');

