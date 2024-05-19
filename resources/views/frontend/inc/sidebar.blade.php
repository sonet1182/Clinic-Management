{{-- <div class="position-static d-none d-xl-block">
    <div class="aiz-category-menu bg-white rounded-0 border-top" id="category-sidebar" style="width:270px;" id="topBar">


        <ul class="list-unstyled categories no-scrollbar mb-0 text-left">

            @foreach ($categories as $cat)
                <li class="category-nav-element border border-top-0" data-id="2">
                    <a href="category/mens-fashion.html"
                        class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                        <img class="cat-image lazyload mr-2 opacity-60"
                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                            data-src="{{ asset($cat->image) }}" width="16" alt="Mens Fashion"
                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                        <span class="cat-name has-transition">{{ $cat->title }}</span>
                    </a>

                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                        <ul class="list-unstyled categories no-scrollbar mb-0 text-left">
                            <li class="category-nav-element border border-top-0" data-id="1">
                                <a href="category/womens-fashion.html"
                                    class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                    <img class="cat-image lazyload mr-2 opacity-60"
                                        src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                        data-src="/asset/frontend/uploads/all/fYFHlc12PlTXH6CNsInseoa6vdP1bDjQCJEgNNBS.png"
                                        width="16" alt="Women&#039;s Fashion"
                                        onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    <span class="cat-name has-transition">Women&#039;s Fashion</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endforeach

            <li class="category-nav-element border border-top-0" data-id="1">
                <a href="category/womens-fashion.html"
                    class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                    <img class="cat-image lazyload mr-2 opacity-60"
                        src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                        data-src="/asset/frontend/uploads/all/fYFHlc12PlTXH6CNsInseoa6vdP1bDjQCJEgNNBS.png"
                        width="16" alt="Women&#039;s Fashion"
                        onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                    <span class="cat-name has-transition">Women&#039;s Fashion</span>
                </a>
                <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                    <div class="c-preloader text-center absolute-center">
                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                    </div>
                </div>
            </li>
        </ul>


    </div>
</div> --}}



<div class="sidebar position-static d-none d-xl-block">
    <ul class="menu">
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('category', ['slug' => $category->slug]) }}" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
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
