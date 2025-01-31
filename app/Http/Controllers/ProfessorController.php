<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function professorList(){
        return view("professors.professorlist");
    }
    public function addprofessor(Request $request){
        return view("professors.addprofessor");
    }
}
