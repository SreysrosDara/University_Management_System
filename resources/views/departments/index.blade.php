@extends('layout')

@section('site-title')
Department | List
@endsection

@section('title')
Department List
@endsection

@section('header-button')
    <a href="{{ route('departments.create') }}" class="btn btn-floating text-white btn-lg rounded-pill m-2" style="background-color:rgb(100, 101, 102); bottom: 30px; right: 30px;">
        <i class="bi bi-person-fill-add px-2"></i>Add New Department
    </a>
@endsection

@section('content')
<table class="table align-middle mb-0 bg-white text-center mt-3">
    <thead class="bg-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Head of Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->department_name }}</td>
                <td>{{ $department->head_of_department }}</td>
                <td>
                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning btn-floating rounded-circle">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" class="delete-form" style="display: inline;">
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
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent the form from submitting immediately

                // Get the form associated with the button
                const form = button.closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
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