@extends('layout')

@section('site-title')
Add | Enrollment
@endsection

@section('title')
Add Enrollment
@endsection

@section('content')
<form action="" method="POST">
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="Student ID" name="Student ID" class="form-control" />
                <label class="form-label" for="Student ID">Student ID</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="course_code" name="course_code" class="form-control" />
                <label class="form-label" for="course_code">Course Code</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="email" id="semester" name="semester" class="form-control" />
                <label class="form-label" for="semester">Semester</label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add Enrollment</button>
</form>
@endsection