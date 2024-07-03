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

        <div class="col-md-3 card">
            <div class="card-body">
                <h3 class="text-center">Test/Package</h3>
                <form id="memoForm" method="POST" action="{{ route('receipts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="test">Select Test:</label>
                        <div class="d-flex">
                            <select id="test" class="form-control testSelect">
                                @foreach ($tests as $test)
                                    <option value="{{ $test->id }}" data-id="{{ $test->id }}"
                                        data-price="{{ $test->price }}">{{ $test->name }}
                                        ({{ number_format($test->price) }} Tk)
                                    </option>
                                @endforeach
                            </select>
                            <button type="button" style="width: 120px" class="btn btn-primary memo-btn" id="addTest">Add
                                Test</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="package">Select Package:</label>
                        <div class="d-flex">

                            <select id="package" class="form-control packageSelect">
                                @foreach ($packages as $package)
                                    <option value="{{ $package->id }}" data-id="{{ $package->id }}"
                                        data-price="{{ $package->price }}">{{ $package->name }}
                                        ({{ number_format($package->price) }} Tk)
                                    </option>
                                @endforeach
                            </select>

                            <button type="button" style="width: 120px" class="btn btn-primary memo-btn" id="addPackage">Add
                                Package</button>
                        </div>
                    </div>

                    <hr>

                    <div class="">
                        <label for="clinicAccount">Discount/Commission:</label>

                        <div class="form-group">
                            <input type="checkbox" id="givePatientDiscount" checked> Patient Discount
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="giveReferenceDiscount" checked> Reference Discount
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="giveDoctorCommission" checked> Doctor Commission
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="clinicAccount">Clinic Account:</label>
                        <input type="number" class="form-control" id="clinicAccount" name="clinicAccount" readonly>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="promoCode">Promo Code:</label>
                        <input type="text" class="form-control" id="promoCode" name="promoCode">
                        <button type="button" class="btn btn-primary mt-2" id="applyPromoCode">Apply</button>
                    </div>



                </form>
            </div>
        </div>

        <div class="col-md-9 card">
            <div class="card-body">
                <h3 class="text-center">Memo</h3>

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Fee</th>
                                <th>Total Discount</th>
                                <th>Patient Discount</th>
                                <th>Reference Discount</th>
                                <th>Doctor Commission</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="selectedItems2"></tbody>
                    </table>
                </div>

                <div class="row mt-5">
                    <div class="form-group col-md-3">
                        <label for="totalPrice">Total Fee:</label>
                        <input type="number" class="form-control" id="totalPrice" name="totalPrice" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="totalVat">Total VAT (15%) :</label>
                        <input type="number" class="form-control" id="totalVat" name="totalVat" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="couponDiscount">Coupon Discount :</label>
                        <input type="number" class="form-control" id="couponDiscount" name="couponDiscount" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="finalPrice">Total Fee with VAT:</label>
                        <input type="number" class="form-control text-success text-bold" id="finalPrice"
                            name="finalPrice" readonly>
                    </div>
                </div>

                <button type="button" class="btn btn-success" id="generateReceipt">Generate Receipt</button>


                <form id="pdfForm" method="POST" action="{{ route('generate.pdf') }}">
                    @csrf
                    <input type="hidden" name="pdf_patientName" id="pdf_patientName" value="">
                    <input type="hidden" name="pdf_patientAge" id="pdf_patientAge" value="">
                    <input type="hidden" name="pdf_patientAddress" id="pdf_patientAddress" value="">
                    <input type="hidden" name="pdf_totalPrice" id="pdf_totalPrice" value="">
                    <input type="hidden" name="pdf_totalVat" id="pdf_totalVat" value="">
                    <input type="hidden" name="pdf_finalPrice" id="pdf_finalPrice" value="">
                    <input type="hidden" name="pdf_items" id="pdf_items" value="">
                    <input type="hidden" name="pdf_couponDiscount" id="pdf_couponDiscount" value="">



                    <div class="row mt-3">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary" id="pdfReceipt">
                                <i class="fa fa-print"></i> PDF Receipt Download
                            </button>
                        </div>
                    </div>
                </form>




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
            var itemId = $('#test option:selected').data('id'); // Fetch item_id
            var type = 'test'; // Set type
            $('#selectedItems2').append('<tr data-id="' + itemId + '" data-type="' + type + '"><td>' +
                testName + '</td>  <td>' +
                testPrice +
                ' Tk</td> <td><input type="number" class="form-control discountInput" value="30"></td> <td></td> <td></td> <td></td> <td></td> <td> <button type="button" class="btn btn-sm btn-danger removeItem">Remove</button></td></tr>'
            );
            calculateTotalPrice();
        });


        // Add package to the selected list
        $('#addPackage').click(function() {
            var packageName = $('#package option:selected').text();
            var packagePrice = $('#package option:selected').data('price');
            var itemId = $('#package option:selected').data('id'); // Fetch item_id
            var type = 'package'; // Set type
            $('#selectedItems2').append('<tr data-id="' + itemId + '" data-type="' + type + '"><td>' +
                packageName + '</td>  <td>' +
                packagePrice +
                ' Tk</td> <td><input type="number" class="form-control discountInput" value="30"></td> <td></td> <td></td> <td></td> <td></td> <td> <button type="button" class="btn btn-sm btn-danger removeItem">Remove</button></td></tr>'
            );
            calculateTotalPrice();
        });


        // Remove item from the list
        $(document).on('click', '.removeItem', function() {
            $(this).closest('tr').remove();
            calculateTotalPrice();
        });


        $('#applyPromoCode').click(function() {
            var promoCode = $('#promoCode').val();

            $.ajax({
                url: '{{ route('validate.promo.code') }}',
                method: 'POST',
                data: {
                    promoCode: promoCode
                },
                success: function(response) {
                    if (response.success) {
                        applyPromoCodeDiscount(response.promoCode);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Error validating promo code');
                }
            });
        });

        function applyPromoCodeDiscount(promoCode) {
            var discountAmount = 0;
            var totalFeeWithVAT = parseFloat($('#finalPrice').val());

            if (promoCode.type == 1) {
                discountAmount = totalFeeWithVAT * (promoCode.amount / 100);
            } else if (promoCode.type == 2) {
                discountAmount = promoCode.amount;
            }

            var finalPriceAfterDiscount = totalFeeWithVAT - discountAmount;

            $('#finalPrice').val(finalPriceAfterDiscount.toFixed(2));
            $('#couponDiscount').val(discountAmount.toFixed(2));
            $('#pdf_couponDiscount').val(discountAmount.toFixed(2));
        }



        // Calculate total price
        function calculateTotalPrice() {
            var totalFee = 0;
            var totalPatientDiscount = 0;
            var totalReferenceDiscount = 0;
            var totalDoctorCommission = 0;
            var totalPatientPayment = 0;
            var clinicAccount = 0; // Initialize clinic account variable

            $('#selectedItems2 tr').each(function() {
                var fee = parseFloat($(this).find('td:eq(1)').text());
                totalFee += fee;

                var discountPercentage = parseFloat($(this).find('td:eq(2) input').val());
                var discountAmount = fee * (discountPercentage / 100);
                var discountedFee = fee - discountAmount;

                var patientDiscount = 0,
                    referenceDiscount = 0,
                    doctorCommission = 0;

                if ($(this).data('type') === 'package') {
                    // Package discount distribution
                    if ($('#givePatientDiscount').is(':checked')) patientDiscount = discountAmount *
                        0.5;
                    if ($('#giveReferenceDiscount').is(':checked')) referenceDiscount = discountAmount *
                        0.25;
                    if ($('#giveDoctorCommission').is(':checked')) doctorCommission = discountAmount *
                        0.25;
                } else {
                    // Test discount distribution
                    if ($('#givePatientDiscount').is(':checked')) patientDiscount = discountAmount / 3;
                    if ($('#giveReferenceDiscount').is(':checked')) referenceDiscount = discountAmount /
                        3;
                    if ($('#giveDoctorCommission').is(':checked')) doctorCommission = discountAmount /
                        3;
                }

                var patientPayment = discountedFee;

                totalPatientDiscount += patientDiscount;
                totalReferenceDiscount += referenceDiscount;
                totalDoctorCommission += doctorCommission;
                totalPatientPayment += patientPayment;

                // Add undistributed discount to clinic account
                clinicAccount += discountAmount - (patientDiscount + referenceDiscount +
                    doctorCommission);

                $(this).find('td:eq(3)').text(patientDiscount.toFixed(2) + ' Tk');
                $(this).find('td:eq(4)').text(referenceDiscount.toFixed(2) + ' Tk');
                $(this).find('td:eq(5)').text(doctorCommission.toFixed(2) + ' Tk');
                $(this).find('td:eq(6)').text(patientPayment.toFixed(2) + ' Tk');
            });

            var totalVAT = totalPatientPayment * 0.15;
            var finalTotalPrice = totalPatientPayment + totalVAT;

            $('#totalPrice').val(totalPatientPayment.toFixed(2));
            $('#totalVat').val(totalVAT.toFixed(2));
            $('#finalPrice').val(finalTotalPrice.toFixed(2));
            $('#clinicAccount').val(clinicAccount.toFixed(2)); // Update clinic account value

            var promoCode = $('#promoCode').val();
            if (promoCode) {
                $('#applyPromoCode').click();
            }
        }


        // Recalculate total price when discount input changes
        $(document).on('input', '.discountInput', function() {
            calculateTotalPrice();
        });

        // Handle form submission
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#generateReceipt').click(function() {
            // Collect form data
            var formData = {
                patientName: $('#patientName').val(),
                patientAge: $('#patientAge').val(),
                patientAddress: $('#patientAddress').val(),
                totalPrice: $('#totalPrice').val(),
                totalVat: $('#totalVat').val(),
                couponDiscount: $('#couponDiscount').val(),
                clinicAccount: $('#clinicAccount').val(),
                finalPrice: $('#finalPrice').val(),
                items: []
            };

            // Collect selected items data
            $('#selectedItems2 tr').each(function() {
                var item = {
                    item_id: $(this).data('id'), // Add item_id from data attribute
                    type: $(this).data('type'), // Add type from data attribute
                    name: $(this).find('td:eq(0)').text(),
                    fee: parseFloat($(this).find('td:eq(1)').text()),
                    totalDiscount: parseFloat($(this).find('td:eq(2) input').val()),
                    patientDiscount: parseFloat($(this).find('td:eq(3)').text()),
                    referenceDiscount: parseFloat($(this).find('td:eq(4)').text()),
                    doctorCommission: parseFloat($(this).find('td:eq(5)').text()),
                    payment: parseFloat($(this).find('td:eq(6)').text()),
                };
                formData.items.push(item);
            });

            // Send data to the server via AJAX
            $.ajax({
                url: $('#memoForm').attr('action'),
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Handle successful response
                    toastr.success("Receipt generated successfully!");
                    // Disable form elements and buttons after generating receipt
                    $('#generateReceipt').prop('disabled', true);
                    $('#addTest').prop('disabled', true);
                    $('#addPackage').prop('disabled', true);
                    $('#patientName').prop('disabled', true);
                    $('#patientAge').prop('disabled', true);
                    $('#patientAddress').prop('disabled', true);
                    $('.discountInput').prop('disabled', true);
                    $('.removeItem').prop('disabled', true);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    var errorResponse = JSON.parse(xhr.responseText);
                    toastr.error(errorResponse.message);
                }
            });
        });

        $('#pdfReceipt').click(function() {
            var formData = {
                patientName: $('#patientName').val(),
                patientAge: $('#patientAge').val(),
                patientAddress: $('#patientAddress').val(),
                totalPrice: $('#totalPrice').val(),
                totalVat: $('#totalVat').val(),
                finalPrice: $('#finalPrice').val(),
                items: []
            };

            $('#selectedItems2 tr').each(function() {
                var item = {
                    item_id: $(this).data('id'),
                    type: $(this).data('type'),
                    name: $(this).find('td:eq(0)').text(),
                    fee: parseFloat($(this).find('td:eq(1)').text()),
                    totalDiscount: parseFloat($(this).find('td:eq(2) input').val()),
                    patientDiscount: parseFloat($(this).find('td:eq(3)').text()),
                    referenceDiscount: parseFloat($(this).find('td:eq(4)').text()),
                    doctorCommission: parseFloat($(this).find('td:eq(5)').text()),
                    payment: parseFloat($(this).find('td:eq(6)').text())
                };
                formData.items.push(item);
            });

            console.log('object', formData);

            $('#pdf_patientName').val(formData.patientName);
            $('#pdf_patientAge').val(formData.patientAge);
            $('#pdf_patientAddress').val(formData.patientAddress);
            $('#pdf_totalPrice').val(formData.totalPrice);
            $('#pdf_totalVat').val(formData.totalVat);
            $('#pdf_finalPrice').val(formData.finalPrice);
            $('#pdf_items').val(JSON.stringify(formData.items));
        });
    });
</script>
@endsection
