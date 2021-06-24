@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">UserList</li>
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
                        {{-- <div class="card-header">
                            <h3 class="card-title ">Featured Dashboard</h3>
                            <a href="{{ route('users.create') }}" class=" btn btn-sm btn-info float-right">Add User</a>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12  mt-5">
                                    <div class="row ">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 ">
                                                    <img src="{{ asset('frontend/images/desing.svg') }}" class="img-fluid rounded rounded-lg" alt="">
                                                    <div class=" my-4  text-center justify-content-center">
                                                        <a href="" class="btn btn-md  btn-danger rounded-pill "><i class="fa fa-plus" aria-hidden="true"></i>Add Patient</a>
                                                        <a href="" class="btn btn-md btn-danger rounded-pill"><i class="fa fa-plus" aria-hidden="true"></i>Add Patient</a>
                                                    </div>

                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <h2 class="dark_blue_heading">Dr.Abhiyan Luitel</h2>
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link active rounded-pill" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link rounded-pill" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                                                        </li>

                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <p class="justify-content-center">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat omnis neque reiciendis iste natus atque quasi ratione, eligendi molestias repudiandae consequuntur adipisci debitis nesciunt qui suscipit ab cupiditate labore. Dolores?
                                                            </p>


                                                        </div>
                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                            <p class="justify-content-center">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat omnis neque reiciendis iste natus atque quasi ratione, eligendi molestias repudiandae consequuntur adipisci debitis nesciunt qui suscipit ab cupiditate labore. Dolores?
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">

                                            <div class="card">
                                                <div class="body">
                                                    <div class="cd-horizontal-timeline loaded">
                                                        <div class="timeline">
                                                            <div class="events-wrapper">
                                                                <div class="events" style="width: 1800px;">
                                                                    <ol>
                                                                        <li><a href="#0" data-date="16/01/2021" class="older-event" style="left: 120px;">16 Jan</a></li>
                                                                        <li><a href="#0" data-date="28/02/2021" style="left: 300px;" class="older-event">28 Feb</a></li>
                                                                        <li><a href="#0" data-date="20/04/2021" style="left: 480px;" class="selected">20 Mar</a></li>
                                                                        <li><a href="#0" data-date="20/05/2021" style="left: 600px;">20 May</a></li>
                                                                        <li><a href="#0" data-date="09/07/2021" style="left: 780px;">09 Jul</a></li>
                                                                        <li><a href="#0" data-date="30/08/2021" style="left: 960px;">30 Aug</a></li>
                                                                        <li><a href="#0" data-date="15/09/2021" style="left: 1020px;">15 Sep</a></li>
                                                                        <li><a href="#0" data-date="01/11/2021" style="left: 1200px;">01 Nov</a></li>
                                                                        <li><a href="#0" data-date="10/12/2021" style="left: 1380px;">10 Dec</a></li>
                                                                        <li><a href="#0" data-date="19/01/2022" style="left: 1500px;">29 Jan</a></li>
                                                                        <li><a href="#0" data-date="03/03/2022" style="left: 1680px;">3 Mar</a></li>
                                                                    </ol>
                                                                    <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                                                                </div>
                                                                <!-- .events -->
                                                            </div>
                                                            <!-- .events-wrapper -->
                                                            <ul class="cd-timeline-navigation">
                                                                <li><a href="#0" class="prev inactive">Prev</a></li>
                                                                <li><a href="#0" class="next">Next</a></li>
                                                            </ul>
                                                            <!-- .cd-timeline-navigation -->
                                                        </div>
                                                        <!-- .timeline -->
                                                        <div class="events-content" style="height: auto;">
                                                            <ol>
                                                                <li class="" data-date="16/01/2021">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar1.png"> Horizontal Timeline<br>
                                                                        <small>January 16th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="28/02/2021" class="">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar2.png"> Horizontal Timeline<br>
                                                                        <small>Feb 28th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="20/04/2021" class="selected">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar3.png"> Horizontal Timeline<br>
                                                                        <small>March 20th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="20/05/2021">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar4.png"> Horizontal Timeline<br>
                                                                        <small>May 20th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="09/07/2021">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar1.png"> Horizontal Timeline<br>
                                                                        <small>July 9th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="30/08/2021">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar2.png"> Horizontal Timeline<br>
                                                                        <small>August 30th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="15/09/2021">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar6.png"> Horizontal Timeline<br>
                                                                        <small>September 15th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="01/11/2021">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar7.png"> Horizontal Timeline<br>
                                                                        <small>November 01st, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="10/12/2021">
                                                                    <h4>
                                                                        <img class="rounded float-left m-r-15" width="40" alt="user" src="https://bootdey.com/img/Content/avatar/avatar8.png"> Horizontal Timeline<br>
                                                                        <small>December 10th, 2021</small>
                                                                    </h4>
                                                                    <hr>
                                                                    <p>
                                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio expedita inventore ex tempora dolorem deserunt eum pariatur ut obcaecati fugit? Explicabo odio, ipsa maiores quas distinctio corrupti dicta assumenda? Maxime? <br>
                                                                        <button class="btn btn-primary btn-round">Read more</button>
                                                                    </p>
                                                                </li>
                                                                <li data-date="19/01/2022">
                                                                    <h4>Event title here</h4>
                                                                    <em>January 19th, 2022</em>
                                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                                                        as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.</p>
                                                                </li>
                                                                <li data-date="03/03/2022">
                                                                    <h4>Event title here</h4>
                                                                    <em>March 3rd, 2022</em>
                                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                                                        as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.</p>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-lg-5 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="dark_blue_heading my-4">Patient List</h4>
                                            <table class="table table-striped table-inverse table-responsi text-center border rounded rounded-lg example2 "  >
                                                <thead class="thead-inverse">
                                                    <tr>
                                                        <th style="font-size: small;">sn</th>
                                                        <th style="font-size: small;">Patient Name</th>
                                                        <th style="font-size: small;">Address</th>
                                                        <th style="font-size: small;">Gender</th>
                                                        <th style="font-size: small;">Edit</th>
                                                        <th style="font-size: small;">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="dark_blue_heading my-4">Doctor List</h4>
                                            <table class="table table-striped table-inverse table-responsi text-center border rounded rounded-lg example2 " >
                                                <thead class="thead-inverse">
                                                    <tr>
                                                        <th style="font-size: small;">sn</th>
                                                        <th style="font-size: small;">Patient Name</th>
                                                        <th style="font-size: small;">Address</th>
                                                        <th style="font-size: small;">Gender</th>
                                                        <th style="font-size: small;">Edit</th>
                                                        <th style="font-size: small;">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: small;" scope="row">1</td>
                                                        <td style="font-size: small;">sdbjvhsdbvb ksndnkvn</td>
                                                        <td style="font-size: small;">sdcjdsvjs</td>
                                                        <td style="font-size: small;">jsvjsdvn</td>
                                                        <td style="font-size: small;">
                                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a>
                                                        </td>
                                                        <td style="font-size: small;">
                                                            <form action="" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash "></i></button>
                                                            </form>
                                                        </td>
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
    </section>
</div>
@endsection
