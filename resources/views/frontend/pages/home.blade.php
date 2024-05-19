@extends('frontend.layouts.master')


@section('content')

    <!-- Sliders & Today's deal -->
    <div class="home-banner-area mb-3" style="">
        <div class="container">
            <div class="d-flex flex-wrap position-relative">

                @include('frontend.inc.sidebar')



                <!-- Sliders -->
                <div class="home-slider">
                    <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-autoplay="true">


                        @foreach ($banners as $banner)
                            <div class="carousel-box">
                                <a href="{{ $banner->link }}">
                                    <img class="d-block mw-100 img-fit overflow-hidden h-sm-auto h-md-320px h-lg-460px overflow-hidden"
                                        src="{{ asset($banner->image) }}" alt="OiBazar.com promo"
                                        onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}';">
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>



        </div>
    </div>


    <!-- Today's deal -->
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <!-- Banner -->
            <div class="overflow-hidden d-none d-md-block">
                <img src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                    data-src="/asset/frontend/uploads/all/sITY8LbdxGg2n0P9q2E8fx2ipPw0SgLnX0a0wSML.png"
                    alt="OiBazar.com promo" class="lazyload img-fit h-100 has-transition"
                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}';">
            </div>
            <div class="overflow-hidden d-md-none">
                <img src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                    data-src="/asset/frontend/uploads/all/sITY8LbdxGg2n0P9q2E8fx2ipPw0SgLnX0a0wSML.png"
                    alt="OiBazar.com promo" class="lazyload img-fit h-100 has-transition"
                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}';">
            </div>
            <!-- Products -->
            <div class="" style="background-color: #3d4666">
                <div class="text-right px-4 px-xl-5 pt-4 pt-md-3">
                    <a href="todays-deal.html" class="fs-12 fw-700 text-white has-transition hov-text-warning">View
                        All</a>
                </div>
                <div class="c-scrollbar-light overflow-hidden pl-5 pr-5 pb-3 pt-2 pb-md-5 pt-md-3">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <div class="todays-deal aiz-carousel" data-items="7" data-xxl-items="7" data-xl-items="6"
                            data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-arrows="true"
                            data-dots="false" data-autoplay="true" data-infinite="true">
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/printed-kurti-for-women-18914k.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="Printed Kurti for Women- 18914K">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/QeBzZbwWSJtX6dEOWPa1O5lhYU8y1kpqWsy8gPwj.jpg"
                                            alt="Printed Kurti for Women- 18914K"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳1,250.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/high-quality-fabric-heavy-embroidery-work-semi-stitched-georgette-three-piece-shalwar-kameez.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="High Quality Fabric Heavy Embroidery Work Semi stitched Georgette Three Piece Shalwar Kameez">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/SXQUC1qSxN7ZCfEtcfdLhZd5R0IEZ7DtCHGAdu0Q.jpg"
                                            alt="High Quality Fabric Heavy Embroidery Work Semi stitched Georgette Three Piece Shalwar Kameez"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳2,000.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/gorgeous-unstitched-cotton-screen-printed-salwar-kameez-for-women.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="Gorgeous Unstitched Cotton Screen Printed Salwar Kameez for Women">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/31lfD2ltEARYjMDSsEieoPnpyQv2usITUKwhXusu.webp"
                                            alt="Gorgeous Unstitched Cotton Screen Printed Salwar Kameez for Women"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳600.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/unstitched-georgette-embroidery-work-designer-salwar-kameez.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="Unstitched Georgette Embroidery Work Designer Salwar Kameez">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/uPOWUHOXXOghPjvwHZzgHDTtqf5g6SnFyxCKNIaD.jpg"
                                            alt="Unstitched Georgette Embroidery Work Designer Salwar Kameez"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳5,300.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/womens-premium-long-tunic-serene.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="Womens Premium Long tunic - Serene">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/Q9NKl4m1ZEndQk2tDsMlHeeq1yHGy7pP634PBv1a.jpg"
                                            alt="Womens Premium Long tunic - Serene"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳2,500.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/womens-premium-long-tunic-grace.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="Womens Premium Long Tunic - Grace">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/IE0UYX9DoatfbPnkaTFu0qhgEiqy91TMMJC3Tj8U.jpg"
                                            alt="Womens Premium Long Tunic - Grace"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳3,000.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/k35-dual-wireless-microphone.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="K35 Dual Wireless Microphone">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/eTXYyTCCVk72DmXyJUjJjCfJNKCDnRblJH8KjOZs.jpg"
                                            alt="K35 Dual Wireless Microphone"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳2,550.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/portable-pocket-usb-rechargeable-keychain-torch-lantern-3-lighting-modes-work-light-camping-cob-led-flash-light-1-set.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="Portable Pocket USB Rechargeable Keychain Torch Lantern 3 Lighting Modes Work Light Camping COB LED Flash Light 1 Set">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/W17JIlcYaaBzUqcnzP8e8FIPUFre4mAhy5SSRk1R.jpg"
                                            alt="Portable Pocket USB Rechargeable Keychain Torch Lantern 3 Lighting Modes Work Light Camping COB LED Flash Light 1 Set"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳800.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-box h-100 px-3 px-lg-0">
                                <a href="product/buds2-wired-earphones-with-mic-buds-wired-earphones.html"
                                    class="h-100 overflow-hidden hov-scale-img mx-auto"
                                    title="Buds2 Wired Earphones with Mic Buds Wired Earphones">
                                    <!-- Image -->
                                    <div class="img h-80px w-80px rounded-content overflow-hidden mx-auto">
                                        <img class="lazyload img-fit m-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/UbACEsP1ZZzHCKKOGlcIWPuq8x6ZobqqyJzR0sHn.jpg"
                                            alt="Buds2 Wired Earphones with Mic Buds Wired Earphones"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <!-- Price -->
                                    <div class="fs-14 mt-3 text-center">
                                        <span class="d-block text-white fw-700">৳100.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <div id="section_featured"></div>

    <!-- Banner section 1 -->
    <div class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <div class="w-100">
                <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15"
                    data-items="3" data-xxl-items="3" data-xl-items="3" data-lg-items="2" data-md-items="2"
                    data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">




                    @foreach ($offers as $data)
                        <div class="carousel-box overflow-hidden hov-scale-img">
                            <a href="#" class="d-block text-reset overflow-hidden">
                                <img src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                                    data-src="{{ asset($data->image) }}" alt="OiBazar.com promo"
                                    class="img-fluid lazyload w-100 has-transition"
                                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}';">
                            </a>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories -->
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <div class="bg-white">
                <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                        <span class="">Featured Categories</span>
                    </h3>
                    <div class="d-flex">
                        <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                            href="categories.html">View All Categories</a>
                    </div>
                </div>
            </div>
            <!-- Categories -->
            <div class="bg-white px-sm-3">
                <div class="aiz-carousel sm-gutters-17" data-items="8" data-xxl-items="8" data-xl-items="6"
                    data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-arrows="true"
                    data-dots="false" data-autoplay="true" data-infinite="true">

                    @foreach ($main_categories as $data)
                        <div
                            class="carousel-box position-relative text-center has-transition hov-scale-img hov-animate-outline border-right border-top border-bottom  border-left ">
                            <a href="category/womens-fashion.html" class="d-block">
                                <img src="/asset/frontend/uploads/all/dq1iFfnteA70JFfvnnfulzU7FQxZSIrCoJhzVcYI.png"
                                    class="lazyload h-130px mx-auto has-transition p-2 p-sm-4 mw-100"
                                    alt="Women&#039;s Fashion"
                                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                            </a>
                            <h6 class="text-dark mb-3 h-40px text-truncate-2">
                                <a class="text-reset fw-700 fs-14 hov-text-primary" href="category/womens-fashion.html"
                                    title="Women&#039;s Fashion">{{ $data->title }}</a>
                            </h6>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section 2 -->
    <div class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="0"
                data-xxl-items="0" data-xl-items="0" data-lg-items="1" data-md-items="1" data-sm-items="1"
                data-xs-items="1" data-arrows="true" data-dots="false">
            </div>
        </div>
    </div>

    <!-- Best Selling  -->
    <div id="section_best_selling"></div>

    <!-- New Products -->
    <div id="section_newest">
        <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                <!-- Top Section -->
                <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                    <!-- Title -->
                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                        <span class="">New Products</span>
                    </h3>
                    <!-- Links -->
                    <div class="d-flex">
                        <a type="button" class="arrow-prev slide-arrow link-disable text-secondary mr-2"
                            onclick="clickToSlide('slick-prev','section_newest')"><i
                                class="las la-angle-left fs-20 fw-600"></i></a>
                        <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                            href="searche005.html?sort_by=newest">View All</a>
                        <a type="button" class="arrow-next slide-arrow text-secondary ml-2"
                            onclick="clickToSlide('slick-next','section_newest')"><i
                                class="las la-angle-right fs-20 fw-600"></i></a>
                    </div>
                </div>
                <!-- Products Section -->
                <div class="px-sm-3">
                    <div class="aiz-carousel arrow-none sm-gutters-16" data-items="6" data-xl-items="5"
                        data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'
                        data-infinite='false'>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  border-left  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/silicone-heel-pad-socks-for-pain-relief-for-men-and-women-free-size.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/Ae4yxImMSkuS5xawBF4BPJJyfq56G6DykkQB7avO.jpg"
                                            alt="Silicone Heel Pad Socks for Pain Relief for Men and Women (Free Size)"
                                            title="Silicone Heel Pad Socks for Pain Relief for Men and Women (Free Size)"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(14)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(14)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/silicone-heel-pad-socks-for-pain-relief-for-men-and-women-free-size.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Silicone Heel Pad Socks for Pain Relief for Men and Women (Free Size)">Silicone
                                            Heel Pad Socks for Pain Relief for Men and Women (Free Size)</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳400.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/fan-led-light-4-fan-blade-foldable-led-bulb-heavy-duty-28w-wing-size-2-inch-1pic.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/GfDt9o5Z9T2CsX5WJNPQEoAkDwW0Hd9aiLBSzwlp.jpg"
                                            alt="fan led light 4 Fan Blade Foldable LED Bulb Heavy Duty 28w -(Wing Size-2 inch) 1pic"
                                            title="fan led light 4 Fan Blade Foldable LED Bulb Heavy Duty 28w -(Wing Size-2 inch) 1pic"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(13)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(13)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/fan-led-light-4-fan-blade-foldable-led-bulb-heavy-duty-28w-wing-size-2-inch-1pic.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="fan led light 4 Fan Blade Foldable LED Bulb Heavy Duty 28w -(Wing Size-2 inch) 1pic">fan
                                            led light 4 Fan Blade Foldable LED Bulb Heavy Duty 28w -(Wing Size-2
                                            inch) 1pic</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳800.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/wall-phone-holder-for-phone-mounted-storage-box-remote-control-storage-organizer-case-for-air-conditioner-tv-mobile-stand-rack.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/RaYbn4isyn85S8u1rV0w7Txx8r5IoahU7wExbmp3.jpg"
                                            alt="Wall Phone Holder For Phone Mounted Storage Box Remote Control Storage Organizer Case For Air Conditioner TV Mobile Stand Rack"
                                            title="Wall Phone Holder For Phone Mounted Storage Box Remote Control Storage Organizer Case For Air Conditioner TV Mobile Stand Rack"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(12)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(12)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/wall-phone-holder-for-phone-mounted-storage-box-remote-control-storage-organizer-case-for-air-conditioner-tv-mobile-stand-rack.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Wall Phone Holder For Phone Mounted Storage Box Remote Control Storage Organizer Case For Air Conditioner TV Mobile Stand Rack">Wall
                                            Phone Holder For Phone Mounted Storage Box Remote Control Storage
                                            Organizer Case For Air Conditioner TV Mobile Stand Rack</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳300.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/10-stick-cigarete-box-case-cigarete-holder-automatic-storage-box-metal.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/bT0sAh7wDqA5f2V75FGDH4jURKXZw9OqDkoSaOpO.jpg"
                                            alt="10 stick Cigarete Box Case Cigarete Holder Automatic Storage Box Metal"
                                            title="10 stick Cigarete Box Case Cigarete Holder Automatic Storage Box Metal"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(11)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(11)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/10-stick-cigarete-box-case-cigarete-holder-automatic-storage-box-metal.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="10 stick Cigarete Box Case Cigarete Holder Automatic Storage Box Metal">10
                                            stick Cigarete Box Case Cigarete Holder Automatic Storage Box Metal</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳1,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/i7s-tws-double-dual-wireless-41-bluetooth-earphone-with-power-case.html"
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(10)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(10)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/i7s-tws-double-dual-wireless-41-bluetooth-earphone-with-power-case.html"
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
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/buds2-wired-earphones-with-mic-buds-wired-earphones.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/UbACEsP1ZZzHCKKOGlcIWPuq8x6ZobqqyJzR0sHn.jpg"
                                            alt="Buds2 Wired Earphones with Mic Buds Wired Earphones"
                                            title="Buds2 Wired Earphones with Mic Buds Wired Earphones"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(9)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(9)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/buds2-wired-earphones-with-mic-buds-wired-earphones.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Buds2 Wired Earphones with Mic Buds Wired Earphones">Buds2
                                            Wired
                                            Earphones with Mic Buds Wired Earphones</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/portable-pocket-usb-rechargeable-keychain-torch-lantern-3-lighting-modes-work-light-camping-cob-led-flash-light-1-set.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/W17JIlcYaaBzUqcnzP8e8FIPUFre4mAhy5SSRk1R.jpg"
                                            alt="Portable Pocket USB Rechargeable Keychain Torch Lantern 3 Lighting Modes Work Light Camping COB LED Flash Light 1 Set"
                                            title="Portable Pocket USB Rechargeable Keychain Torch Lantern 3 Lighting Modes Work Light Camping COB LED Flash Light 1 Set"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(8)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(8)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/portable-pocket-usb-rechargeable-keychain-torch-lantern-3-lighting-modes-work-light-camping-cob-led-flash-light-1-set.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Portable Pocket USB Rechargeable Keychain Torch Lantern 3 Lighting Modes Work Light Camping COB LED Flash Light 1 Set">Portable
                                            Pocket USB Rechargeable Keychain Torch Lantern 3 Lighting Modes Work
                                            Light Camping COB LED Flash Light 1 Set</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳800.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/k35-dual-wireless-microphone.html" class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/eTXYyTCCVk72DmXyJUjJjCfJNKCDnRblJH8KjOZs.jpg"
                                            alt="K35 Dual Wireless Microphone" title="K35 Dual Wireless Microphone"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(7)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(7)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/k35-dual-wireless-microphone.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="K35 Dual Wireless Microphone">K35 Dual Wireless Microphone</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳2,550.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/womens-premium-long-tunic-grace.html" class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/IE0UYX9DoatfbPnkaTFu0qhgEiqy91TMMJC3Tj8U.jpg"
                                            alt="Womens Premium Long Tunic - Grace"
                                            title="Womens Premium Long Tunic - Grace"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(6)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(6)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/womens-premium-long-tunic-grace.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Womens Premium Long Tunic - Grace">Womens Premium Long Tunic -
                                            Grace</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳3,000.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/womens-premium-long-tunic-serene.html" class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/Q9NKl4m1ZEndQk2tDsMlHeeq1yHGy7pP634PBv1a.jpg"
                                            alt="Womens Premium Long tunic - Serene"
                                            title="Womens Premium Long tunic - Serene"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(5)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(5)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/womens-premium-long-tunic-serene.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Womens Premium Long tunic - Serene">Womens Premium Long tunic -
                                            Serene</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳2,500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/unstitched-georgette-embroidery-work-designer-salwar-kameez.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/uPOWUHOXXOghPjvwHZzgHDTtqf5g6SnFyxCKNIaD.jpg"
                                            alt="Unstitched Georgette Embroidery Work Designer Salwar Kameez"
                                            title="Unstitched Georgette Embroidery Work Designer Salwar Kameez"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(4)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(4)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/unstitched-georgette-embroidery-work-designer-salwar-kameez.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Unstitched Georgette Embroidery Work Designer Salwar Kameez">Unstitched
                                            Georgette Embroidery Work Designer Salwar Kameez</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳5,300.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="carousel-box px-3 position-relative has-transition border-right border-top border-bottom  hov-animate-outline">
                            <div class="aiz-card-box h-auto bg-white py-3 hov-scale-img">
                                <div class="position-relative h-140px h-md-200px img-fit overflow-hidden">
                                    <!-- Image -->
                                    <a href="product/gorgeous-unstitched-cotton-screen-printed-salwar-kameez-for-women.html"
                                        class="d-block h-100">
                                        <img class="lazyload mx-auto img-fit has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="https://oibazar.com/public/uploads/all/31lfD2ltEARYjMDSsEieoPnpyQv2usITUKwhXusu.webp"
                                            alt="Gorgeous Unstitched Cotton Screen Printed Salwar Kameez for Women"
                                            title="Gorgeous Unstitched Cotton Screen Printed Salwar Kameez for Women"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                    <!-- Discount percentage tag -->
                                    <!-- Wholesale tag -->
                                    <!-- wishlisht & compare icons -->
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToWishList(3)"
                                            data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
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
                                        <a href="javascript:void(0)" class="hov-svg-white" onclick="addToCompare(3)"
                                            data-toggle="tooltip" data-title="Add to compare" data-placement="left">
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
                                        <a href="product/gorgeous-unstitched-cotton-screen-printed-salwar-kameez-for-women.html"
                                            class="d-block text-reset hov-text-primary"
                                            title="Gorgeous Unstitched Cotton Screen Printed Salwar Kameez for Women">Gorgeous
                                            Unstitched Cotton Screen Printed Salwar Kameez for Women</a>
                                    </h3>
                                    <div class="fs-14 d-flex justify-content-center mt-3">
                                        <!-- Previous price -->
                                        <!-- price -->
                                        <div class="">
                                            <span class="fw-700 text-primary">৳600.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Banner Section 3 -->

    <!-- Auction Product -->
    <div id="auction_products"></div>

    <!-- Cupon -->
    <div class="mb-2 mb-md-3 mt-2 mt-md-3" style="background-color: #475587">
        <div class="container">
            <div class="row py-5">
                <div class="col-xl-8 text-center text-xl-left">
                    <div class="d-lg-flex">
                        <div class="mb-3 mb-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="109.602" height="93.34" viewBox="0 0 109.602 93.34">
                                <defs>
                                    <clipPath id="clip-pathcup">
                                        <path id="Union_10" data-name="Union 10" d="M12263,13778v-15h64v-41h12v56Z"
                                            transform="translate(-11966 -8442.865)" fill="none" stroke="#fff"
                                            stroke-width="2" />
                                    </clipPath>
                                </defs>
                                <g id="Group_24326" data-name="Group 24326" transform="translate(-274.201 -5254.611)">
                                    <g id="Mask_Group_23" data-name="Mask Group 23"
                                        transform="translate(-3652.459 1785.452) rotate(-45)"
                                        clip-path="url(#clip-pathcup)">
                                        <g id="Group_24322" data-name="Group 24322" transform="translate(207 18.136)">
                                            <g id="Subtraction_167" data-name="Subtraction 167"
                                                transform="translate(-12177 -8458)" fill="none">
                                                <path
                                                    d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z"
                                                    stroke="none" />
                                                <path
                                                    d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z"
                                                    stroke="none" fill="#fff" />
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Group_24321" data-name="Group 24321"
                                        transform="translate(-3514.477 1653.317) rotate(-45)">
                                        <g id="Subtraction_167-2" data-name="Subtraction 167"
                                            transform="translate(-12177 -8458)" fill="none">
                                            <path
                                                d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z"
                                                stroke="none" />
                                            <path
                                                d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z"
                                                stroke="none" fill="#fff" />
                                        </g>
                                        <g id="Group_24325" data-name="Group 24325">
                                            <rect id="Rectangle_18578" data-name="Rectangle 18578" width="8"
                                                height="2" transform="translate(120 5287)" fill="#fff" />
                                            <rect id="Rectangle_18579" data-name="Rectangle 18579" width="8"
                                                height="2" transform="translate(132 5287)" fill="#fff" />
                                            <rect id="Rectangle_18581" data-name="Rectangle 18581" width="8"
                                                height="2" transform="translate(144 5287)" fill="#fff" />
                                            <rect id="Rectangle_18580" data-name="Rectangle 18580" width="8"
                                                height="2" transform="translate(108 5287)" fill="#fff" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="ml-lg-3">
                            <h5 class="fs-36 fw-400 text-white mb-3">Save Upto 50% with our Coupons</h5>
                            <h5 class="fs-20 fw-400 text-gray">Get huge discount in products or save money by
                                using
                                coupons while checkout</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 text-center text-xl-right mt-4">
                    <a href="coupons.html"
                        class="btn text-white hov-bg-white hov-text-dark border border-width-2 fs-16 px-4"
                        style="border-radius: 28px;background: rgba(255, 255, 255, 0.2);box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.16);">View
                        All Coupons</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Category wise Products -->
    <div id="section_home_categories" class="mb-2 mb-md-3 mt-2 mt-md-3">
    </div>

    <!-- Classified Product -->
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <!-- Top Section -->
            <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="">Classified Ads</span>
                </h3>
                <!-- Links -->
                <div class="d-flex">
                    <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                        href="customer-products.html">View All Products</a>
                </div>
            </div>
            <!-- Banner -->
            <div class="mb-3 overflow-hidden hov-scale-img d-none d-md-block">
                <img src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                    data-src="/asset/frontend/uploads/all/RwF2ajM0Y9HroKso4uiknVf5D93FJBaS9RSj1uSJ.png"
                    alt="OiBazar.com promo" class="lazyload img-fit h-100 has-transition"
                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}';">
            </div>
            <div class="mb-3 overflow-hidden hov-scale-img d-md-none">
                <img src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                    data-src="/asset/frontend/uploads/all/RwF2ajM0Y9HroKso4uiknVf5D93FJBaS9RSj1uSJ.png"
                    alt="OiBazar.com promo" class="lazyload img-fit h-100 has-transition"
                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}';">
            </div>
            <!-- Products Section -->
            <div class="bg-white">
                <div class="row no-gutters border-top border-left">
                    <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                        <div class="aiz-card-box p-2 has-transition bg-white">
                            <div class="row hov-scale-img">
                                <div class="col-4 col-md-5 mb-3 mb-md-0">
                                    <a href="customer-product/epaper-php-script--multi-design-template-kjcxt.html"
                                        class="d-block overflow-hidden h-auto h-md-150px text-center">
                                        <img class="img-fluid lazyload mx-auto has-transition"
                                            src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                            data-src="/asset/frontend/uploads/all/qabwKhp0JW0w2Iq57mXW8RN2jkAvACd4laHB9AYe.png"
                                            alt="ePaper PHP Script – Multi Design Template"
                                            onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                                    </a>
                                </div>
                                <div class="col">
                                    <h3
                                        class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                        <a href="customer-product/epaper-php-script--multi-design-template-kjcxt.html"
                                            class="d-block text-reset hov-text-primary">ePaper PHP Script – Multi
                                            Design Template</a>
                                    </h3>
                                    <div class="fs-14 mb-3">
                                        <span class="text-secondary">Kalam Khan</span><br>
                                        <span class="fw-700 text-primary">৳3,500.00</span>
                                    </div>
                                    <span class="badge badge-inline badge-soft-info fs-13 fw-700 p-3 text-info"
                                        style="border-radius: 20px;">new</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Sellers -->
    <section class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            <!-- Top Section -->
            <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                    <span class="pb-3">Top Sellers</span>
                </h3>
                <!-- Links -->
                <div class="d-flex">
                    <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary"
                        href="https://oibazar.com/sellers">View All Sellers</a>
                </div>
            </div>
            <!-- Sellers Section -->
            <div class="aiz-carousel arrow-x-0 arrow-inactive-none" data-items="5" data-xxl-items="5"
                data-xl-items="4" data-lg-items="3.4" data-md-items="2.5" data-sm-items="2" data-xs-items="1.4"
                data-arrows="true" data-dots="false">
                <div
                    class="carousel-box h-100 position-relative text-center border-right border-top border-bottom  border-left  has-transition hov-animate-outline">
                    <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                        <!-- Shop logo & Verification Status -->
                        <div class="position-relative mx-auto size-100px size-md-120px">
                            <a href="https://oibazar.com/shop/Jachai-Mall-1"
                                class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img"
                                tabindex="0"
                                style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                                <img src="https://oibazar.com/public/assets/img/placeholder-rect.jpg"
                                    data-src="https://oibazar.com/public/uploads/all/ec14IRcmsKA7rAfvPQgA1xTT4ettpbISmcYph6ZT.jpg"
                                    alt="Jachai Mall" class="img-fit lazyload has-transition"
                                    onerror="this.onerror=null;this.src='https://oibazar.com/public/assets/img/placeholder-rect.jpg';">
                            </a>
                            <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24"
                                    viewBox="0 0 24.001 24">
                                    <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                        <circle id="Ellipse_637" data-name="Ellipse 637" cx="12"
                                            cy="12" r="12" transform="translate(480 345)" fill="#fff" />
                                        <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                            <path id="Union_5" data-name="Union 5"
                                                d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z"
                                                transform="translate(0 0)" fill="#3490f3" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <!-- Shop name -->
                        <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                            <a href="https://oibazar.com/shop/Jachai-Mall-1" class="text-reset hov-text-primary"
                                tabindex="0">Jachai Mall</a>
                        </h2>
                        <!-- Shop Rating -->
                        <div class="rating rating-mr-1 text-dark mb-3">
                            <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i
                                class = 'las la-star'></i><i class = 'las la-star'></i>
                            <span class="opacity-60 fs-14">(0
                                reviews)</span>
                        </div>
                        <!-- Visit Button -->
                        <a href="https://oibazar.com/shop/Jachai-Mall-1" class="btn-visit">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Visit Store</span>
                        </a>
                    </div>
                </div>
                <div
                    class="carousel-box h-100 position-relative text-center border-right border-top border-bottom  has-transition hov-animate-outline">
                    <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                        <!-- Shop logo & Verification Status -->
                        <div class="position-relative mx-auto size-100px size-md-120px">
                            <a href="https://oibazar.com/shop/Ulfa-Mart"
                                class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img"
                                tabindex="0"
                                style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                                <img src="https://oibazar.com/public/assets/img/placeholder-rect.jpg"
                                    data-src="https://oibazar.com/public/assets/img/placeholder.jpg" alt="Ulfa Mart"
                                    class="img-fit lazyload has-transition"
                                    onerror="this.onerror=null;this.src='https://oibazar.com/public/assets/img/placeholder-rect.jpg';">
                            </a>
                            <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24"
                                    viewBox="0 0 24.001 24">
                                    <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                        <circle id="Ellipse_637" data-name="Ellipse 637" cx="12"
                                            cy="12" r="12" transform="translate(480 345)" fill="#fff" />
                                        <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                            <path id="Union_5" data-name="Union 5"
                                                d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z"
                                                transform="translate(0 0)" fill="#3490f3" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <!-- Shop name -->
                        <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                            <a href="https://oibazar.com/shop/Ulfa-Mart" class="text-reset hov-text-primary"
                                tabindex="0">Ulfa Mart</a>
                        </h2>
                        <!-- Shop Rating -->
                        <div class="rating rating-mr-1 text-dark mb-3">
                            <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i
                                class = 'las la-star'></i><i class = 'las la-star'></i>
                            <span class="opacity-60 fs-14">(0
                                reviews)</span>
                        </div>
                        <!-- Visit Button -->
                        <a href="https://oibazar.com/shop/Ulfa-Mart" class="btn-visit">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Visit Store</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Sellers -->
@endsection
