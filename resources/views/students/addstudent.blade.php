@extends('layout')

@section('site-title')
Add Student
@endsection

@section('title')
Add Student
@endsection
@section('content')
<form action="" method="POST">
      <div class="row mb-4">
            <div class="col">
                  <div class="form-outline">
                        <input type="text" id="firstname" name="firstname" class="form-control" />
                        <label class="form-label" for="firstname">First name</label>
                  </div>
            </div>
            <div class="col">
                  <div class="form-outline">
                        <input type="text" id="lastname" name="lastname" class="form-control" />
                        <label class="form-label" for="lastname"">Last name</label>
                  </div>
            </div>
      </div>

      <div class=" form-outline mb-4">
                              <input type="email" id="form6Example3" class="form-control" />
                              <label class="form-label" for="form6Example3">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                        <input type="date" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example4">Date of Birth</label>
                  </div>

                  <div class="mb-4">
                        <label class="form-label">Gender</label><br>
                        <div class="row">
                              <div class="col-lg-6">
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="male" name="gender"
                                                value="male">
                                          <label class="form-check-label" for="male">Male</label>
                                    </div>
                              </div>
                              <div class="col-lg-6">
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="female" name="gender"
                                                value="female">
                                          <label class="form-check-label" for="female">Female</label>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="form-outline mb-4">
                        <input type="number" id="Phone" name="Phone" class="form-control" />
                        <label class="form-label" for="Phone">Phone</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                        <input type="number" id="" name="" class="form-control" />
                        <label class="form-label" for="">Major</label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add
                        Student</button>
</form>
@endsection