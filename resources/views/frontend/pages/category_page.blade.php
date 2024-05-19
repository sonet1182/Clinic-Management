@extends('frontend.layouts.master')


@section('content')
    <section class="mb-4 pt-4">
        <div class="container sm-px-0 pt-2">
            <form class="" id="search-form" action="#" method="GET">
                <div class="row">

                    <!-- Sidebar Filters -->
                    <div class="col-xl-3">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            <div class="collapse-sidebar c-scrollbar-light text-left">
                                <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                                    <h3 class="h6 mb-0 fw-600">Filters</h3>
                                    <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb"
                                        data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                        <i class="las la-times la-2x"></i>
                                    </button>
                                </div>

                                <!-- Categories -->
                                <div class="bg-white border mb-3">
                                    <div class="fs-16 fw-700 p-3">
                                        <a href="#collapse_1"
                                            class="dropdown-toggle filter-section text-dark d-flex align-items-center justify-content-between"
                                            data-toggle="collapse">
                                            Categories
                                        </a>
                                    </div>
                                    <div class="collapse show" id="collapse_1">
                                        <ul class="p-3 mb-0 list-unstyled">
                                            <li class="mb-3">
                                                <a class="text-reset fs-14 fw-600 hov-text-primary" href="../search.html">
                                                    <i class="las la-angle-left"></i>
                                                    All categories
                                                </a>
                                            </li>

                                            @foreach ($categories as $data)
                                                <li class="mb-3">
                                                    <a class="text-reset fs-14 fw-600 hov-text-primary"
                                                        href="mobile--computers-pmhql.html">
                                                        <i class="las la-angle-left"></i>
                                                        {{ $data->title }}
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                                <!-- Price range -->
                                <div class="bg-white border mb-3">
                                    <div class="fs-16 fw-700 p-3">
                                        Price range
                                    </div>
                                    <div class="p-3 mr-3">
                                        <div class="aiz-range-slider">
                                            <div id="input-slider-range" data-range-value-min=" 100 "
                                                data-range-value-max=" 5300 "></div>

                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                        data-range-value-low="100" id="input-slider-range-value-low"></span>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                        data-range-value-high="1200"
                                                        id="input-slider-range-value-high"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hidden Items -->
                                    <input type="hidden" name="min_price" value="">
                                    <input type="hidden" name="max_price" value="">
                                </div>

                                <!-- Attributes -->

                                <!-- Color -->
                            </div>
                        </div>
                    </div>

                    <!-- Contents -->
                    <div class="col-xl-9">

                        <!-- Breadcrumb -->
                        <ul class="breadcrumb bg-transparent py-0 px-1">
                            <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                                <a class="text-reset" href="../index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item opacity-50 hov-opacity-100">
                                <a class="text-reset" href="../search.html">All categories</a>
                            </li>

                            @foreach ($categories as $data)
                                <li class="text-dark fw-600 breadcrumb-item">
                                    <a class="text-reset"
                                        href="{{ route('category', ['slug' => $data->slug]) }}">{{ $data->title }}</a>
                                </li>
                            @endforeach


                        </ul>

                        <!-- Top Filters -->
                        <div class="text-left">
                            <div class="row gutters-5 flex-wrap align-items-center">
                                <div class="col-lg col-10">
                                    <h1 class="fs-20 fs-md-24 fw-700 text-dark">
                                        {{ $page_category->title }}
                                    </h1>
                                    <input type="hidden" name="keyword" value="">
                                </div>
                                <div class="col-2 col-lg-auto d-xl-none mb-lg-3 text-right">
                                    <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle"
                                        data-target=".aiz-filter-sidebar">
                                        <i class="la la-filter la-2x"></i>
                                    </button>
                                </div>
                                <div class="col-6 col-lg-auto mb-3 w-lg-200px mr-xl-4 mr-lg-3">
                                    <select class="form-control form-control-sm aiz-selectpicker rounded-0"
                                        data-live-search="true" name="brand" onchange="filter()">
                                        <option value="">Brands</option>
                                        <option value="other">Other</option>
                                        <option value="nokia">Nokia</option>
                                    </select>
                                </div>
                                <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                                    <select class="form-control form-control-sm aiz-selectpicker rounded-0" name="sort_by"
                                        onchange="filter()">
                                        <option value="">Sort by</option>
                                        <option value="newest">Newest</option>
                                        <option value="oldest">Oldest</option>
                                        <option value="price-asc">Price low to high</option>
                                        <option value="price-desc">Price high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Products -->
                        <div class="px-3">
                            <div
                                class="row gutters-16 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2 border-top border-left">
                                <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                    <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                        <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                            <!-- Image -->
                                            <a href="../product/i7s-tws-double-dual-wireless-41-bluetooth-earphone-with-power-case.html"
                                                class="d-block h-100">
                                                <img class="lazyload mx-auto img-fit has-transition"
                                                    src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                                    data-src="https://oibazar.com/public/uploads/all/hvpRzb8wVbeUWrQT7NUqV2xH3qZerYAtQz6Pi9iU.jpg"
                                                    alt="I7S TWS Double Dual Wireless 4.1 Bluetooth Earphone With Power Case"
                                                    title="I7S TWS Double Dual Wireless 4.1 Bluetooth Earphone With Power Case"
                                                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                            </a>
                                            <!-- Discount percentage tag -->
                                            <!-- Wholesale tag -->
                                            <!-- wishlisht & compare icons -->
                                            <div class="absolute-top-right aiz-p-hov-icon">
                                                <a href="javascript:void(0)" class="hov-svg-white"
                                                    onclick="addToWishList(10)" data-toggle="tooltip"
                                                    data-title="Add to wishlist" data-placement="left">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14.4"
                                                        viewBox="0 0 16 14.4">
                                                        <g id="_51a3dbe0e593ba390ac13cba118295e4"
                                                            data-name="51a3dbe0e593ba390ac13cba118295e4"
                                                            transform="translate(-3.05 -4.178)">
                                                            <path id="Path_32649" data-name="Path 32649"
                                                                d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z"
                                                                transform="translate(0 0)" fill="#919199" />
                                                            <path id="Path_32650" data-name="Path 32650"
                                                                d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z"
                                                                transform="translate(0 0)" fill="#919199" />
                                                        </g>
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="hov-svg-white"
                                                    onclick="addToCompare(10)" data-toggle="tooltip"
                                                    data-title="Add to compare" data-placement="left">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <path id="_9f8e765afedd47ec9e49cea83c37dfea"
                                                            data-name="9f8e765afedd47ec9e49cea83c37dfea"
                                                            d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z"
                                                            transform="translate(-2.037 -2.038)" fill="#919199" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <!-- add to cart -->
                                            <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center "
                                                href="javascript:void(0)" onclick="showLoginModal()">
                                                <span class="cart-btn-text">
                                                    Add to cart
                                                </span>
                                                <br>
                                                <span><i class="las la-2x la-shopping-cart"></i></span>
                                            </a>
                                        </div>

                                        <div class="p-2 p-md-3 text-left">
                                            <!-- Product name -->
                                            <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                <a href="../product/i7s-tws-double-dual-wireless-41-bluetooth-earphone-with-power-case.html"
                                                    class="d-block text-reset hov-text-primary"
                                                    title="I7S TWS Double Dual Wireless 4.1 Bluetooth Earphone With Power Case">I7S
                                                    TWS Double Dual Wireless 4.1 Bluetooth Earphone With Power Case</a>
                                            </h3>
                                            <div class="fs-14 d-flex justify-content-center mt-3">
                                                <!-- Previous price -->
                                                <!-- price -->
                                                <div class="">
                                                    <span class="fw-700 text-primary">৳1,200.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @foreach ($products as $prod)
                                    <div class="col border-right border-bottom has-transition hov-shadow-out z-1">
                                        <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                            <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                                <!-- Image -->
                                                <a href="../product/buds2-wired-earphones-with-mic-buds-wired-earphones.html"
                                                    class="d-block h-100">
                                                    @if (isset($prod['image']) && count($prod['image']) > 0)
                                                        <img class="lazyload mx-auto img-fit has-transition"
                                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                                            data-src="{{ asset($prod['image'][0]['url']) }}"
                                                            alt="{{ $prod['name'] }}" title="{{ $prod['name'] }}"
                                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                                    @else
                                                        <img class="lazyload mx-auto img-fit has-transition"
                                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}" />
                                                    @endif
                                                </a>
                                                <!-- Discount percentage tag -->
                                                <!-- Wholesale tag -->
                                                <!-- wishlisht & compare icons -->
                                                <div class="absolute-top-right aiz-p-hov-icon">
                                                    <a href="javascript:void(0)" class="hov-svg-white"
                                                        onclick="addToWishList(9)" data-toggle="tooltip"
                                                        data-title="Add to wishlist" data-placement="left">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="14.4" viewBox="0 0 16 14.4">
                                                            <g id="_51a3dbe0e593ba390ac13cba118295e4"
                                                                data-name="51a3dbe0e593ba390ac13cba118295e4"
                                                                transform="translate(-3.05 -4.178)">
                                                                <path id="Path_32649" data-name="Path 32649"
                                                                    d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z"
                                                                    transform="translate(0 0)" fill="#919199" />
                                                                <path id="Path_32650" data-name="Path 32650"
                                                                    d="M11.3,5.507l-.247.246L10.8,5.506A4.538,4.538,0,1,0,4.38,11.919l.247.247,6.422,6.412,6.422-6.412.247-.247A4.538,4.538,0,1,0,11.3,5.507Z"
                                                                    transform="translate(0 0)" fill="#919199" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0)" class="hov-svg-white"
                                                        onclick="addToCompare(9)" data-toggle="tooltip"
                                                        data-title="Add to compare" data-placement="left">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16">
                                                            <path id="_9f8e765afedd47ec9e49cea83c37dfea"
                                                                data-name="9f8e765afedd47ec9e49cea83c37dfea"
                                                                d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z"
                                                                transform="translate(-2.037 -2.038)" fill="#919199" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <!-- add to cart -->
                                                <a class="cart-btn absolute-bottom-left w-100 h-35px aiz-p-hov-icon text-white fs-13 fw-700 d-flex flex-column justify-content-center align-items-center "
                                                    href="javascript:void(0)" onclick="showLoginModal()">
                                                    <span class="cart-btn-text">
                                                        Add to cart
                                                    </span>
                                                    <br>
                                                    <span><i class="las la-2x la-shopping-cart"></i></span>
                                                </a>
                                            </div>

                                            <div class="p-2 p-md-3 text-left">
                                                <!-- Product name -->
                                                <h3 class="fw-400 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px text-center">
                                                    <a href="../product/buds2-wired-earphones-with-mic-buds-wired-earphones.html"
                                                        class="d-block text-reset hov-text-primary"
                                                        title="Buds2 Wired Earphones with Mic Buds Wired Earphones">
                                                        {{ $prod['name'] }}
                                                    </a>
                                                </h3>
                                                <div class="fs-14 d-flex justify-content-center mt-3">
                                                    <!-- Previous price -->
                                                    <!-- price -->
                                                    <div class="">
                                                        <span
                                                            class="fw-700 text-primary">৳{{ number_format($prod['offer_price']) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                        <div class="aiz-pagination mt-4">

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
