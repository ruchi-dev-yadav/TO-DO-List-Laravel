<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/register', [AuthController::class, 'register'])->name('user.register');
Route::post('/save/user', [AuthController::class, 'store'])->name('save.user');
Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('check/login', [AuthController::class, 'checkLogin'])->name('check.login');

Route::middleware('auth')->group(function(){
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/add/task',[DashboardController::class,'addTask'])->name('user.add.task');
Route::post('/save/task',[DashboardController::class,'saveTask'])->name('user.save.task');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});