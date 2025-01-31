<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrollmentController extends Controller
{
    public function enrollmentList(){
        return view("enrollments.enroll_list");
    }
    public function add_enroll(Request $request){
        return view("enrollments.add_enroll");
    }
}
