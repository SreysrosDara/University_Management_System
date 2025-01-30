@extends('auth.master')
@section('site-title')
  Login | Page
@endsection

@section('content')
<style>
    html,
        body {
            height: 100vh;
            margin: 0;
        }
        .btn-custom:hover {
            background-color:rgb(189, 40, 176); /* Color on hover */
        }
        .gradient-custom-3 {
            /* fallback for old browsers */
            background:rgb(250, 132, 197);

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(250, 132, 167, 0.5), rgba(148, 110, 250, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(250, 132, 177, 0.5), rgba(148, 110, 250, 0.5))
        }

        .gradient-custom-4 {
            /* fallback for old browsers */
            background:rgb(250, 132, 197);

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(250, 132, 167, 0.5), rgba(148, 110, 250, 0.5));
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(250, 132, 177, 0.5), rgba(148, 110, 250, 0.5))
        }
  </style>
  <section class="vh-100 bg-image"
        style="background-image: url('https://i.pinimg.com/736x/cc/0d/70/cc0d70d0e8ba8564b2185b698bf004ed.jpg ');">
        @if (Session::has('message'))
          <p class="text-danger text-center">{{ Session::get('message') }}</p>
        @endif
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Login Your account</h2>

                                <form action="{{route('submit-login')}}" method="POST" enctype="multipart/form-data" >
                                  @csrf
                                    <div class="form-outline mb-4">
                                        <input type="text" id="name_email" name="name_email" class="form-control form-control-lg" />
                                        <label class="form-label" for="name_email">Username or Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button style="width: 100%;" type="submit" class="btn-custom btn btn-success btn-block btn-lg gradient-custom-4 
                                        text-body">Login</button></button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="{{route('register')}}"
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
