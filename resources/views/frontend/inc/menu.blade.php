<!-- Categoty Menus -->
<div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 z-3 d-none" id="click-category-menu">
    <div class="container">
        <div class="d-flex position-relative">
            <div class="sidebar position-static">
                <ul class="menu">
                    @foreach ($categories as $category)
                        <li>
                            <a href="" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                <img class="cat-image lazyload mr-2 opacity-60"
                                    src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                    data-src="{{ asset($category->image) }}" width="16" alt="{{ $category->title }}"
                                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                <span class="cat-name has-transition">{{ $category->title }}</span>

                                @if ($category->subcategories->count() > 0)
                                    <span class="float-right"> <i class="fa fa-angle-right text-secondary"></i> </span>
                                @endif
                            </a>
                            @if ($category->subcategories->count() > 0)
                                @include('frontend.inc.sidebar_subcat', ['subcategories' => $category->subcategories])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


