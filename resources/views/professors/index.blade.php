@extends('layout')

@section('site-title')
Professor | List
@endsection

@section('title')
Professor List
@endsection

@section('header-button')
<a href="{{route('professors.create')}}" class="btn btn-floating text-white btn-lg rounded-pill m-2" style="background-color:rgb(100, 101, 102); bottom: 30px; right: 30px;">
    <i class="bi bi-person-fill-add px-2"></i>Add New Professor
</a>
@endsection

@section('content')
<table class="table align-middle mb-0 bg-white text-center mt-3">
      <thead class="bg-light">
            <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Teach In Department</th>
                  <th>Actions</th>
            </tr>
      </thead>
      <tbody> 
        @foreach ($professors as $professor)
            <tr>
                    <td>{{$professor->id}}</td>
                    <td>{{$professor->first_name}}</td>
                    <td>{{$professor->last_name}}</td>
                    <td>{{$professor->email}}</td>
                    <td>{{$professor->department->department_name}}</td>
                    <td>
                        <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-warning btn-floating rounded-circle">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display: inline;">
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