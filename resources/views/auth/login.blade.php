@extends('auth.master')

@section('site-title')
  Login | Page
@endsection

@section('content')
<style>
    html, body {
        height: 100vh;
        margin: 0;
    }
    .btn-custom:hover {
        background-color: rgb(185, 174, 185); /* Color on hover */
    }
    .gradient-custom-3 {
        background: rgb(61, 36, 50);
        background: -webkit-linear-gradient(to right, rgba(63, 41, 48, 0.5), rgba(49, 43, 66, 0.5));
        background: linear-gradient(to right, rgba(63, 41, 48, 0.5), rgba(49, 43, 66, 0.5));
    }
    .gradient-custom-4 {
        background: rgb(51, 29, 41);
        background: -webkit-linear-gradient(to right, rgba(63, 41, 48, 0.5), rgba(49, 43, 66, 0.5));
        background: linear-gradient(to right, rgba(63, 41, 48, 0.5), rgba(49, 43, 66, 0.5));
    }
</style>
<section class="vh-100 bg-image"
    style="background-image: url('https://i.pinimg.com/736x/cc/0d/70/cc0d70d0e8ba8564b2185b698bf004ed.jpg ');">
    @if (Session::has('success'))
        <p class="text-success text-center">{{ Session::get('success') }}</p>
    @endif
    @if (Session::has('error'))
        <p class="text-danger text-center">{{ Session::get('error') }}</p>
    @endif
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Login Your account</h2>

                            <form action="{{ route('submit-login') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" id="name_email" name="name_email" class="form-control form-control-lg" required />
                                    <label class="form-label" for="name_email">Username or Email</label>
                                    @error('name_email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                                    <label class="form-label" for="password">Password</label>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button style="width: 100%;" type="submit" class="btn-custom btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="{{ route('register') }}"
                                        class="fw-bold text-body"><u>Register here</u></a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection