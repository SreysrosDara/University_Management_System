<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EntrollmentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/register',[AuthController::class,'register'])->name("register");
Route::post('/submit-register',[AuthController::class,"submitRegister"])->name("submit-register");
Route::get('/login',[AuthController::class,"login"])->name("login");
Route::post("/submit-login",[AuthController::class,"submitLogin"])->name("submit-login");
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
     Route::get('/',[DashboardController::class,'index'])->name("dashboard"); 

     Route::get("/department",[DepartmentController::class,"departmentslist"])->name("department");
     Route::get("/add-department",[DepartmentController::class,"add_department"])->name("add-department");

     Route::get("/course",[CourseController::class,'courseList'])->name('course');
     Route::get('/addcourse',[CourseController::class,'addcourse'])->name('add-course');

     Route::get("/professor",[ProfessorController::class,'professorList'])->name('professor');
     Route::get('/addprofessor',[ProfessorController::class,'addprofessor'])->name('add-professor');

     Route::get("/enrollment",[EntrollmentController::class,'enrollmentList'])->name('enrollment');
     Route::get('/add-enroll',[EntrollmentController::class,'add_enroll'])->name('add-enroll');

     Route::get("/student",[StudentController::class,"studentList"])->name("student");
     Route::get("/addstudent",[StudentController::class,"addstudent"])->name("add-student");
;});
