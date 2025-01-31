<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courseList(){
        return view("courses.courselist");
    }
    public function addcourse(Request $request){
        return view("courses.addcourse");
    }
}
