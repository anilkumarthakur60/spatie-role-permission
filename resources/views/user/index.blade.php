@extends('layouts.app')
@section('content')

@can('user list')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User List</h1>
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
                        <div class="card-header">
                            <h3 class="card-title ">DataTable with default features</h3>
                            <a href="{{ route('users.create') }}" class=" btn btn-sm btn-info float-right">Add User</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Created at</th>

                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user_item)
                                        <tr>
                                            <td>{{ $user_item->id }}</td>
                                            <td>{{ $user_item->name }} <span><a href="{{ route('users.show',$user_item->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></span></td>
                                            <td>{{ $user_item->email }}</td>
                                            <td>
                                            @if(!empty($user_item->getRoleNames()))
                                                @foreach($user_item->getRoleNames() as $role_name)
                                                    <label class="badge badge-success">{{ $role_name }}</label>
                                                @endforeach
                                            @endif

                                            </td>
                                            <td>{{ $user_item->created_at->diffForHumans() }}</td>
                                            <td><a href="{{ route('users.edit',$user_item->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit    "></i></a></td>
                                            <td>

                                                <form id="delete-form" action="{{ route('users.destroy',$user_item->id) }}" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" btn btn-sm btn-danger"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
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
</div>
@endcan



@endsection
