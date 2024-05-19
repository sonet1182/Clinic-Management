@extends('backend.layouts.master')

@section('title', 'Less Stock Products')
@section('breadcrumb', 'Less Stock Product List')

@section('content')



    <div class="card card-default">


        <div class="card-header">
            <div class="d-flex">
                <div class="ml-auto">
                    <a class="btn btn-info btn-sm" href="{{ route('products.export_csv') }}"><i class="fa fa-download"
                            aria-hidden="true"></i> Export File</a>
                    {{-- @can('product-create')
                        <a class="btn btn-sm btn-success" href="{{ route('products.create') }}"> <i class="fa fa-plus"
                                aria-hidden="true"></i> Create New Product </a>
                    @endcan --}}
                </div>
            </div>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Regular Price</th>
                            <th>Offer Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>



    </div>
@endsection


@section('scripts')
    <script type="text/javascript">
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('products.stock_alert_list') }}",
                    type: 'GET',
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr(
                            'content'));
                    },
                },
                order: [[0, 'desc']],
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'imageview',
                        name: 'imageview'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'category_id',
                        name: 'category_id'
                    },
                    {
                        data: 'regular_price',
                        name: 'regular_price'
                    },
                    {
                        data: 'offer_price',
                        name: 'offer_price'
                    },
                    {
                        data: 'quantity',
                        name: 'quantity'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>


@endsection
