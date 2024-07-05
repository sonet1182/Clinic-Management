@extends('backend.layouts.master')

@section('title', 'Receipts')
@section('breadcrumb', 'Receipts List')

@section('content')

    <div class="card card-default">
        @if ($errors->any())
            <div class="alert alert-danger mb-2">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-header">
            <div class="d-flex">
                <div class="ml-auto">
                    <a type="button" class="btn btn-sm btn-success" href="{{ route('receipts.create') }}">
                        <i class="fa fa-plus" aria-hidden="true"></i> Create New Receipt
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="mb-5" style="width: 360px">
                <label>Filter By Date and Time Range:</label>
                <div class="input-group" id="rangeInputGroup">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="range" class="form-control float-right" id="reservationtime"
                        value="">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Patient Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Type</th>
                            <th>Ref Doc. name</th>
                            <th>Room</th>
                            <th>Total Price</th>
                            <th>Total VAT</th>
                            <th>Coupon Discount</th>
                            <th>Clinic Acount</th>
                            <th>Final Price</th>
                            <th style="width: 150px">Generated At</th>
                            <th style="width: 80px">Action</th>
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
        var table;

        $(document).ready(function() {
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePicker24Hour: true,
                startDate: moment().startOf('month'),
                endDate: moment().endOf('month'),
                locale: {
                    format: 'YYYY-MM-DD HH:mm:ss'
                }
            });

            $('#reservationtime').on('apply.daterangepicker', function(ev, picker) {
                table.draw();
            });

            table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('receipt.list') }}",
                    type: 'GET',
                    data: function(d) {
                        var dateRange = $('#reservationtime').val();
                        if (dateRange) {
                            d.date_range = dateRange;
                        }
                    },
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
                        data: 'patient_name',
                        name: 'patient_name'
                    },
                    {
                        data: 'patient_age',
                        name: 'patient_age'
                    },
                    {
                        data: 'patient_address',
                        name: 'patient_address'
                    },
                    {
                        data: 'patient_phone',
                        name: 'patient_phone'
                    },
                    {
                        data: 'patient_gender',
                        name: 'patient_gender'
                    },
                    {
                        data: 'patient_type',
                        name: 'patient_type'
                    },
                    {
                        data: 'doctor_name',
                        name: 'doctor_name'
                    },
                    {
                        data: 'doctor_room',
                        name: 'doctor_room'
                    },
                    {
                        data: 'total_price',
                        name: 'total_price'
                    },
                    {
                        data: 'total_vat',
                        name: 'total_vat'
                    },
                    {
                        data: 'coupon_discount',
                        name: 'coupon_discount'
                    },
                    {
                        data: 'clinic_account',
                        name: 'clinic_account'
                    },
                    {
                        data: 'final_price',
                        name: 'final_price'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            // Handle delete button click event
            $('.yajra-datatable').on('click', '.delete-btn', function() {
                var rowId = $(this).data('row-id');

                if (confirm('Are you sure you want to delete this record?')) {
                    $.ajax({
                        url: '/admin/receipts/' + rowId,
                        type: 'DELETE',
                        data: {
                            '_token': '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            if (response.success) {
                                toastr.success(response.message);
                            } else {
                                toastr.error(response.message);
                            }
                            table.ajax.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            alert('Error deleting record');
                        }
                    });
                }
            });
        });
    </script>
@endsection
