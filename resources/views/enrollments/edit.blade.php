@extends('layout')

@section('site-title')
Edit | Enrollment
@endsection

@section('title')
Edit Enrollment
@endsection

@section('content')
<form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <select id="student_id" name="student_id" class="form-control" required>
                    <option value="">Select Student</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ $enrollment->student_id == $student->id ? 'selected' : '' }}>
                            {{ $student->first_name }} {{ $student->last_name }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label" for="student_id">Student</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <select id="course_id" name="course_id" class="form-control" required>
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ $enrollment->course_id == $course->id ? 'selected' : '' }}>
                            {{ $course->course_name }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label" for="course_id">Course</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="semester" name="semester" class="form-control" value="{{ $enrollment->semester }}" required />
                <label class="form-label" for="semester">Semester</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="date" id="enrollment_date" name="enrollment_date" class="form-control" value="{{ $enrollment->enrollment_date }}" required />
                <label class="form-label" for="enrollment_date">Enrollment Date</label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Update Enrollment</button>
</form>
@endsection