<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Professor;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch counts from the database
        $studentCount = Student::count();
        $professorCount = Professor::count();
        $enrollmentCount = Enrollment::count();
        $courseCount = Course::count();
        $departmentCount = Department::count();

        // Pass the counts to the view
        return view('dashboard', compact(
            'studentCount',
            'professorCount',
            'enrollmentCount',
            'courseCount',
            'departmentCount'
        ));
    }
}
