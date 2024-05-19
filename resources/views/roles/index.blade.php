@extends('backend.layouts.master')

@section('title', 'Role Management')

@section('content')

    <div class="card card-default">


        <div class="card-header">
            <div class="d-flex">
                @can('role-create')
                    <a class="btn btn-success ml-auto" href="{{ route('roles.create') }}"> <i class="nav-icon fas fa-plus"></i> Create New Role </a>
                @endcan
            </div>
        </div>



        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Permissions</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                @foreach ($role->permissions as $v)
                                    <span class="badge badge-sm badge-success">{{ $v->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                                @can('role-edit')
                                    <a class="btn btn-sm btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                @endcan
                                @can('role-delete')
                                    <form method="POST" action="{{ route('roles.destroy', $role->id) }}"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {!! $roles->render() !!}
            </div>
        </div>
    </div>
@endsection
