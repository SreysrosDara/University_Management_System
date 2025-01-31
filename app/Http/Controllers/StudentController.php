<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentList(){
        return view("students.studentlist");
    }
    public function addstudent(){
        return view("students.addstudent");
    }
}
