@extends('backend.layouts.master')

@section('title', 'Category')
@section('breadcrumb', 'Category')

@section('content')

    <div class="">

        <div class="card p-3">
            <div>

                <div class="d-flex">
                    <div class="ml-auto">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal"
                            onclick="setParentId()">
                            <i class="fa fa-plus" aria-hidden="true"></i> Create Main Category
                        </button>
                    </div>
                </div>

                <!-- Create Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="add_header"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="inputForm" class="needs-validation" action="{{ route('categories.store') }}"
                                    method="POST" novalidate enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="parent_id" id="parent_id_input">


                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="title">Category Name</label>
                                            <input type="text" class="form-control form-control-sm" id="title"
                                                name="title" placeholder="Enter title"
                                                value="{{ !empty($post) ? $post->title : old('title') }}" required>
                                        </div>


                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom01">Icon</label>

                                            <input class="form-control" name="image" type="file"
                                                onchange="previewImage(this, 'image-preview','100px','100px')">
                                            <div class="mt-2" id="image-preview"></div>
                                            <div class="invalid-feedback">
                                                @error('image')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Status</label>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="validationCustom"
                                                    name="status" {{ old('status') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="validationCustom"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Update Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="form_box"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="card p-3">
            <div id="list_box">
                @include('categories.listbox')
            </div>
        </div>


    @endsection

    @section('scripts')
        <script>
            // $('#exampleModal').on('shown.bs.modal', function() {
            // Store data by ajax form submit
            $('#inputForm').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,

                    success: function(res) {
                        $('#inputForm')[0].reset();
                        $('#exampleModal').modal('hide');
                        $("#image-preview").empty();

                        $("#list_box").empty();
                        $("#list_box").append(res);
                    },
                    error: function(data) {
                        console.error(data.responseText);
                    }
                });
            });
            // });


            // Handle delete button click event
            $(document).on('click', '.delete-btn', function() {
                var rowId = $(this).data('row-id');

                if (confirm('Are you sure you want to delete this record?')) {
                    $.ajax({
                        url: '/categories/' + rowId,
                        type: 'DELETE',
                        data: {
                            '_token': '{{ csrf_token() }}',
                        },
                        success: function(res) {
                            toastr.success("Category has been Deleed");

                            $("#list_box").empty();
                            $("#list_box").append(res);
                        },
                        error: function(data) {
                            console.error(data.responseText);
                        }
                    });
                }
            });



            $('#exampleModal1').on('shown.bs.modal', function() {
                // Update data by ajax form submit
                $('#updateForm').submit(function(e) {
                    e.preventDefault();


                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(res) {
                            $('#updateForm')[0].reset();
                            $('#exampleModal1').modal('hide');

                            toastr.success("Category has been Updated");

                            $("#list_box").empty();
                            $("#list_box").append(res);
                        },
                        error: function(data) {
                            console.error(data.responseText);
                        }
                    });
                });
            });
        </script>


        <script>
            $(document).on('click', '.edit-btn', function(event) {
                event.preventDefault();

                $('#exampleModal1').modal('show');

                var category_id = $(this).data('row-id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
                    }
                });

                $.ajax({
                    url: "{{ route('categories.edit', ['category' => ':category_id']) }}".replace(
                        ':category_id',
                        category_id),
                    type: 'GET',
                    success: function(res) {
                        $("#form_box").empty();
                        $("#form_box").append(res);
                    },
                    error: function(data) {
                        console.error(data.responseText);
                    }
                });
            });
        </script>


        <script>
            function setParentId(parentId, parentName) {
                document.getElementById('parent_id_input').value = parentId ?? null;

                $("#add_header").empty();

                if (parentName) {
                    $("#add_header").append('Add Subcategory Under: ' + parentName);
                } else {
                    $("#add_header").append('Create Main Category');
                }

            }
        </script>



    @endsection
