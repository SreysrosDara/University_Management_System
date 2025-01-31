<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departmentslist(){
        return view("departments.departmentlist");
    }
    public function add_department(Request $request){
        return view("departments.add_department");
    }
}
