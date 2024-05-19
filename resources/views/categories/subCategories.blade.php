<style>
    .custom-card:hover {
        background-color: salmon;
        color: #fff;
    }
</style>


<ul>
    @foreach ($subCategories as $subCategory)
        <li class="" style="list-style: none;">
            <div style="border: 1px solid salmon;
            padding: 5px 10px;     margin: 4px 0px;"
                class="rounded custom-card">
                <span class="px-2"> <img src="{{ asset($subCategory->image) }}" height="30px" width="30px"
                    onerror="this.src='{{ asset('demo_img.jpg') }}'; this.alt='Alternative Text';"
                    class="flex-shrink-0"> {{ $subCategory->title }}</span>
                <a class="text-danger float-right link delete-btn" data-row-id="{{ $subCategory->id }}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
                <a class="text-primary float-right mx-2 link edit-btn" data-row-id="{{ $subCategory->id }}">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>

                <span class="text-success float-right mx-2 link" data-toggle="modal" data-target="#exampleModal"
                    onclick="setParentId({{ $subCategory->id }}, '{{ $subCategory->title }}')">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </span>
            </div>
            @if (count($subCategory->subCategories))
                @include('categories.subCategories', ['subCategories' => $subCategory->subCategories])
            @endif
        </li>
    @endforeach
</ul>
