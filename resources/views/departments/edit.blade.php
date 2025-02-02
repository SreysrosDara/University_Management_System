@extends('layout')

@section('site-title')
Edit | Department
@endsection

@section('title')
Edit Department
@endsection

@section('content')
<form action="{{ route('departments.update', $department->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="department_name" name="department_name" class="form-control" value="{{ $department->department_name }}" />
                <label class="form-label" for="department_name">Department Name</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="head_of_department" name="head_of_department" class="form-control" value="{{ $department->head_of_department }}" />
                <label class="form-label" for="head_of_department">Head of Department</label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Update Department</button>
</form>
@endsection