<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(){
        $professors = Professor::with('department')->get();
        return view('professors.index',compact('professors'));
    }
    public function create(){
        $departments= Department::all();
        return view('professors.create',compact('departments'));
    }

    public function store(Request $request)    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:professors,email',
            'department_id' => 'required|exists:departments,id',
        ]);

        Professor::create($validatedData);

        return redirect()->route('professors.index')->with('success', 'Professor created successfully!');
    }

    public function edit($id){
        $professors = Professor::findOrFail($id);
        $departments = Department::all(); 
        return view ('professors.edit',compact('professors','departments'));
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|unique:professors,email'.$id,
                'department_id' => 'required|exists:departments,id',
        ]);
        $professor =  Professor::findOrFail($id);
        $professor->update($validatedData);

        return redirect()->route('professors.index')->with('successs','Professor updated successfully!');
    }

    public function destory($id){
        $professor = Professor::findOrFail($id);
        $professor->delete();

        return redirect()->route('professors.index')->with('success','Professor Deleted Successfully!');
    }
}
