@extends('backend.layouts.master')

@section('title', 'Offers')
@section('breadcrumb', 'Product List')

@section('content')

    <div class="card card-default">


        @if ($errors->any())
            <div class="alert alert-danger">
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

                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal"> <i
                            class="fa fa-plus" aria-hidden="true"></i> Create New Offer </button>

                </div>
            </div>



            <!-- Create Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create New Offer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" action="{{ route('offers.store') }}" method="POST" novalidate
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-row">


                                    <div class="col-md-6 mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control form-control-sm" id="title"
                                            name="name" placeholder="Enter title"
                                            value="{{ !empty($post) ? $post->name : old('name') }}" required>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="slug">Slug</label>
                                        @if (!empty($post))
                                            <input class="slug_edit d-none" id="slug_edit" name="slug_edit" type="checkbox"
                                                required>
                                            <label for="slug_edit" class=" font-weight-normal text-success slug_fa"
                                                role="button" style="font-size: 10px;">
                                                <i class="fas fa-edit"></i>
                                            </label>
                                        @endif
                                        <input type="text"
                                            class="form-control form-control-sm {{ !empty($post) ?: 'slug_active' }}"
                                            id="slug" name="slug" placeholder="Enter Slug"
                                            value="{{ !empty($post) ? $post->slug : old('slug') }}" autocomplete="off"
                                            {{ !empty($post) ? 'readonly' : '' }}>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label>Show Date and time range:</label>

                                        <div class="form-check">
                                            <input class="form-check-input" name="limit" type="checkbox"
                                                id="showRangeCheckbox">
                                            <label class="form-check-label" for="showRangeCheckbox">
                                                Add Time Limit
                                            </label>
                                        </div>

                                        <div class="input-group" id="rangeInputGroup" style="display: none;">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                            <input type="text" name="range" class="form-control float-right"
                                                id="reservationtime" value="">
                                            <div class="invalid-feedback">
                                                @error('range')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom01">Image</label>

                                        <input class="form-control" name="image" type="file"
                                            onchange="previewImage(this, 'image-preview','100px','300px')">
                                        <div class="mt-2" id="image-preview"></div>
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
                </div>
            </div>


        </div>


        <div class="card-body">



            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
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

    <script type="text/javascript">
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('offers.list') }}",
                    type: 'GET',
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr(
                            'content'));
                    },
                },
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
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: 'start',
                        name: 'start'
                    },
                    {
                        data: 'end',
                        name: 'end'
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showRangeCheckbox = document.getElementById('showRangeCheckbox');
            const rangeInputGroup = document.getElementById('rangeInputGroup');

            showRangeCheckbox.addEventListener('change', function() {
                rangeInputGroup.style.display = showRangeCheckbox.checked ? '' : 'none';
            });
        });
    </script>
@endsection
