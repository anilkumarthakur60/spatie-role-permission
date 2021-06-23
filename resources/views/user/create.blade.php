@extends('layouts.app')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1>User Create</h1> --}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">userCreate</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">


                    <div class="card">
                        <div class="card-header">
                            <h4 class=" text-center">User New Create</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                           @endif

                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" required name="name" placeholder="Enter Full Name"  value="{{ old('name') }}" class="form-control" id="inputEmail3">

                                    </div>
                                  </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" required name="email" placeholder="Enter Email address" value="{{ old('email') }}" class="form-control" id="inputEmail3">

                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="input-group col-sm-10 ">
                                        <input type="password" name="password" placeholder="Password" class="form-control " id="password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                    <i class="fa fa-eye" id="togglePassword" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                                      <div class="input-group col-sm-10 ">
                                          <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control " id="password1">
                                          <div class="input-group-append">
                                              <div class="input-group-text">
                                                      <i class="fa fa-eye" id="togglePassword1" aria-hidden="true"></i>
                                              </div>
                                          </div>

                                      </div>

                                  </div>




                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Select Role</label>
                                    <div class="col-sm-10">
                                        <select class="js_multiple_selects form-control" name="roles[]" multiple="multiple">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}" class="">{{ $role->name }}</option>
                                                @endforeach
                                        </select>
                                    </div>



                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-12 text-center">


                                    <button type="submit" class=" btn btn-primary">Create Account</button>
                                  </div>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js_multiple_selects').select2({
                theme:"classic"
            });
            });
    </script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
        });
    </script>
      <script>
        const togglePassword1 = document.querySelector('#togglePassword1');
        const password1 = document.querySelector('#password1');
        togglePassword1.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
            password1.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
        });
    </script>
@endsection
