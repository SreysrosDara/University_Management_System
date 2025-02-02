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

     // ------- [ D E P A R T M E N T ]---------
     Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
     Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
     Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
     Route::get('/departments/edit/{id}', [DepartmentController::class, 'edit'])->name('departments.edit');
     Route::put('/departments/{id}', [DepartmentController::class, 'update'])->name('departments.update');
     Route::delete('/departments/{id}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

     // ------- [ C O U R S E ]---------
     Route::get('/courses',[CourseController::class,'index'])->name('courses.index');
     Route::get('/courses/create',[CourseController::class,'create'])->name('courses.create');
     Route::post('/courses',[CourseController::class,'store'])->name('courses.store');
     Route::get('/courses/edit/{id}',[CourseController::class,'edit'])->name('courses.edit');
     Route::put('/courses/{id}',[CourseController::class,'update'])->name('courses.update');
     Route::delete('/course/{id}',[CourseController::class,'destroy'])->name('courses.destroy');

     // ------- [ P R O F E S S O R ]---------
     Route::get("/professors",[ProfessorController::class,'index'])->name('professors.index');
     Route::get('/professors/create',[ProfessorController::class,'create'])->name('professors.create');
     Route::post('/professors',[ProfessorController::class,'store'])->name('professors.store');
     Route::get('/professor/edit/{id}',[ProfessorController::class,'edit'])->name('professors.edit');
     Route::put('/professors/{id}',[ProfessorController::class,'update'])->name('professors.update');
     Route::delete('/professors/{id}',[ProfessorController::class,'destroy'])->name('professors.destroy');

     // ------- [ S T U D E N T ]---------
     Route::get("/students",[StudentController::class,"index"])->name("students.index");
     Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
     Route::post('/students',[StudentController::class,'store'])->name('students.store');
     Route::get('/students/detail/{id}', [StudentController::class, 'show'])->name('students.show');
     Route::get('/students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
     Route::put('/students/{id}',[StudentController::class,'update'])->name('students.update');
     Route::delete("/students/{id}",[StudentController::class,"destroy"])->name("students.destroy");

     // ------- [ E N R O L L M E N T ]---------
     Route::get("/enrollments",[EntrollmentController::class,'index'])->name('enrollments.index');
     Route::get('/enrollments/create',[EntrollmentController::class,'create'])->name('enrollments.create');
     Route::post('/enrollments',[EntrollmentController::class,'store'])->name('enrollments.store');
     Route::get('/enrollment/edit/{id}',[EntrollmentController::class,'edit'])->name('enrollments.edit');
     Route::put('/enrollments/{id}',[EntrollmentController::class,'update'])->name('enrollments.update');
     Route::delete('/enrollments/{id}',[EntrollmentController::class,'destroy'])->name('enrollments.destroy');

});
