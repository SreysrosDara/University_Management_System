@extends("layout")
@section('site-title')
Dashboard
@endsection

@section('title')
Dashboard
@endsection
@section('content')

<div class="container">
    <div class="row text-center">
        <!-- Students Card -->
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="display-4">{{ $studentCount }}</div>
                    <div class="text-end">
                        <i class="bi bi-people display-4"></i>
                        <h5 class="card-title">Students</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Professors Card -->
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="display-4">{{ $professorCount }}</div>
                    <div class="text-end">
                        <i class="bi bi-person-lines-fill display-4"></i>
                        <h5 class="card-title">Professors</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollment Card -->
        <div class="col-md-4">
            <div class="card bg-warning text-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="display-4">{{ $enrollmentCount }}</div>
                    <div class="text-end">
                        <i class="bi bi-clipboard2-data display-4"></i>
                        <h5 class="card-title">Enrollment</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses Card -->
        <div class="col-md-4">
            <div class="card bg-danger text-white mt-2">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="display-4">{{ $courseCount }}</div>
                    <div class="text-end">
                        <i class="bi bi-journals display-4 mt-2"></i>
                        <h5 class="card-title">Courses</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Departments Card -->
        <div class="col-md-4">
            <div class="card bg-info text-white mt-2">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="display-4">{{ $departmentCount }}</div>
                    <div class="text-end">
                        <i class="bi bi-building display-4"></i>
                        <h5 class="card-title">Departments</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('section_message')
    @if (Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif
@endsection