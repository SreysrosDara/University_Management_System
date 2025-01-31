@extends('layout')

@section('site-title')
Add | Course
@endsection

@section('title')
Add Course
@endsection

@section('content')
<form action="" method="POST">
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="course_name" name="course_name" class="form-control" />
                <label class="form-label" for="course_name">Course Name</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="course_code" name="course_code" class="form-control" />
                <label class="form-label" for="course_code">Course Code</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="number" id="credits" name="credits" class="form-control" />
                <label class="form-label" for="credits">Credits</label>
            </div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <textarea id="description" name="description" class="form-control" rows="3"></textarea>
        <label class="form-label" for="description">Description</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add Course</button>
</form>
@endsection