<div class="row">
    <ul class="list-group col-md-6 mx-auto">
        @foreach ($categories as $category)
            <li class="list-group-item">
                <h5> <img src="{{ asset($category->image) }}" height="30px" width="30px"
                        onerror="this.src='{{ asset('demo_img.jpg') }}'; this.alt='Alternative Text';"
                        class="flex-shrink-0">
                    {{ $category->title }}

                    <a class="btn btn-sm btn-danger float-right delete-btn" data-row-id="{{ $category->id }}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>

                    <a class="btn btn-sm btn-primary float-right mx-1 edit-btn" data-row-id="{{ $category->id }}">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>

                    <button class="btn btn-sm btn-success float-right mx-1" data-toggle="modal"
                        data-target="#exampleModal"
                        onclick="setParentId({{ $category->id }}, '{{ $category->title }}')">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </h5>
                @if (count($category->subCategories))
                    <ul class="list-group mt-2">
                        @include('categories.subCategories', [
                            'subCategories' => $category->subCategories,
                        ])
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>
