@extends('backend.layouts.master')

@section('title', 'Edit Product')

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


    <span>
        <form action="{{ route('products.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf


            @if (!empty($post))
                <input type="hidden" name="id" value="{{ $post->id }}" />
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-info">
                            <h3 class="card-title panel-title float-left">
                                {{ !empty($post) ? 'Edit Product' : 'Add Product' }}
                            </h3>
                        </div>
                        <div class="card-body">


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control form-control-sm" id="title" name="name"
                                        placeholder="Enter title" value="{{ !empty($post) ? $post->name : old('name') }}"
                                        required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="slug">Slug</label>
                                    @if (!empty($post))
                                        <input class="slug_edit d-none" id="slug_edit" name="slug_edit" type="checkbox">
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

                                <div class="form-group col-md-12">
                                    <label for="post_content">Description</label>
                                    <div class="pad">
                                        <textarea xid="compose-textarea" class="form-control compose-textarea-summernote" name="detail">{{ !empty($post) ? $post->detail : old('detail') }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">Regular Price</label>
                                    <input type="text" class="form-control form-control-sm" name="regular_price"
                                        value="{{ !empty($post) ? $post->regular_price : old('regular_price') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">Offer Price</label>
                                    <input type="text" class="form-control form-control-sm" name="offer_price"
                                        value="{{ !empty($post) ? $post->offer_price : old('offer_price') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header card-info">
                            <h3 class="card-title panel-title float-left">
                                Stock
                            </h3>
                        </div>


                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="title">Unit</label>
                                    <select name="unit" class="select2"
                                        style="width: 100%; padding: 3px 0px; height: 32px;">
                                        <option value="Piece" {{ $post->unit == 'Piece' ? 'selected' : '' }}>Piece
                                        </option>
                                        <option value="Pair" {{ $post->unit == 'Pair' ? 'selected' : '' }}>Pair</option>
                                        <option value="Kg" {{ $post->unit == 'Kg' ? 'selected' : '' }}>Kg</option>
                                        <option value="Pound" {{ $post->unit == 'Pound' ? 'selected' : '' }}>Pound
                                        </option>
                                        <option value="Liter" {{ $post->unit == 'Liter' ? 'selected' : '' }}>Liter
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">Qauantity</label>
                                    <input type="text" class="form-control form-control-sm" name="quantity"
                                        value="{{ !empty($post) ? $post->quantity : old('quantity') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">Stock Alert</label>
                                    <input type="text" class="form-control form-control-sm" name="stock_alert"
                                        value="{{ !empty($post) ? $post->stock_alert : old('stock_alert') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">Buying Price</label>
                                    <input type="text" class="form-control form-control-sm" name="buying_price"
                                        value="{{ !empty($post) ? $post->buying_price : old('buying_price') }}">
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header card-info">
                            <h3 class="card-title panel-title float-left">
                                Seo Settings
                            </h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="meta_keyword">Meta Keyword</label>


                                <select name="meta_keyword[]" class="select2 form-control" multiple="multiple"
                                    data-placeholder="Select Offer type" style="width: 100%;">
                                    @if (!empty($post->meta_keyword))
                                        @foreach (json_decode($post->meta_keyword) as $option)
                                            <option value="{{ $option }}" selected>{{ $option }}</option>
                                        @endforeach
                                    @endif
                                </select>

                            </div>


                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header card-info d-flex">
                            <h3 class="card-title panel-title float-left">
                                Product Variants
                            </h3>
                            <button type="button" class="ml-auto btn btn-sm btn-primary" id="add-variant">Add
                                Variant</button>
                        </div>



                        <div class="card-body">
                            <div id="variant-section">

                                @if ($post->variants->count() > 0)
                                    @foreach ($post->variants as $variant)
                                        <div class="variant-row row">
                                            <input type="hidden" name="variants[id][]" value="{{ $variant->id }}">
                                            <div class="form-group col-md-3">
                                                <label for="size">Size</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="variants[size][]" value="{{ $variant->size }}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="color">Color</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="variants[color][]" value="{{ $variant->color }}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="variant_price">Price</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="variants[price][]" value="{{ $variant->price }}">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="variant_quantity">Quantity</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="variants[quantity][]" value="{{ $variant->quantity }}">
                                            </div>
                                            <div class="form-group col-md-1">
                                                <button type="button"
                                                    class="btn btn-danger remove-variant">Remove</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="variant-row row">
                                        <div class="form-group col-md-3">
                                            <label for="size">Size</label>
                                            <input type="text" class="form-control form-control-sm"
                                                name="variants[size][]">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="color">Color</label>
                                            <input type="text" class="form-control form-control-sm"
                                                name="variants[color][]">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="variant_price">Price</label>
                                            <input type="text" class="form-control form-control-sm"
                                                name="variants[price][]">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="variant_quantity">Quantity</label>
                                            <input type="text" class="form-control form-control-sm"
                                                name="variants[quantity][]">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <button type="button" class="btn btn-danger remove-variant">Remove</button>
                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>







                </div>



                <div class="col-md-4">


                    <div class="card">
                        <div class="card-header card-info">
                            <h3 class="card-title panel-title">Product Gallery</h3>
                            <h3 class="card-title panel-title float-right">
                                <a type="button" data-toggle="modal" data-target="#gallery" class="text-primary">Insert
                                    Image</a>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="galleryimg row mx-auto">
                                <!-- product images and hidden fields -->
                                @if (!empty($post) && $post->galleryimg_id)
                                    @foreach (json_decode($post->galleryimg_id) as $key => $photo)
                                        <?php
                                        $pimg = \App\Models\Media::where('id', $photo)->first();
                                        ?>
                                        @if (!empty($pimg->id))
                                            <div class="product-img product-images col-md-4 col-6 mx-0">
                                                <a href="{{ asset($pimg->file_directory . $pimg->filename) }}"
                                                    data-lightbox="product-gallery" data-title="">
                                                    <img class="img-fluid"
                                                        src="{{ asset($pimg->file_directory . $pimg->filename) }}">
                                                </a>
                                                <input type="hidden" name="galleryimg_id[]"
                                                    value="{{ $pimg->id }}">
                                                <a href="javascript:void()" class="remove"><span
                                                        class="fa fa-trash"></span></a>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>




                    {{-- <div class="card">
                        <div class="card-header card-info">
                            <h3 class="card-title panel-title float-left">
                                Select Type
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Add Types</label>
                                <select name="type[]" class="select2" multiple="multiple"
                                    data-placeholder="Select type" style="width: 100%;">

                                    @foreach (['Special', 'Hot', 'Limited', 'Winter', 'Summer', 'Eid', 'Puja'] as $option)
                                        <option value="{{ $option }}"
                                            {{ in_array($option, $types ?? []) ? 'selected' : '' }}>{{ $option }}
                                            Offer</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> --}}


                    <div class="card">
                        <div class="card-header card-info">
                            <h3 class="card-title panel-title float-left">
                                Select Type
                            </h3>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Add Brand</label>
                                <select name="brand" class="select2 form-control" multiple="single"
                                    data-placeholder="Select Brand">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $brand->id == $post->brand ? 'selected' : '' }}>{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Add Offer Types</label>
                                <select name="type[]" class="select2 form-control" multiple="multiple"
                                    data-placeholder="Select Offer type" style="width: 100%;">
                                    @foreach ($offers as $offer)
                                        <option value="{{ $offer->id }}"
                                            {{ in_array($offer->id, $types ?? []) ? 'selected' : '' }}>{{ $offer->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>




                    <div class="card">
                        <div class="card-header card-info">
                            <h3 class="card-title panel-title float-left">
                                Select Category
                            </h3>
                        </div>

                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($categories as $category)
                                    <li class="list-group-item">
                                        <h5>
                                            <input type="radio" name="category" value="{{ $category->id }}"
                                                {{ !empty($post) && $post->category == $category->id ? 'checked' : '' }} />
                                            {{ $category->title }}
                                        </h5>
                                        @if (count($category->subCategories))
                                            <ul class="list-group mt-2">
                                                @include('categories.subCategories_select', [
                                                    'subCategories' => $category->subCategories,
                                                ])
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>




            </div>

            <div class="row">
                <button type="submit" class="btn btn-success px-5 mb-4 ml-auto">Submit</button>
            </div>

        </form>
    </span>


    <?php echo \App\CustomClass\MediaManager::mediaScript(); ?>
    <?php echo \App\CustomClass\MediaManager::media('multiple', 'gallery', 'galleryimg'); ?>
    <?php echo \App\CustomClass\MediaManager::media('single', 'featured', 'featuredimg'); ?>


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
        $(document).ready(function() {
            $('.select2').select2({
                tags: true
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            // Add variant
            $("#add-variant").on("click", function() {
                var clonedRow = $(".variant-row:first").clone();
                clonedRow.find("input").val(""); // Clear input values
                $("#variant-section").append(clonedRow);
            });

            // Remove variant
            $(document).on("click", ".remove-variant", function() {

                $(this).closest(".variant-row").remove();

                // if ($(".variant-row").length > 1) {
                //     $(this).closest(".variant-row").remove();
                // } else {
                //     alert("At least one variant is required.");
                // }
            });
        });
    </script>



@endsection
