@extends('layouts.app')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Create</h1>
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
                            <h4 class=" text-center">Create New User</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Full Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" required name="name" placeholder="Enter Full Name"
                                                    value="{{ old('name') }}"
                                                    class="form-control @error('name') is-invalid @enderror "
                                                    id="inputEmail3">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong> <br>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" required name="email" placeholder="Enter Email address"
                                                    value="{{ old('email') }}"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="inputEmail3">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong> <br>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                            <div class="input-group col-sm-8 ">
                                                <input type="password" name="password" placeholder="Password"
                                                    class="form-control @error('password') is-invalid @enderror "
                                                    id="password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-eye" id="togglePassword"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong> <br>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Confirm
                                            </label>
                                            <div class="input-group col-sm-8 ">
                                                <input type="password" name="password_confirmation"
                                                    placeholder="Confirm Password"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror "
                                                    id="password1">


                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-eye" id="togglePassword1"
                                                            aria-hidden="true"></i>
                                                    </div>
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong> <br>
                                                        </span>
                                                    @enderror
                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Select
                                                Role</label>
                                            <div class="col-sm-8">
                                                <select
                                                    class="js_multiple_selects form-control @error('roles') is-invalid @enderror"
                                                    name="roles[]" multiple="multiple">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->name }}"
                                                            class="">
                                                                {{ $role->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('roles')
                                                        <span class="
                                                            invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong> <br>
                                                            </span>
                                                        @enderror
                                        </div>



                                    </div>

                                </div>

                            </div>
                            <div class="form-group mt-5 row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class=" btn btn-primary">Submit</button>
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

<style>
    .select2-container .select2-selection--single {

        height: 40px !important;

    }

    .select2-container--classic .select2-selection--single .select2-selection__arrow {
        height: 39px !important;
    }

    .select2-container--classic .select2-selection--single .select2-selection__rendered {
        line-height: 33px !important
    }

</style>


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js_multiple_selects').select2({
            theme: "classic"
        });
    });
</script>


<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function(e) {
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
    togglePassword1.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
        password1.setAttribute('type', type);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
    });
</script>
@endsection
