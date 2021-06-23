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

                            <form action="{{ route('roles.update',$role->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" required name="name" placeholder="Enter Full Name"  value="{{ $role->name }}" class="form-control" id="inputEmail3">

                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Assign Permission</label>

                                    <div class="col-sm-9 border border-success p-4">
                                        <label class="">    <input type="checkbox" name="checkedAll" id="checkedAll" class="mr-2" />Check all </label>
                                        <hr>
                                        <div class="row">

                                            @foreach($permission as $value)

                                                <div class="col-sm-3">
                                                    <span>{{ $value->id }}</span>
                                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name checkSingle')) }}
                                                    {{ $value->name }}</label>
                                                    <span>{{ in_array($rolePermissions,$rolePermissions) }}</span>
                                                </div>

                                        @endforeach
                                        <hr>

                                        </div>
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
        $(document).ready(function() {
  $("#checkedAll").change(function(){
    if(this.checked){
      $(".checkSingle").each(function(){
        this.checked=true;
      })
    }else{
      $(".checkSingle").each(function(){
        this.checked=false;
      })
    }
  });

  $(".checkSingle").click(function () {
    if ($(this).is(":checked")){
      var isAllChecked = 0;
      $(".checkSingle").each(function(){
        if(!this.checked)
           isAllChecked = 1;
      })
      if(isAllChecked == 0){ $("#checkedAll").prop("checked", true); }
    }else {
      $("#checkedAll").prop("checked", false);
    }
  });
});
    </script>


@endsection
