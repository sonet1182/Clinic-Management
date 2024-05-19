@extends('backend.layouts.master')

@section('title', 'Division Management')

@section('content')

    <div class="page-content">
        <div class="row justify-content-md-center">
            <div class="col-md-10">

                @include('backend.alert')

                <div class="card">
                    <div class="card-header d-flex">
                        <h4>Division List</h4>

                        @can('division-create')
                            <a href="{{ url('divisions/create ') }}" class="btn btn-success btn-sm ml-auto"
                                title="Add New AllArea">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                        @endcan

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>ID#</th>
                                        <th>Name</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($divisions as $division)
                                        <tr>
                                            <td>{{ $division->id }}</td>
                                            <td>{{ $division->name }}</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" name="status"
                                                        {{ $division->status == 1 ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="validationCustom02"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    @can('division-edit')
                                                        <a href="{{ url('divisions/' . $division->id . '/edit') }}"
                                                            class="btn btn-primary btn-xs m-r-5" data-toggle="tooltip"
                                                            data-original-title="Edit">
                                                            <i class="fa fa-edit font-14"></i>
                                                        </a>
                                                    @endcan

                                                    @can('division-delete')
                                                        <form action="{{ url('divisions/' . $division->id) }}"
                                                            method="POST" class="delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-xs"
                                                                data-toggle="tooltip" data-original-title="Delete"
                                                                onclick="confirmDelete(event)">
                                                                <i class="fa fa-trash font-14"></i>
                                                            </button>
                                                        </form>
                                                    @endcan
                                                </div>

                                                <script>
                                                    function confirmDelete(event) {
                                                        event.preventDefault();

                                                        if (confirm("Are you sure you want to delete this item?")) {
                                                            event.target.closest('.delete-form').submit();
                                                        }
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
