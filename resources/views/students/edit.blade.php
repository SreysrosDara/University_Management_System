@extends('layout')

@section('site-title')
Edit | Student
@endsection

@section('title')
Edit Student
@endsection

@section('content')
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $student->first_name }}" required />
                <label class="form-label" for="first_name">First Name</label>
            </div>
        </div>
            <div class="col">
            <div class="form-outline">
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $student->last_name }}" required />
                <label class="form-label" for="last_name">Last Name</label>
            </div>
        </div>
        
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="email" id="email" name="email" class="form-control" value="{{ $student->email }}" required />
                <label class="form-label" for="email">Email</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" value="{{ $student->date_of_birth }}" required />
                <label class="form-label" for="date_of_birth">Date of Birth</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <select id="gender" name="gender" class="form-control" required>
                    <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                <label class="form-label" for="gender">Gender</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <select id="department_id" name="department_id" class="form-control" required>
                    <option value="">Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $student->department_id == $department->id ? 'selected' : '' }}>
                            {{ $department->department_name }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label" for="department_id">Department</label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Update Student</button>
</form>
@endsection