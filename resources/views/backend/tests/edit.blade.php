<form id="updateForm" class="needs-validation" action="{{ route('tests.update', $post->id) }}" method="POST" novalidate
    enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="form-row">

        <div class="col-md-12 mb-3">
            <label for="title">Name</label>
            <input type="text" class="form-control form-control-sm" id="title" name="name"
                placeholder="Enter title" value="{{ !empty($post) ? $post->name : old('name') }}" required>
        </div>

        <div class="col-md-12 mb-3">
            <label for="title">Fee</label>
            <input type="text" class="form-control form-control-sm" id="title" name="price"
                placeholder="Enter price" value="{{ !empty($post) ? $post->price : old('price') }}">
        </div>


    </div>

    <button class="btn btn-primary" type="submit">Submit</button>

</form>



