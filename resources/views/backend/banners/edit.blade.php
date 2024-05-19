<form id="updateForm" class="needs-validation" action="{{ route('banners.update', $post->id) }}" method="POST" novalidate
    enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="form-row">

        <div class="col-md-12 mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control form-control-sm" id="title" name="name"
                placeholder="Enter title" value="{{ !empty($post) ? $post->name : old('name') }}" required>
        </div>

        <div class="col-md-12 mb-3">
            <label for="title">Link</label>
            <input type="text" class="form-control form-control-sm" id="title" name="link"
                placeholder="Enter Link" value="{{ !empty($post) ? $post->link : old('link') }}">
        </div>


        <div class="col-md-12 mb-3">
            <label for="validationCustom01">Image</label>

            <input class="form-control" name="image" type="file"
                onchange="previewImage(this, 'image-preview2','100px','300px')">
            <div class="mt-2" id="image-preview2">
                <image src="{{ asset($post->image) }}" alt="" height="100px" width="300px"
                    onerror="this.src='{{ asset('demo_img.jpg') }}'; this.alt='Alternative Text';" />
            </div>
            <div class="invalid-feedback">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label for="validationCustom02">Status</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="validationCustom02" name="status" {{ $post->status ? 'checked' : '' }}>
                <label class="custom-control-label" for="validationCustom02"></label>
            </div>
        </div>


    </div>

    <button class="btn btn-primary" type="submit">Submit</button>

</form>



