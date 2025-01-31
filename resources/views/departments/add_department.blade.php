@extends('layout')

@section('site-title')
Add | Department
@endsection

@section('title')
Add Department
@endsection

@section('content')
<form action="" method="POST">
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="department_name" name="department_name" class="form-control" />
                <label class="form-label" for="department_name">Department Name</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="head_of_department" name="head_of_department" class="form-control" />
                <label class="form-label" for="head_of_department">Head of Department</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <select id="course" name="course" class="form-select">
                    <option value="" disabled selected>Select a course</option>
                    <option value="course1">Course 1</option>
                    <option value="course2">Course 2</option>
                    <option value="course3">Course 3</option>
                    <!-- Add more options as needed -->
                </select>
                <label class="form-label" for="course">Course</label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add Department</button>
</form>
@endsection