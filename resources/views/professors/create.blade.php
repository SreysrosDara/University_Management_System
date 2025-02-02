@extends('layout')

@section('site-title')
Add | Professor
@endsection

@section('title')
Add Professor
@endsection

@section('content')
<form action="{{route('professors.store')}}" method="POST">
    @csrf
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="first_name" name="first_name" class="form-control" />
                <label class="form-label" for="first_name">First Name</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="last_name" name="last_name" class="form-control" />
                <label class="form-label" for="last_name">Last Name</label>
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
            <select id="department_id" name="department_id" class="form-select" required>
                <option value="" disabled selected>Select an Department</option>
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->department_name}}</option>
                @endforeach
            </select>
            <label class="form-label" for="email">Department</label>
        </div>
    </div>
</div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add Professor</button>
</form>
@endsection