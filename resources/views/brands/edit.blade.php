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
            <h4>Brand Edit</h4>
        </div>

        <div class="card-body">
            <form class="needs-validation" action="{{ route('brands.update',$post->id) }}" method="POST" novalidate
                enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-row">

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="validationCustom01" name="name" placeholder="Enter Name"
                            value="{{ $post->name ?? old('name') }}" required>
                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror"
                            id="validationCustom01" name="slug" placeholder="Enter Slug"
                            value="{{ $post->slug ?? old('slug') }}" required>
                        <div class="invalid-feedback">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Logo</label>

                        <input class="form-control" name="image" type="file"
                            onchange="previewImage(this, 'image-preview')">
                        <div class="mt-2" id="image-preview">
                            <image src="{{ asset($post->logo) }}" alt="" height="200px" width="200px" onerror="this.src='{{ asset('demo_img.jpg') }}'; this.alt='Alternative Text';" />
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

@endsection
