@extends('backend.layouts.master')

@section('title', 'Package Management')

@section('content')

    <div class="card card-default">

        <div class="card-header">
            <div class="d-flex">
                <a class="btn btn-success ml-auto" href="{{ route('packages.create') }}">
                    <i class="nav-icon fas fa-plus"></i> Create New Package
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered" id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Fee</th>
                        <th>Tests</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->name }}</td>
                            <td>{{ number_format($package->price) }} Tk</td>
                            <td>
                                @foreach ($package->test_names as $testName)
                                    <span class="badge badge-sm badge-success">{{ $testName }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('package-edit')
                                    <a class="btn btn-xs btn-primary" href="{{ route('packages.edit', $package->id) }}">Edit</a>
                                @endcan
                                @can('package-delete')
                                    <form method="POST" action="{{ route('packages.destroy', $package->id) }}"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

          
        </div>

    </div>
@endsection

@section('scripts')

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "order": [[0, "desc"]] // Order by the first column in descending order
        });
    });
</script>

@endsection
