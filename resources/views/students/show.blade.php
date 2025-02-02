@extends('layout')

@section('site-title')
Student | Details
@endsection

@section('title')
Student Details
@endsection

@section('content')
<div class="card shadow-lg mt-3 p-4">
    <h3 class="text-center">Student Information</h3>
    <table class="table table-bordered">
        <tr>
            <th>ID:</th>
            <td>{{ $student->id }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>
                @if($student->gender == 'Female')
                    <span class="badge bg-success">Female</span>
                @else
                    <span class="badge bg-primary">Male</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>DOB:</th>
            <td>{{ $student->date_of_birth }}</td>
        </tr>
        <tr>
            <th>Major:</th>
            <td>{{ $student->department->department_name }}</td>
        </tr>
    </table>

    <h3 class="mt-4 text-center">Enrolled Courses</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Credits</th>
                <th>Enrollment Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($student->enrollments as $enrollment)
                <tr>
                    <td>{{ $enrollment->course->id }}</td>
                    <td>{{ $enrollment->course->course_name }}</td>
                    <td>{{ $enrollment->course->credit}}</td>
                    <td>{{ $enrollment->created_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No courses enrolled</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
