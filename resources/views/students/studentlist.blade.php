@extends('layout')

@section('site-title')
Student | List
@endsection

@section('title')
Student List
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
            <tr>
                  <td>1</td>
                  <td>Abby</td>
                  <td>abby</td>
                  <td>
                        <span class="badge bg-success rounded-pill d-inline">Female</span>
                        <span class="badge bg-primary rounded-pill d-inline">Male</span>
                  </td>
                  <td>12/12/2000</td>
                  <td>Computer Science</td>
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
<a href="{{route('add-student')}}" class="btn btn-floating text-white btn-lg rounded-pill m-2" style="background-color:rgb(100, 101, 102); position: fixed; bottom: 30px; right: 30px;">
    <i class="bi bi-person-fill-add px-2"></i>Add New Student
</a>
@endsection