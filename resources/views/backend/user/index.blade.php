@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">userList</li>
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
                            <h3 class="card-title ">All User List</h3>
                            @can('user-create')
                                <a href="{{ route('users.create') }}" class=" btn  btn-primary float-right">Add
                                    User</a>
                            @endcan

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <table id="example2" class="table table-bordered example2  text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Edit</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}
                                                <span>
                                                    <a href="{{ route('users.show', $user->id) }}"><i
                                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                                </span>
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->getRoleNames() as $role_name)
                                                        <label class="badge badge-success">{{ $role_name }}</label>
                                                    @endforeach
                                                @endif

                                            </td>

                                            <td>
                                                @can('user-edit')
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-sm btn-primary"><i class="fas fa-edit    "></i></a>
                                                @endcan
                                            </td>


                                            <td>{{ $user->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach



                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('css')
    @include('layouts.datatables_css')
@endsection


@section('script')
    @include('layouts.datatables_js')

@endsection
