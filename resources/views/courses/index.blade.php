@extends('layout')

@section('site-title')
Course | List
@endsection

@section('title')
Course List
@endsection

@section('header-button')
<a href="{{ route('courses.create') }}" class="btn btn-floating text-white btn-lg rounded-pill m-2" style="background-color:rgb(100, 101, 102); bottom: 30px; right: 30px;">
    <i class="bi bi-person-fill-add px-2"></i> Add New Course
</a>
@endsection

@section('content')
<table class="table align-middle mb-0 bg-white text-center mt-3">
    <thead class="bg-light">
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Course Code</th>
            <th>Description</th>
            <th>Credit</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->credit }}</td>
                <td>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-floating rounded-circle">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline;">
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
    document.addEventListener('DOMContentLoaded', function () {
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