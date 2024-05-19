@extends('backend.layouts.master')

@section('title', 'Edit Brand')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card">
        <div class="card-header">
            <h4>Offer Edit</h4>
        </div>

        <div class="card-body">
            <form class="needs-validation" action="{{ route('offers.update', $post->id) }}" method="POST" novalidate
                enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-row">

                    <div class="col-md-6 mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control form-control-sm" id="title" name="name"
                            placeholder="Enter title" value="{{ !empty($post) ? $post->name : old('name') }}" required>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        @if (!empty($post))
                            <input class="slug_edit d-none" id="slug_edit" name="slug_edit" type="checkbox">
                            <label for="slug_edit" class=" font-weight-normal text-success slug_fa" role="button"
                                style="font-size: 10px;">
                                <i class="fas fa-edit"></i>
                            </label>
                        @endif
                        <input type="text" class="form-control form-control-sm {{ !empty($post) ?: 'slug_active' }}"
                            id="slug" name="slug" placeholder="Enter Slug"
                            value="{{ !empty($post) ? $post->slug : old('slug') }}" autocomplete="off"
                            {{ !empty($post) ? 'readonly' : '' }}>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label>Show Date and time range:</label>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="limit" id="showRangeCheckbox"
                                {{ !empty($post) && $post->start_from ? 'checked' : '' }}>
                            <label class="form-check-label" for="showRangeCheckbox">
                                Show Date and time range
                            </label>
                        </div>

                        @if ($post->start_from)
                            <div class="input-group" id="rangeInputGroup"
                                style="{{ !empty($post) && $post->start_from ? '' : 'display: none;' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="text" name="range" class="form-control float-right" id="reservationtime"
                                    value="{{ !empty($post) ? ($post->start_from ? \Carbon\Carbon::parse($post->start_from)->format('m/d/Y h:i A') : '') : '' }} - {{ !empty($post) ? ($post->end_to ? \Carbon\Carbon::parse($post->end_to)->format('m/d/Y h:i A') : '') : '' }}">
                                <div class="invalid-feedback">
                                    @error('range')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        @else
                            <div class="input-group" id="rangeInputGroup"
                                style="{{ !empty($post) && $post->start_from ? '' : 'display: none;' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="text" name="range" class="form-control float-right" id="reservationtime"
                                    value="">
                                <div class="invalid-feedback">
                                    @error('range')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        @endif



                    </div>

                    <div class="col-md-6"></div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Image</label>

                        <input class="form-control" name="image" type="file"
                            onchange="previewImage(this, 'image-preview','100px','300px')">
                        <div class="mt-2" id="image-preview">
                            <image src="{{ asset($post->image) }}" alt="" height="200px" width="600px"
                                onerror="this.src='{{ asset('demo_img.jpg') }}'; this.alt='Alternative Text';" />
                        </div>
                        <div class="invalid-feedback">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>


                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>



@endsection

@section('scripts')


    <script>
        $(".slug_edit").change(function() {
            $("#slug").attr('readonly', !this.checked)
            if (this.checked == true) {
                $("#slug").addClass('slug_active')
                $("label.slug_fa i").addClass('fa-check').removeClass('fa-edit')
            }
            if (this.checked == false) {
                $("#slug").removeClass('slug_active')
                $("label.slug_fa i").addClass('fa-edit').removeClass('fa-check')
            }
        })
        $("#title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $(".slug_active").val(Text);
        });
    </script>



    <script>
        $(function() {
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 15,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showRangeCheckbox = document.getElementById('showRangeCheckbox');
            const rangeInputGroup = document.getElementById('rangeInputGroup');

            showRangeCheckbox.addEventListener('change', function() {
                rangeInputGroup.style.display = showRangeCheckbox.checked ? '' : 'none';
            });

            // Trigger the change event on page load if the checkbox is initially checked
            if (showRangeCheckbox.checked) {
                rangeInputGroup.style.display = '';
            }
        });
    </script>


@endsection
