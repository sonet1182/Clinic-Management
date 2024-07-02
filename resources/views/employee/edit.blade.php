@extends('backend.layouts.master')

@section('title', 'Employee')

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
            <h4>Employee Edit</h4>
        </div>

        <div class="card-body">
            <form class="needs-validation" action="{{ route('employees.update',$post->id) }}" method="POST" novalidate
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
                        <label for="validationCustom01">Post</label>
                        <input type="text" class="form-control @error('post') is-invalid @enderror"
                            id="validationCustom01" name="post" placeholder="Enter post"
                            value="{{ $post->post ?? old('post') }}" required>
                        <div class="invalid-feedback">
                            @error('post')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                            id="validationCustom01" name="phone" placeholder="Enter phone"
                            value="{{ $post->phone ?? old('phone') }}" required>
                        <div class="invalid-feedback">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Image</label>

                        <input class="form-control" name="image" type="file"
                            onchange="previewImage(this, 'image-preview')">
                        <div class="mt-2" id="image-preview">
                            <image src="{{ asset($post->image) }}" alt="" height="200px" width="200px" onerror="this.src='{{ asset('demo_img.jpg') }}'; this.alt='Alternative Text';" />
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
        $(".designation_edit").change(function() {
            $("#designation").attr('readonly', !this.checked)
            if (this.checked == true) {
                $("#designation").addClass('designation_active')
                $("label.designation_fa i").addClass('fa-check').removeClass('fa-edit')
            }
            if (this.checked == false) {
                $("#designation").removeClass('designation_active')
                $("label.designation_fa i").addClass('fa-edit').removeClass('fa-check')
            }
        })
        $("#title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $(".designation_active").val(Text);
        });
    </script>

@endsection
