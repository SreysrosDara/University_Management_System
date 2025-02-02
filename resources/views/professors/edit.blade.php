@extends('layout')

@section('site-title')
Edit | Professor
@endsection

@section('title')
Edit Professor
@endsection

@section('content')
<form action="{{route('professors.update',$professors->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{$professors->first_name}}" required/>
                <label for="first_name" class="form-label">First Name</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{$professors->last_name}}" required/>
                <label for="last_name" class="form-label">Last Name</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="email" name="email" id="email" class="form-control" value="{{$professors->email}}" required/>
                <label for="email" class="form-label">Email</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
            <select id="department_id" name="department_id" class="form-control" required>
                    <option value="">Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $professors->department_id == $department->id ? 'selected' : '' }}>
                            {{ $department->department_name }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label" for="department_id">Department</label>
            </div>
        </div>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Update Professor</button>
</form>
@endsection