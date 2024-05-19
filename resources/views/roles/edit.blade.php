@extends('backend.layouts.master')

@section('title', 'Edit Role')

@section('content')
    <div class="card card-default">

        <div class="card-header">
            <div class="d-flex">
                <a class="btn btn-primary ml-auto" href="{{ route('roles.index') }}"> Back </a>
            </div>
        </div>

        <div class="card-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('roles.update', $role->id) }}">
                @csrf
                @method('PATCH')


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                value="{{ $role->name }}">
                        </div>
                    </div>

                    @foreach ($permissions as $group => $groupPermissions)
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <div class="form-group">
                                <strong><u>{{ strtoupper($group) }}:</u></strong>
                                <br />
                                @foreach ($groupPermissions as $value)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permission[]"
                                            value="{{ $value->name }}"
                                            {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $value->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>

    @endsection
