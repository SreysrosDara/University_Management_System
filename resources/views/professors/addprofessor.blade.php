@extends('layout')

@section('site-title')
Add | Professor
@endsection

@section('title')
Add Professor
@endsection

@section('content')
<form action="" method="POST">
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="last_name" name="last_name" class="form-control" />
                <label class="form-label" for="last_name">Last Name</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="first_name" name="first_name" class="form-control" />
                <label class="form-label" for="first_name">First Name</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="email" id="email" name="email" class="form-control" />
                <label class="form-label" for="email">Email</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
    <div class="col">
        <div class="form-outline">
            <select id="department" name="department" class="form-select">
                <option value="" disabled selected>Select an Department</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <!-- Add more options as needed -->
            </select>
            <label class="form-label" for="email">Department</label>
        </div>
    </div>
</div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add Student</button>
</form>
@endsection