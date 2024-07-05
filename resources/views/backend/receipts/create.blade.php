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
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="patientName">Patient Name:</label>
                        <input type="text" class="form-control" id="patientName" name="patientName" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="patientName">Phone Number:</label>
                        <input type="text" class="form-control" id="patientPhone" name="patientPhone" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="patientAge">Age:</label>
                        <input type="number" class="form-control" id="patientAge" name="patientAge" required>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="patientAge">Gender:</label>
                        <select class="form-control" id="patientGender" name="patientGender">
                            <option value="">Choose One</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="patientAge">Patient Type:</label>
                        <select class="form-control" id="patientType" name="patientType">
                            <option value="">Choose One</option>
                            <option value="New">New</option>
                            <option value="Old">Old</option>
                        </select>
                    </div>


                    <div class="form-group col-md-8">
                        <label for="patientAddress">Address:</label>
                        <input type="text" class="form-control" id="patientAddress" name="patientAddress" required>
                    </div>
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
                        <button type="button" style="display: none" class="btn btn-danger mt-2"
                            id="removePromoCode">Remove</button>
                    </div>



                </form>
            </div>
        </div>

        <div class="col-md-9 card">
            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="staticEmail" class="col-form-label">Reference:</label>
                        <input type="text" class="form-control" id="reference" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="staticEmail" class="col-form-label">Reference Doctor Name:</label>
                        <input type="text" class="form-control" id="doctorName" placeholder="" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="staticEmail" class="col-form-label">Room No:</label>
                        <input type="text" class="form-control" id="doctorRoom" placeholder="" value="">
                    </div>
                </div>

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
                        <label for="couponDiscount">Coupon Discount :</label>
                        <input type="number" class="form-control" id="couponDiscount" name="couponDiscount" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="totalVat">Total VAT (15%) :</label>
                        <input type="number" class="form-control" id="totalVat" name="totalVat" readonly>
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
                    <input type="hidden" name="id" id="inv_id" value="">
                    <input type="hidden" name="pdf_patientName" id="pdf_patientName" value="">
                    <input type="hidden" name="pdf_patientAge" id="pdf_patientAge" value="">
                    <input type="hidden" name="pdf_patientAddress" id="pdf_patientAddress" value="">
                    <input type="hidden" name="pdf_patientPhone" id="pdf_patientPhone" value="">
                    <input type="hidden" name="pdf_patientGender" id="pdf_patientGender" value="">
                    <input type="hidden" name="pdf_patientType" id="pdf_patientType" value="">
                    <input type="hidden" name="pdf_reference" id="pdf_reference" value="">
                    <input type="hidden" name="pdf_doctorName" id="pdf_doctorName" value="">
                    <input type="hidden" name="pdf_doctorRoom" id="pdf_doctorRoom" value="">

                    <input type="hidden" name="pdf_additionalCheckbox" id="pdf_additionalCheckbox" value="">
                    <input type="hidden" name="pdf_additionalCheckbox2" id="pdf_additionalCheckbox2" value="">
                    <input type="hidden" name="pdf_additionalInput" id="pdf_additionalInput" value="">

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
                            <button type="submit" style="display: none" class="btn btn-primary" id="onlyPdfReceipt">
                                <i class="fa fa-print"></i> PDF Receipt Download
                            </button>
                            <a href="{{ route('receipts.create') }}" type="button" style="display: none"
                                class="btn btn-info" id="resetForm">
                                <i class="fa fa-loading"></i> Reset
                            </a>
                        </div>
                    </div>
                </form>

                <div>
                    <label>
                        <input type="checkbox" id="additionalCheckbox" value="20"> Needle (20 Tk)
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" id="additionalCheckbox2" value="20"> Red Tube (20 Tk)
                    </label>
                    <br>
                    <label>
                        Others:
                        <input class="form-control" type="text" id="additionalInput" value="0">
                    </label>
                </div>




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
                    ' Tk</td> <td><input type="number" class="form-control discountInput" value="30" min="0"></td> <td></td> <td></td> <td></td> <td></td> <td> <button type="button" class="btn btn-sm btn-danger removeItem">Remove</button></td></tr>'
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
                            toastr.success('Coupon Discount Added');
                            resetDiscounts();
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
                var totalPrice = parseFloat($('#totalPrice').val());

                if (promoCode.type == 1) {
                    discountAmount = totalPrice * (promoCode.amount / 100);
                } else if (promoCode.type == 2) {
                    discountAmount = promoCode.amount;
                }

                var priceAfterDiscount = totalPrice - discountAmount;
                var totalVat = priceAfterDiscount * 15 / 100;
                var finalPrice = priceAfterDiscount + totalVat;

                $('#finalPrice').val(finalPrice.toFixed(2));
                $('#totalVat').val(totalVat.toFixed(2));
                $('#couponDiscount').val(discountAmount.toFixed(2));
                $('#pdf_couponDiscount').val(discountAmount.toFixed(2));
                $('#applyPromoCode').prop('disabled', true);

                calculateTotalPrice();

                // Show the remove button and attach a click handler
                $('#removePromoCode').show().click(function() {
                    // Reset UI elements to their initial state
                    $('#totalPrice').val(totalPrice.toFixed(2)); // Restore final price
                    $('#promoCode').val('0.00'); // Reset coupon discount input
                    $('#couponDiscount').val('0.00'); // Reset coupon discount input
                    $('#pdf_couponDiscount').val('0.00'); // Reset another coupon discount input
                    $('#applyPromoCode').prop('disabled', false); // Enable apply promo code button
                    $(this).hide(); // Hide the remove button again

                    // Recalculate total price
                    calculateTotalPrice();
                });
            }



            function resetDiscounts() {
                // Deselect Discount/Commission checkboxes
                $('#givePatientDiscount').prop('checked', false);
                $('#giveReferenceDiscount').prop('checked', false);
                $('#giveDoctorCommission').prop('checked', false);

                $('#reference').val('');
                $('#doctorName').val('');
                $('#doctorRoom').val('');

                // Reset discount columns and total discount inputs
                $('#selectedItems2 tr').each(function() {
                    $(this).find('td:eq(2) input').val(0); // Reset total discount input
                    $(this).find('td:eq(3)').text('0.00 Tk'); // Reset patient discount
                    $(this).find('td:eq(4)').text('0.00 Tk'); // Reset reference discount
                    $(this).find('td:eq(5)').text('0.00 Tk'); // Reset doctor commission
                });

                // Recalculate total price to reflect changes
                calculateTotalPrice();
            }

            // Calculate total price
            function calculateTotalPrice2() {
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

                // Apply promo code discount
                var couponAmount = $('#couponDiscount').val();
                var discountAmount = couponAmount ? parseFloat(couponAmount) : 0;
                finalTotalPrice -= discountAmount;

                $('#totalPrice').val(totalPatientPayment.toFixed(2));
                $('#totalVat').val(totalVAT.toFixed(2));
                $('#finalPrice').val(finalTotalPrice.toFixed(2));
                $('#clinicAccount').val(clinicAccount.toFixed(2)); // Update clinic account value
            }

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

                // Apply promo code discount
                var couponAmount = $('#couponDiscount').val();
                var discountAmount = couponAmount ? parseFloat(couponAmount) : 0;
                totalPatientPayment -= discountAmount;

                // Add additional checkbox and input box values
                var additionalFee = $('#additionalCheckbox').is(':checked') ? parseFloat($('#additionalCheckbox')
                    .val()) : 0;
                var additionalFee2 = $('#additionalCheckbox2').is(':checked') ? parseFloat($('#additionalCheckbox2')
                    .val()) : 0;
                var additionalInputValue = parseFloat($('#additionalInput').val());
                if (isNaN(additionalInputValue)) {
                    additionalInputValue = 0;
                }

                var totalVAT = totalPatientPayment * 0.15;
                var finalTotalPrice = totalPatientPayment + totalVAT;

                finalTotalPrice += additionalFee + additionalFee2 + additionalInputValue;

                $('#totalPrice').val(totalPatientPayment.toFixed(2));
                $('#totalVat').val(totalVAT.toFixed(2));
                $('#finalPrice').val(finalTotalPrice.toFixed(2));
                $('#clinicAccount').val(clinicAccount.toFixed(2)); // Update clinic account value
            }

            // Bind change events to update the total price in real-time
            $('#additionalCheckbox, #additionalCheckbox2, #additionalInput, #couponDiscount').on('change keyup',
                calculateTotalPrice);
            $('#selectedItems2').on('change keyup', 'input', calculateTotalPrice);

            // Initial calculation
            calculateTotalPrice();

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
                    patientPhone: $('#patientPhone').val(),
                    patientType: $('#patientType').val(),
                    patientGender: $('#patientGender').val(),
                    totalPrice: $('#totalPrice').val(),
                    totalVat: $('#totalVat').val(),
                    couponDiscount: $('#couponDiscount').val(),
                    clinicAccount: $('#clinicAccount').val(),
                    finalPrice: $('#finalPrice').val(),
                    reference: $('#reference').val(),
                    doctorName: $('#doctorName').val(),
                    doctorRoom: $('#doctorRoom').val(),

                    additionalCheckbox: $('#additionalCheckbox').is(':checked') ? parseFloat($(
                            '#additionalCheckbox')
                        .val()) : 0,
                    additionalCheckbox2: $('#additionalCheckbox2').is(':checked') ? parseFloat($(
                            '#additionalCheckbox2')
                        .val()) : 0,
                    additionalInput: $('#additionalInput').val(),

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
                        toastr.success("Receipt generated successfully!");
                        $('#generateReceipt').prop('disabled', true);
                        $('#memoForm :input').prop('disabled', true); // Disable all form inputs

                        $('#pdfReceipt').hide();
                        $('#onlyPdfReceipt').show();
                        $('#resetForm').show();

                        console.log('object', response);

                        $('#inv_id').val(response.receipt.id);
                    },
                    error: function(xhr, status, error) {
                        toastr.error("Failed to generate receipt.");
                    }
                });
            });



            $('#pdfReceipt').click(function() {
                $('#generateReceipt').click();
                pdfDownload();
            });

            $('#onlyPdfReceipt').click(function() {
                pdfDownload();
            });


            function pdfDownload() {
                var formData = {
                    patientName: $('#patientName').val(),
                    patientAge: $('#patientAge').val(),
                    patientAddress: $('#patientAddress').val(),

                    patientPhone: $('#patientPhone').val(),
                    patientType: $('#patientType').val(),
                    patientGender: $('#patientGender').val(),

                    reference: $('#reference').val(),
                    doctorName: $('#doctorName').val(),
                    doctorRoom: $('#doctorRoom').val(),

                    additionalCheckbox: $('#additionalCheckbox').is(':checked') ? parseFloat($('#additionalCheckbox')
                    .val()) : 0,
                    additionalCheckbox2: $('#additionalCheckbox2').is(':checked') ? parseFloat($('#additionalCheckbox2')
                    .val()) : 0,
                    additionalInput: $('#additionalInput').val(),

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
                        totalDiscount: parseFloat($(this).find('td:eq(2) input')
                            .val()),
                        patientDiscount: parseFloat($(this).find('td:eq(3)')
                            .text()),
                        referenceDiscount: parseFloat($(this).find('td:eq(4)')
                            .text()),
                        doctorCommission: parseFloat($(this).find('td:eq(5)')
                            .text()),
                        payment: parseFloat($(this).find('td:eq(6)').text())
                    };
                    formData.items.push(item);
                });


                $('#pdf_patientName').val(formData.patientName);
                $('#pdf_patientAge').val(formData.patientAge);
                $('#pdf_patientAddress').val(formData.patientAddress);
                $('#pdf_patientPhone').val(formData.patientPhone);
                $('#pdf_patientType').val(formData.patientType);
                $('#pdf_patientGender').val(formData.patientGender);
                $('#pdf_reference').val(formData.reference);
                $('#pdf_doctorName').val(formData.doctorName);
                $('#pdf_doctorRoom').val(formData.doctorRoom);
                $('#pdf_totalPrice').val(formData.totalPrice);
                $('#pdf_totalVat').val(formData.totalVat);
                $('#pdf_finalPrice').val(formData.finalPrice);
                $('#pdf_items').val(JSON.stringify(formData.items));

                $('#pdf_additionalCheckbox').val(formData.additionalCheckbox);
                $('#pdf_additionalCheckbox2').val(formData.additionalCheckbox2);
                $('#pdf_additionalInput').val(formData.additionalInput);
            }


        });
    </script>
@endsection
