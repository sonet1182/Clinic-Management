@extends('backend.layouts.master')

@section('title', 'Media Management')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="uploadform" action="<?php echo route('media_store_noajax'); ?>">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2 text-center">
                                <img id="image_preview_container" src="" style="max-height: 150px;">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group alert alert-primary">
                                    <div class="form-group file-area">
                                        <label for="images">Upload Images <span></span></label>
                                        <input type="file" name="image[]" id="images" required="required"
                                            multiple="multiple" />
                                        <div class="file-dummy">
                                            <div class="success">Great, your files are selected. Keep on.</div>
                                            <div class="default">Please select some files</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-2">
                                <button id="submitButton" type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <div id="data_box">

                        @include('backend.media.data_box')

                        {{-- <div class="row">
                            @foreach ($media as $item)
                                <div class="product-images col-md-2 col-3 id-{{ $item->id }}"
                                    style="background: #f2f2f2;">
                                    <a href="{{ asset('/public/uploads/images/') . '/' . $item->filename }}"
                                        data-toggle="lightbox" data-title="{{ $item->filename }}" data-gallery="gallery">
                                        @if ($item->file_extension == 'pdf')
                                            <div class="document danger">
                                                <div class="document-body">
                                                    <i class="fa fa-file-pdf text-danger"></i>
                                                </div>
                                            </div>
                                            <span class="p-3">
                                                {{ $item->filename }}
                                            </span>
                                        @else
                                            <img src="{{ asset('/public/uploads/images/') . '/' . $item->filename }}"
                                                class="media img-fluid mb-2" alt="{{ $item->filename }}" />
                                        @endif
                                        <a href="#" class="remove" data-media-id="{{ $item->id }}"><span
                                                class="fa fa-trash"></span></a>
                                    </a>
                                </div>
                            @endforeach
                        </div> --}}

                    </div>


                </div>
                <div class="card-footer">
                    {{ $media->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>


    <?php echo \App\CustomClass\MediaManager::mediaScript(); ?>
@endsection

@section('scripts')
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{ asset('asset/backend/custom/ekko-lightbox/ekko-lightbox.css') }}">
    <script src="{{ asset('asset/backend/custom/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
    <style>
        img.media {
            width: 200px;
            height: 200px;
            margin: 0 auto;
            object-fit: cover;
        }
    </style>


    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true,
                    size: "lg",
                });
            });
        });
    </script>

    <script>
        function sakib(mediaId) {

            if (confirm('Are you sure want to delete?')) {
                $.ajax({
                    url: "{{ route('media_delete_ajax') }}",
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                        media_id: mediaId
                    },
                    success: function(response) {
                        $("#data_box").empty();
                        $("#data_box").append(response);
                        // $(this).closest('.id-'.mediaId).remove();
                        toastr.warning("Data Removed");
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        toastr.error(error);
                    }
                });
            }
        };
    </script>
@endsection
