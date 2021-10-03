@extends('layouts.app')
@section('content')


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
                            <h3 class="card-title ">Role List</h3>
                            <a href="{{ route('roles.create') }}" class=" btn btn-sm btn-primary float-right">Add
                                Roles</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <div class="">
                                    <table id=" example1"
                                class="table table-bordered example1  text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Role Name</th>
                                        <th>Permissions</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }} <span><a
                                                        href="{{ route('roles.show', $role->id) }}"><i
                                                            class="fa fa-eye" aria-hidden="true"></i></a></span>
                                            </td>
                                            <td>
                                                @if ($role->permissions->count() > 0)
                                                    @foreach ($role->permissions as $permission)
                                                        <span class=" badge badge-success m-1" style="font-size:  16px">
                                                            {{ $permission->name }}</span>
                                                    @endforeach
                                                @endif

                                            </td>
                                            <td><a href="{{ route('roles.edit', $role->id) }}"
                                                    class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <form id="delete-form" action="{{ route('roles.destroy', $role->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" btn btn-sm btn-danger"><i
                                                            class="fas fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>

                                </table>
                            </div>

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



@endsection
