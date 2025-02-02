@extends('layout')

@section('site-title')
Student | List
@endsection

@section('title')
Student List
@endsection

@section('header-button')
<a href="{{route('students.create')}}" class="btn btn-floating text-white btn-lg rounded-pill m-2"
      style="background-color:rgb(100, 101, 102); bottom: 30px; right: 30px;">
      <i class="bi bi-person-fill-add px-2"></i>Add New Student
</a>
@endsection

@section('content')
<table class="table align-middle mb-0 bg-white text-center mt-3">
      <thead class="bg-light">
            <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Major</th>
                  <th>Actions</th>
            </tr>
      </thead>
      <tbody>
            @foreach ($students as $student)
                        <tr>
                              <td>
                                    <a href="{{ route('students.show', $student->id) }}" class="text-decoration-none">
                                          {{$student->id}}
                                    </a>
                              </td>

                                <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>
                                     @if($student->gender == 'Female')
                                         <span class="badge bg-success rounded-pill d-inline">Female</span>
                                     @else
                                         <span class="badge bg-primary rounded-pill d-inline">Male</span>
                                     @endif
                                </td>
                                <td>{{$student->date_of_birth}}</td>
                                <td>{{$student->department->department_name}}</td>
                                <td>
                                          <a href="{{route('students.edit', $student->id)}}" class="btn btn-warning btn-floating my-1">
                                                  <i class="bi bi-pencil"></i>
                                          </a>
                                          <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                                  style="display: inline;">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger btn-floating delete-btn">
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
                  })
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
      })
</script>
@endsection