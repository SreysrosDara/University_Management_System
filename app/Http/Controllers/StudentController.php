<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::with('department')->get();
        return view("students.index",compact('students'));
    }

    public function create(){
        $departments = Department::all();
        return view('students.create',compact('departments'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'department_id' => 'required|exists:departments,id',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success','Student Created Successfully!');
    }

    public function show($id){
        
        $student = Student::with('enrollments.course')->findOrFail($id);
        
        return view('students.show', compact('student'));
    }

    public function edit($id){

        $student = Student::findOrFail($id);
        $departments = Department::all();

        return view('students.edit', compact('student', 'departments'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'department_id' => 'required|exists:departments,id',
        ]);

        $student = Student::findOrFail($id);
        $student->update($validatedData);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success','Student deleted successfully');
    }
    
}
