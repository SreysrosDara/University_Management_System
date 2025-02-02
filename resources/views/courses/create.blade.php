@extends('layout')

@section('site-title')
Add | Course
@endsection

@section('title')
Add Course
@endsection

@section('content')
<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="course_name" name="course_name" class="form-control" required />
                <label class="form-label" for="course_name">Course Name</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="course_code" name="course_code" class="form-control" required />
                <label class="form-label" for="course_code">Course Code</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <textarea id="description" name="description" class="form-control" required></textarea>
                <label class="form-label" for="description">Description</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="number" id="credit" name="credit" class="form-control" required />
                <label class="form-label" for="credit">Credit</label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add Course</button>
</form>
@endsection