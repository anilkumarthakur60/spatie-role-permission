@extends('welcome')
@section('content')

<div class="row ">
    <div class="col-sm-6 ">
        <h2 class="text-lg-left text-md-left text-sm-center my-5  text-uppercase dark_blue_heading ">RURAL TELEMEDICINE </h2>

        <div class="vertical_center_image">

            <img src="{{ asset('frontend/images/landing.svg') }}" class="img-fluid feature_image_login" alt="">

        </div>
    </div>
    <div class="col-sm-6 ">

        <h3 class="text-lg-right text-md-right  my-5 pr-lg-4 dark_blue_heading text-uppercase ">Home</h3>
        <div class="vertical_center_login_form  w-auto float-lg-right text-sm-center ">
            <div class="">
                <h1 class="text-lg-right dark_blue_heading landind_text">QUALITY</h1>
                <h1 class="text-lg-right landind_text dark_blue_heading">HEALTH SERVICE</h1>
                <h1 class="text-lg-right landind_text dark_blue_heading">AT YOUR PLACE</h1>
            </div>

        </div>


    </div>
</div>
@endsection
