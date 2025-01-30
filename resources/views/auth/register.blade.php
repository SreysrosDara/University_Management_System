@extends('auth.master')

@section('site-title')
  Register | Page
@endsection

@section('content')
<style>
    html, body {
        height: 100vh;
        margin: 0;
    }
    .btn-custom:hover {
        background-color: rgb(189, 40, 176); /* Color on hover */
    }
    .gradient-custom-3 {
        background: rgb(107, 44, 207);
        background: -webkit-linear-gradient(to right, rgba(154, 132, 250, 0.5), rgba(148, 110, 250, 0.5));
        background: linear-gradient(to right, rgba(154, 132, 250, 0.5), rgba(148, 110, 250, 0.5));
    }
    .gradient-custom-4 {
        background: #84fab0;
        background: -webkit-linear-gradient(to right, rgba(154, 132, 250, 0.5), rgba(148, 110, 250, 0.5));
        background: linear-gradient(to right, rgba(154, 132, 250, 0.5), rgba(148, 110, 250, 0.5));
    }
</style>
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    @if (Session::has('message'))
       <p class="text-danger text-center">{{ Session::get('message') }}</p>
    @endif
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                            <form action="{{ route('submit-register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                                    <label class="form-label" for="name">Please Enter Your Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                    <label class="form-label" for="email">Please Enter Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                                    <label class="form-label" for="password">Please Enter Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required />
                                    <label class="form-label" for="password_confirmation">Please Repeat Your Password</label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" style="width: 100%;" class="btn-custom btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{ route('login') }}" class="fw-bold text-body"><u>Login here</u></a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection