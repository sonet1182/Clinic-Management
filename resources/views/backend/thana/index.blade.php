@extends('backend.layouts.master')

@section('title', 'District Management')

@section('content')




    <div class="page-content">
        <div class="row justify-content-md-center">
            <div class="col-md-10">

                @include('backend.alert')

                <div class="card">
                    <div class="card-header d-flex">
                        <h4>Thana List</h4>

                        @can('thana-create')
                            <a href="{{ url('thanas/create ') }}" class="btn btn-success btn-sm ml-auto"
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
                                        <th>Division Name</th>
                                        <th>District Name</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($districts as $district)
                                        <tr>
                                            <td>{{ $district->id }}</td>
                                            <td>{{ $district->name }}</td>
                                            <td>{{ $district->division ? $district->division->name : '' }}</td>
                                            <td>{{ $district->district ? $district->district->name : '' }}</td>
                                            <td>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" name="status"
                                                        {{ $district->status == 1 ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="validationCustom02"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    @can('thana-edit')
                                                        <a href="{{ url('thanas/' . $district->id . '/edit') }}"
                                                            class="btn btn-primary btn-xs m-r-5" data-toggle="tooltip"
                                                            data-original-title="Edit">
                                                            <i class="fa fa-edit font-14"></i>
                                                        </a>
                                                    @endcan

                                                    @can('thana-delete')
                                                        <form action="{{ url('thanas/' . $district->id) }}"
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
