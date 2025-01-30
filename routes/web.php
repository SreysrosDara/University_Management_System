<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/register',[AuthController::class,'register'])->name("register");
Route::post('/submit-register',[AuthController::class,"submitRegister"])->name("submit-register");
Route::get('/login',[AuthController::class,"login"])->name("login");
Route::post("/submit-login",[AuthController::class,"submitLogin"])->name("submit-login");
Route::get('/admin/dahboard',[DashboardController::class,'index'])->name("dashboard"); 
Route::middleware(['auth'])->group(function () {
     
});
