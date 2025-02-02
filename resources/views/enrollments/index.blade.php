@extends('layout')

@section('site-title')
Enrollment | List
@endsection

@section('title')
Enrollment List
@endsection

@section('header-button')
<a href="{{ route('enrollments.create') }}" class="btn btn-floating text-white btn-lg rounded-pill m-2" style="background-color:rgb(100, 101, 102); bottom: 30px; right: 30px;">
    <i class="bi bi-person-fill-add px-2"></i> Add New Enrollment
</a>
@endsection

@section('content')
<table class="table align-middle mb-0 bg-white text-center mt-3">
    <thead class="bg-light">
        <tr>
            <th>ID</th>
            <th>Student</th>
            <th>Course</th>
            <th>Semester</th>
            <th>Enrollment Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->id }}</td>
                <td>
                    <a href="{{ route('students.show', $enrollment->student->id) }}" class="text-decoration-none">
                         {{$enrollment->student->id}}
                    </a>
                    </td>
                <td>{{ $enrollment->course->course_name }}</td>
                <td>{{ $enrollment->semester }}</td>
                <td>{{ $enrollment->created_at }}</td>
                <td>
                    <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-warning btn-floating rounded-circle">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-floating rounded-circle delete-btn">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {\
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => result.isConfirmed && form.submit());
            });
        });

        // Success Message
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    });
</script>
@endsection