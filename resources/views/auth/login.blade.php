@extends('welcome')

@section('content')
<div class="row ">
    <div class="col-sm-6 ">
        <h2 class="text-lg-left text-md-left text-sm-center landind_text my-5  text-uppercase text-primary ">RURAL TELEMEDICINE </h2>

        <div class="vertical_center_image">

            <img src="{{ asset('frontend/images/landing.svg') }}" class="img-fluid feature_image_login" alt="">

        </div>
    </div>
    <div class="col-sm-6 ">

        <h4 class="text-lg-right text-md-center text-sm-center landind_text   my-5  text-primary text-uppercase">Login</h4>
        <div class="vertical_center_login_form  ml-auto ">
            <form method="post" action="{{ url('/login') }}">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span> @enderror

                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 my-1">
                        <a href="{{ route('password.request') }}">I forgot my password</a>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 my-2">
                        <button type="submit" class="btn  btn-block btn-lg btn-primary text-center">Sign In</button>
                    </div>

                </div>
                <hr class="mt-4">
                <div class="row">
                    <div class="col-sm-12">
                    </div>

                    <div class="col-sm-12 d-flex justify-content-center text-center">
                        <p class="m-0">Don't You have account?</p> <span> <a href="{{ route('register') }}" class="mx-1">Contact Admin</a></span>

                    </div>
                </div>
            </form>


        </div>


    </div>
</div>
@endsection
