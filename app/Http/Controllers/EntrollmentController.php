<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EntrollmentController extends Controller
{
    public function index(){
        $enrollments = Enrollment::with(['student', 'course'])->get();
        return view('enrollments.index', compact('enrollments'));
    }    

    public function create(){
        $students = Student::all();
        $courses = Course::all();
        return view('enrollments.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'semester' => 'required|string|max:50',
            'enrollment_date' => 'required|date',
        ]);

        Enrollment::create($validatedData);

        return redirect()->route('enrollments.index')->with('success', 'Enrollment created successfully!');
    }

    public function edit($id){
        $enrollment = Enrollment::findOrFail($id);
        $students = Student::all();
        $courses = Course::all();
        return view('enrollments.edit', compact('enrollment', 'students', 'courses'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'semester' => 'required|string|max:50',
            'enrollment_date' => 'required|date',
        ]);

        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($validatedData);

        return redirect()->route('enrollments.index')->with('success', 'Enrollment updated successfully!');
    }

    public function destroy($id){
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();

        return redirect()->route('enrollments.index')->with('success', 'Enrollment deleted successfully!');
    }
}
