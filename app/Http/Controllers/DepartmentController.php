<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }
    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'department_name' => 'required|string|max:255',
            'head_of_department' => 'required|string|max:255',
        ]);

        Department::create($validatedData);

        return redirect()->route('departments.index')->with('success', 'Department created successfully!');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'department_name' => 'required|string|max:255',
            'head_of_department' => 'required|string|max:255',
        ]);

        // Find the department by ID and update it
        $department = Department::findOrFail($id);
        $department->update($validatedData);

        // Redirect to the department list with a success message
        return redirect()->route('departments.index')->with('success', 'Department updated successfully!');
    }

    public function destroy($id)
    {
        // Find the department by ID and delete it
        $department = Department::findOrFail($id);
        $department->delete();

        // Redirect to the department list with a success message
        return redirect()->route('departments.index')->with('success', 'Department deleted successfully!');
    }
}