<form id="updateForm" class="needs-validation" action="{{ route('promocodes.update', $post->id) }}" method="POST"
    novalidate enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-row">


        <div class="col-md-12 mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control form-control-sm" id="title" name="name"
                placeholder="Enter title" value="{{ !empty($post) ? $post->name : old('name') }}" required>
        </div>

        <div class="col-md-12 mb-3">
            <label for="title">Code</label>
            <input type="text" class="form-control form-control-sm" id="code" name="code"
                placeholder="Enter Code" value="{{ !empty($post) ? $post->code : old('code') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="title">Type</label>
            <select  class="form-control form-control-sm" name="type">
                <option value="">Select One</option>
                <option value="1" {{ $post->type == 1 ? 'selected' : '' }}>Percentage</option>
                <option value="2" {{ $post->type == 2 ? 'selected' : '' }}>Fixed</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="title">amount</label>
            <input type="text" class="form-control form-control-sm" id="amount" name="amount"
                placeholder="Enter amount" value="{{ !empty($post) ? $post->amount : old('amount') }}" required>
        </div>


        <div class="col-md-12 mb-3">
            <label>Show Date and time range:</label>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="limit" id="showRangeCheckbox1"
                    {{ !empty($post) && $post->start_from ? 'checked' : '' }}>
                <label class="form-check-label" for="showRangeCheckbox">
                    Show Date and time range
                </label>
            </div>

            @if ($post->start_from)
                <div class="input-group" id="rangeInputGroup1"
                    style="{{ !empty($post) && $post->start_from ? '' : 'display: none;' }}">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="range" class="form-control float-right" id="reservationtime1"
                        value="{{ !empty($post) ? ($post->start_from ? \Carbon\Carbon::parse($post->start_from)->format('m/d/Y h:i A') : '') : '' }} - {{ !empty($post) ? ($post->end_to ? \Carbon\Carbon::parse($post->end_to)->format('m/d/Y h:i A') : '') : '' }}">
                    <div class="invalid-feedback">
                        @error('range')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            @else
                <div class="input-group" id="rangeInputGroup1"
                    style="{{ !empty($post) && $post->start_from ? '' : 'display: none;' }}">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="range" class="form-control float-right" id="reservationtime1"
                        value="">
                    <div class="invalid-feedback">
                        @error('range')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            @endif



        </div>

        {{-- <div class="col-md-12 mb-3">
            <label for="validationCustom01">Image</label>

            <input class="form-control" name="image" type="file"
                onchange="previewImage(this, 'image-preview2','100px','100px')">
            <div class="mt-2" id="image-preview2">
                <image src="{{ asset($post->image) }}" alt="" height="100px" width="100px"
                    onerror="this.src='{{ asset('demo_img.jpg') }}'; this.alt='Alternative Text';" />
            </div>
            <div class="invalid-feedback">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
        </div> --}}

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
