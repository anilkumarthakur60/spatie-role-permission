<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q==" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    @toastr_css()
    @yield('third_party_stylesheets')
    @yield('css')

    @stack('page_css')

    <link rel="stylesheet" href="{{ asset('backend/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/styles/slider.css') }}">

    <style>
            [class*=sidebar-dark-] {
                background-color: #4951EC !important;
            }

        .navbar-white {
            background-color: #FA7167 !important;
        }
        [class*=sidebar-dark-] .sidebar a {
            color: white !important;
        }
        .bg-danger{
            background-color: #FA7167!important;
        }
        .bg-primary {
            background-color: #4951EC!important;
        }
        .btn-primary {
            background-color: #4951EC !important;
            border-color: #4951EC !important;
        }


        .btn-danger{
            background-color: #FA7167 !important;
            border-color: #FA7167 !important;
        }
        .btn-outline-danger {
            color: #FA7167 !important;
            border-color: #FA7167 !important;
        }

        .badge-primary{
            background-color: #4951EC !important;
        }

    </style>


</head>

<body class="hold-transition sidebar-mini layout-fixed" style=" font-family: 'Roboto'">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-envelope text-white"></i>
                    <span class="badge badge-primary navbar-badge">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item open-homeEvents" data-id="asas"  data-toggle="modal" data-target="#message_read_dashboard">
                        <i class="fas fa-envelope mr-2"></i>
                        <span class="float-right text-muted text-sm">5hr ago</span>
                    </a>



                    <a href="" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>

            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('frontend/images/avatar.png') }}"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="{{ asset('frontend/images/avatar.png') }}"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
@yield('content')




<div class="modal fade" id="message_read_dashboard" tabindex="-1" role="dialog" aria-labelledby="message_read_dashboardLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="message_read_dashboardLabel">Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="container">


                          <p id="message_section" class="justify-content-center"></p>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

            </div>


        </div>

      </div>
    </div>
</div>















    <!-- Main Footer -->
    <footer class=" text-center  mb-3">

        <strong>Copyright &copy; 2021-onward <a href="">Telemedicine</a>.</strong> All rights
        reserved.
    </footer>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
{{-- <script src="{{ asset('backend/dist/js/pages/dashboard2.js')}}"></script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('backend/dist/js/adminlte.js')}}"></script>

@toastr_js()
@toastr_render()


@yield('third_party_scripts')

@stack('page_scripts')


<script src="{{ asset('backend/js/slider.js') }}"></script>









@yield('script')
<script>
   $(document).ready(function() {
        $(".example1").DataTable({
            "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('.example2').DataTable({
            "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
        });

    });
</script>

<script>
$('.delete-confirm').click(function(event) {
     var form =  $(this).closest("form");
     var name = $(this).data("name");
     event.preventDefault();
     swal({
         title: `Are you sure you want to delete ${name}?`,
         text: "If you delete this, it will be gone forever.",
         icon: "warning",
         buttons: true,
         dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         form.submit();
       }
     });
 });
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


<script>
var options = {
filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
};
</script>
<script>

CKEDITOR.replace('my-editor', options);


</script>

<script>
    $(document).on("click", ".open-homeEvents", function () {
     var eventId = $(this).data('id');

     $('#message_section').html( eventId );
  });
  </script>


</body>
</html>
