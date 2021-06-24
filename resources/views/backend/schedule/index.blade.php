@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Schedule List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ScheduleList</li>
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
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title d-none ">DataTable with default features</h3>
                            <a href="{{ route('users.create') }}" class=" btn btn-sm btn-info float-right">Add User</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 ">




                                    <div class="d-flex text-center justify-content-center m-5">
                                        <a class="carousel-control-prev " href="#carouselExampleControlsNoTouching" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <h4 class="mb-0">June 2021</h4>
                                        <a class="carousel-control-next" href="#carouselExampleControlsNoTouching" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
                                            <span class="sr-only r">Next</span>
                                        </a>
                                    </div>



                                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="true" data-interval="false">

                                        <div class="carousel-inner text-center ">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="table-responsive">


                                                            <table class="table   text-center">
                                                                <thead class="thead-inverse">
                                                                    <tr>
                                                                        <th class="mx-3"><i class="far fa-clock "></i></th>
                                                                        <th><span class="badge badge-primary rounded-circle mx-3">19</span>SUN</th>
                                                                        <th><span class="mx-3">20</span>MON</th>
                                                                        <th><span class="mx-3">22</span>TUE</th>
                                                                        <th><span class="mx-3">22</span>WED</th>
                                                                        <th><span class="mx-3">23</span>THU</th>
                                                                        <th><span class="mx-3">24</span>FRI</th>
                                                                        <th><span class="mx-3">25</span>SAT</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>06:00 AM</td>

                                                                        <td>
                                                                            <button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                        Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>08:00 AM</td>

                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>09:00 AM</td>

                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>10:00 AM</td>

                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11:00 AM</td>

                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="table-responsive">


                                                            <table class="table   text-center">
                                                                <thead class="thead-inverse">
                                                                    <tr>
                                                                        <th class="mx-3"><i class="far fa-clock "></i></th>
                                                                        <th><span class="badge badge-primary rounded-circle mx-3">19</span>SUN</th>
                                                                        <th><span class="mx-3">20</span>MON</th>
                                                                        <th><span class="mx-3">22</span>TUE</th>
                                                                        <th><span class="mx-3">22</span>WED</th>
                                                                        <th><span class="mx-3">23</span>THU</th>
                                                                        <th><span class="mx-3">24</span>FRI</th>
                                                                        <th><span class="mx-3">25</span>SAT</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>06:00 AM</td>

                                                                        <td>
                                                                            <button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                        Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>08:00 AM</td>

                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>09:00 AM</td>

                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>10:00 AM</td>

                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11:00 AM</td>

                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-lg-12 ">
                                                        <div class="table-responsive">


                                                            <table class="table   text-center">
                                                                <thead class="thead-inverse">
                                                                    <tr>
                                                                        <th class="mx-3"><i class="far fa-clock "></i></th>
                                                                        <th><span class="badge badge-primary rounded-circle mx-3">19</span>SUN</th>
                                                                        <th><span class="mx-3">20</span>MON</th>
                                                                        <th><span class="mx-3">22</span>TUE</th>
                                                                        <th><span class="mx-3">22</span>WED</th>
                                                                        <th><span class="mx-3">23</span>THU</th>
                                                                        <th><span class="mx-3">24</span>FRI</th>
                                                                        <th><span class="mx-3">25</span>SAT</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>06:00 AM</td>

                                                                        <td>
                                                                            <button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                        Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>08:00 AM</td>

                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>09:00 AM</td>

                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>10:00 AM</td>

                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>11:00 AM</td>

                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-sm" data-toggle="modal" data-target="#modelId">
                                                                            Open
                                                                        </button>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<div class="modal fade shadow  " id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Schedule Detail</h5>
                <div class="ml-auto float-right">
                    <a href="" class="btn btn-sm btn-outline-info"><i class="fas fa-edit    "></i></a>
                    <a href="" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="d-inline-block">
                            <h6>Appointment</h6>
                            <span class="badge badge-primary ml-4 mb-3">active</span>
                        </div>

                        <table class="table   table-bordered">
                            <thead class="thead-inverse">
                                <tr class="d-none">
                                    <th></th>
                                    <th></th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>Problem</td>
                                    <td>Headche</td>

                                </tr>
                                <tr>
                                    <td>Patien</td>
                                    <td>Ram DK</td>

                                </tr>
                                <tr>
                                    <td>Doctor</td>
                                    <td>Shyam Dk</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>thursday, June 24:11:00 AM -12:00 PM</td>
                                </tr>
                                <tr>
                                    <td>
                                        Desc
                                    </td>
                                    <td>
                                        This is very serious patient.Please be very careful with him.
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<style>
    .carousel-control-next,
    .carousel-control-prev {
        position: unset !important;

    }
</style>
@endsection
