@extends('backend.layouts.master')

@section('title', 'District Management')

@section('content')




    <div class="page-content">
        <div class="row justify-content-md-center">
            <div class="col-md-10">

                @can('district-list')
                    <a href="{{ url('/districts') }}" class="d-flex mb-2" title="Back">
                        <button class="btn btn-warning btn-xs ml-auto"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                            Back
                        </button>
                    </a>
                @endcan

                <div class="card">

                    <div class="card-header">
                        <h3 class="text-center">Create New District</h3>
                    </div>

                    <div class="card-body">
                        @include('backend.alert')

                        <form class="needs-validation" action="{{ url('/districts') }}" method="POST" novalidate>
                            @csrf

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Division</label>
                                    <select class="form-control @error('division_id') is-invalid @enderror"
                                        name="division_id" required>
                                        <option value="">Choose One</option>
                                        @foreach ($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        @error('division_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">District Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="validationCustom01" name="name" placeholder="Enter Name"
                                        value="{{ old('name') }}" required>
                                    <div class="invalid-feedback">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Status</label>
                                    <div class="custom-control custom-switch">
                                        <input type="hidden" name="status" value="0">
                                        <input type="checkbox" class="custom-control-input" id="validationCustom02"
                                            name="status" {{ old('status') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="validationCustom02"></label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

@endsection
