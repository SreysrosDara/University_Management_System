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
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="bi bi-people display-4"></i>
                    <h5 class="card-title">Students</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="bi bi-person-lines-fill display-4"></i>
                    <h5 class="card-title">Professor</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <i class="bi bi-clipboard2-data display-4"></i>
                    <h5 class="card-title">Enrollment</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-body">
                    <i class="bi bi-journals display-4 mt-2"></i>
                    <h5 class="card-title">Courses</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card  mt-2">
                <div class="card-body">
                    <i class="bi bi-building display-4"></i>
                    <h5 class="card-title">Departments</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="pb-4">
  <div class="border rounded-5" bis_skin_checked="1">
    
    

  </div>
</section>
@endsection