@extends('backend.layouts.master')

@section('title', 'Create New Package')

@section('content')

    <div class="row">

        <div class="col-md-12">
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
        </div>

        <div class="col-md-12 card">
            <div class="row card-body">
                <div class="form-group col-md-4">
                    <label for="patientName">Patient Name:</label>
                    <input type="text" class="form-control" id="patientName" name="patientName" required>
                </div>

                <div class="form-group col-md-2">
                    <label for="patientAge">Patient Age:</label>
                    <input type="number" class="form-control" id="patientAge" name="patientAge" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="patientAddress">Patient Address:</label>
                    <input type="text" class="form-control" id="patientAddress" name="patientAddress" required>
                </div>
            </div>
        </div>


        <div class="col-md-4 card">
            <div class="card-body">
                <h3 class="text-center">Test/Package</h3>
                <form id="receiptForm">
                    <div class="form-group">
                        <label for="test">Select Test:</label>
6
                        <div class="d-flex">
                            <select id="test" class="form-control testSelect">
                                @foreach ($tests as $test)
                                    <option value="{{ $test->id }}" data-price="{{ $test->price }}">{{ $test->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="button" class="btn btn-primary memo-btn" id="addTest"">Add Test</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="package">Select Package:</label>

                        <div class="d-flex">
                            <select id="package" class="form-control packageSelect">
                                @foreach ($packages as $package)
                                    <option value="{{ $package->id }}" data-price="{{ $package->price }}">
                                        {{ $package->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="button" class="btn btn-primary memo-btn" id="addPackage">Add Package</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-8 card">
            <div class="card-body">
                <h3 class="text-center">Memo</h3>
                <table class="table table-bordered" id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Fee</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody id="selectedItems2"></tbody>
                </table>

                <div class="form-group">
                    <label for="totalPrice">Total Price:</label>
                    <input type="text" class="form-control" id="totalPrice" name="totalPrice" readonly>
                </div>

                <button type="submit" class="btn btn-success">Generate Receipt</button>

            </div>
        </div>
    </div>








@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            // Initialize select2 for test and package selection
            $('.testSelect, .packageSelect').select2();

            // Add test to the selected list
            $('#addTest').click(function() {
                var testName = $('#test option:selected').text();
                var testPrice = $('#test option:selected').data('price');
                $('#selectedItems2').append('<tr><td>' + testName + '</td>  <td>' +
                    testPrice +
                    'Tk </td> <td> <button type="button" class="btn btn-sm btn-danger removeItem">Remove</button></td></tr>'
                );
                calculateTotalPrice();
            });

            // Add package to the selected list
            $('#addPackage').click(function() {
                var packageName = $('#package option:selected').text();
                var packagePrice = $('#package option:selected').data('price');
                $('#selectedItems2').append('<tr><td>' + packageName + '</td>  <td>' +
                    packagePrice +
                    'Tk </td> <td> <button type="button" class="btn btn-sm btn-danger removeItem">Remove</button></td></tr>'
                );
                calculateTotalPrice();
            });

            // Remove item from the list
            $(document).on('click', '.removeItem', function() {
                $(this).closest('tr').remove();
                calculateTotalPrice();
            });


            // Calculate total price
            function calculateTotalPrice() {
                var totalPrice = 0;
                $('#selectedItems2 tr').each(function() {
                    var price = parseFloat($(this).find('td:eq(1)').text());
                    totalPrice += price;
                });
                $('#totalPrice').val('$' + totalPrice.toFixed(2));
            }
        });
    </script>

@endsection
