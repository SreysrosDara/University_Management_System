@extends('layout')

@section('site-title')
Enrollment | List
@endsection

@section('title')
Enrollment List
@endsection

@section('content')
<table class="table align-middle mb-0 bg-white text-center mt-3">
      <thead class="bg-light">
            <tr>
                  <th>ID</th>
                  <th>Student ID</th>
                  <th>Course Code</th>
                  <th>Semester</th>
                  <th>Enrollment Date</th>
                  <th>Actions</th>
            </tr>
      </thead>
      <tbody>
            <tr>
                  <td>1</td>
                  <td>Computer Science</td>
                  <td>Dr.Daniel</td>
                  <td>List of course</td>
                  <td>31/01/2025</td>
                  <td>
                        <button type="button" class="btn btn-warning btn-floating rounded-circle">
                              <i class="bi bi-pencil"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-floating rounded-circle">
                              <i class="bi bi-trash"></i>
                        </button>
                  </td>
            </tr>
      </tbody>
</table>
<a href="{{route('add-enroll')}}" class="btn btn-floating text-white btn-lg rounded-pill m-2" style="background-color:rgb(100, 101, 102); position: fixed; bottom: 30px; right: 30px;">
    <i class="bi bi-person-fill-add px-2"></i>Add New Enrollment
</a>
@endsection