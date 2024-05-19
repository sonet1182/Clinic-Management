<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta name="csrf-token" content="0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1">
    <meta name="app-url" content="//oibazar.com/">
    <meta name="file-base-url" content="//oibazar.com/public/">

    <title>OiBazar | Platform For Every Niche | Buy or Sell Anything</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="OiBazar - Platform For Every Niche | Buy or Sell Anything" />
    <meta name="keywords" content="OiBazar, Jachai, Jachai.com, Woadi, bd phone, epaper cms,">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="OiBazar - Platform For Every Niche | Buy or Sell Anything">
    <meta itemprop="description" content="OiBazar - Platform For Every Niche | Buy or Sell Anything">
    <meta itemprop="image" content="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="OiBazar - Platform For Every Niche | Buy or Sell Anything">
    <meta name="twitter:description" content="OiBazar - Platform For Every Niche | Buy or Sell Anything">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="OiBazar - Platform For Every Niche | Buy or Sell Anything" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:image" content="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}" />
    <meta property="og:description" content="OiBazar - Platform For Every Niche | Buy or Sell Anything" />
    <meta property="og:site_name" content="OiBazar.com" />
    <meta property="fb:app_id" content="">

    <!-- Favicon -->
    <link rel="icon" href="/asset/frontend/uploads/all/FyQoh66XQew6Uwn39UJP73pP8ClTNAqR5hbfandD.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('asset/backend/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('/asset/frontend/assets/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/frontend/assets/css/aiz-core252e.css?v=6736') }}">
    <link rel="stylesheet" href="{{ asset('/asset/frontend/assets/css/custom-style.css') }}">


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
            nothing_found: 'Nothing found',
            choose_file: 'Choose File',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

    <style>
        :root {
            --blue: #3490f3;
            --gray: #9d9da6;
            --gray-dark: #8d8d8d;
            --secondary: #919199;
            --soft-secondary: rgba(145, 145, 153, 0.15);
            --success: #85b567;
            --soft-success: rgba(133, 181, 103, 0.15);
            --warning: #f3af3d;
            --soft-warning: rgba(243, 175, 61, 0.15);
            --light: #f5f5f5;
            --soft-light: #dfdfe6;
            --soft-white: #b5b5bf;
            --dark: #292933;
            --soft-dark: #1b1b28;
            --primary: #0768d4;
            --hov-primary: #ff5a00;
            --soft-primary: rgba(7, 104, 212, 0.15);
        }

        body {
            font-family: 'Public Sans', sans-serif;
            font-weight: 400;
        }

        .pagination .page-link,
        .page-item.disabled .page-link {
            min-width: 32px;
            min-height: 32px;
            line-height: 32px;
            text-align: center;
            padding: 0;
            border: 1px solid var(--soft-light);
            font-size: 0.875rem;
            border-radius: 0 !important;
            color: var(--dark);
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .aiz-carousel.coupon-slider .slick-track {
            margin-left: 0;
        }

        .form-control:focus {
            border-width: 2px !important;
        }

        .iti__flag-container {
            padding: 2px;
        }

        .modal-content {
            border: 0 !important;
            border-radius: 0 !important;
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }
    </style>


    <style>
        .sidebar {
            width: 270px;
            background-color: #fff;
            z-index: 100;
        }

        .sidebar ul {
            padding: 0px;
        }

        .sidebar li {
            list-style: none;
        }

        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu li {
            position: relative;
            border-top: 0 !important;
            border: 1px solid #dee2e6;
        }

        .menu li a {
            display: block;
            padding: 10px;
            color: #000;
            text-decoration: none;
        }

        .menu li:hover {
            background-color: #f1e7d4;
        }

        .submenu {
            display: none;
            background-color: #fff;
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
        }

        .menu li:hover>.submenu {
            display: block;
        }

        .submenu li {
            position: relative;
        }

        .submenu li a {
            padding: 10px 20px;
            color: #000;
            text-decoration: none;
        }

        .submenu li:hover {
            background-color: #f1e7d4;
        }
    </style>
</head>

<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column bg-white">

        <!-- Header -->
        <!-- Top Bar Banner -->
        <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner"
            data-value="removed">
            <a href="flash-deals.html" class="d-block text-reset">
                <img src="/asset/frontend/uploads/all/poZ8AytQa3iNoFOsM4JIy16GQ8tiAT1yNpS73rUG.png"
                    class="d-none d-xl-block img-fit"> <!-- For Large device -->
                <img src="/asset/frontend/uploads/all/poZ8AytQa3iNoFOsM4JIy16GQ8tiAT1yNpS73rUG.png"
                    class="d-none d-md-block d-xl-none img-fit"> <!-- For Medium device -->
                <img src="/asset/frontend/uploads/all/poZ8AytQa3iNoFOsM4JIy16GQ8tiAT1yNpS73rUG.png"
                    class="d-md-none img-fit">
                <!-- For Small device -->
            </a>
            <button class="btn text-white h-100 absolute-top-right set-session" data-key="top-banner"
                data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
                <i class="la la-close la-2x"></i>
            </button>
        </div>

        <!-- Top Bar -->
        <div class="top-navbar bg-white z-1035 h-35px h-sm-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col">
                        <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                            <!-- Language switcher -->
                            <li class="list-inline-item dropdown mr-4" id="lang-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    <span class="">English</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li>
                                        <a href="javascript:void(0)" data-flag="en" class="dropdown-item ">
                                            <img src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                                                data-src="https://oibazar.com/public/assets/img/flags/en.png"
                                                class="mr-1 lazyload" alt="English" height="11">
                                            <span class="language">English</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Currency Switcher -->
                            <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    Taka
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="USD">U.S.
                                            Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="AUD">Australian Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="BRL">Brazilian Real (R$)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="CAD">Canadian
                                            Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CZK">Czech
                                            Koruna (Kč)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="DKK">Danish
                                            Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="EUR">Euro
                                            (€)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="HKD">Hong
                                            Kong Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="HUF">Hungarian Forint (Ft)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="ILS">Israeli
                                            New Sheqel (₪)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="JPY">Japanese
                                            Yen (¥)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MYR">Malaysian Ringgit (RM)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="MXN">Mexican
                                            Peso ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="NOK">Norwegian Krone (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="NZD">New
                                            Zealand Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PHP">Philippine Peso (₱)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="PLN">Polish
                                            Zloty (zł)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="GBP">Pound
                                            Sterling (£)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="RUB">Russian
                                            Ruble (руб)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="SGD">Singapore Dollar ($)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="SEK">Swedish
                                            Krona (kr)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="CHF">Swiss
                                            Franc (CHF)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)" data-currency="THB">Thai
                                            Baht (฿)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item  active " href="javascript:void(0)"
                                            data-currency="BDT">Taka (৳)</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="javascript:void(0)"
                                            data-currency="Rupee">Indian
                                            Rupee (Rs)</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="col-6 text-right d-none d-lg-block">
                        <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                            <!-- Become a Seller -->
                            <li class="list-inline-item mr-0 pl-0 py-2">
                                <a href="shops/create.html"
                                    class="text-secondary fs-12 pr-3 d-inline-block border-width-2 border-right">Become
                                    a Seller !</a>
                            </li>
                            <!-- Seller Login -->
                            <li class="list-inline-item mr-0 pl-0 py-2">
                                <a href="seller/login.html" class="text-secondary fs-12 pl-3 d-inline-block">Login to
                                    Seller</a>
                            </li>
                            <!-- Helpline -->
                            <li class="list-inline-item ml-3 pl-3 mr-0 pr-0">
                                <a href="tel:+8801972212303" class="text-secondary fs-12 d-inline-block py-2">
                                    <span>Helpline</span>
                                    <span>+8801972212303</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header class=" z-1020 bg-white">
            <!-- Search Bar -->
            <div class="position-relative logo-bar-area border-bottom border-md-nonea z-1025">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <!-- top menu sidebar button -->
                        <button type="button" class="btn d-lg-none mr-3 mr-sm-4 p-0 active"
                            data-toggle="class-toggle" data-target=".aiz-top-menu-sidebar">
                            <svg id="Component_43_1" data-name="Component 43 – 1" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16">
                                <rect id="Rectangle_19062" data-name="Rectangle 19062" width="16" height="2"
                                    transform="translate(0 7)" fill="#919199" />
                                <rect id="Rectangle_19063" data-name="Rectangle 19063" width="16" height="2"
                                    fill="#919199" />
                                <rect id="Rectangle_19064" data-name="Rectangle 19064" width="16" height="2"
                                    transform="translate(0 14)" fill="#919199" />
                            </svg>

                        </button>
                        <!-- Header Logo -->
                        <div class="col-auto pl-0 pr-3 d-flex align-items-center">
                            <a class="d-block py-20px mr-3 ml-0" href="index.html">
                                <img src="/asset/frontend/uploads/all/IzGan91HqN6L4uJrfGdb6Ryj6dfYlMMp5Q9DjAKM.png"
                                    alt="OiBazar.com" class="mw-100 h-30px h-md-40px" height="40">
                            </a>
                        </div>
                        <!-- Search Icon for small device -->
                        <div class="d-lg-none ml-auto mr-0">
                            <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle"
                                data-target=".front-header-search">
                                <i class="las la-search la-flip-horizontal la-2x"></i>
                            </a>
                        </div>
                        <!-- Search field -->
                        <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white mx-xl-5">
                            <div class="position-relative flex-grow-1 px-3 px-lg-0">
                                <form action="https://oibazar.com/search" method="GET" class="stop-propagation">
                                    <div class="d-flex position-relative align-items-center">
                                        <div class="d-lg-none" data-toggle="class-toggle"
                                            data-target=".front-header-search">
                                            <button class="btn px-2" type="button"><i
                                                    class="la la-2x la-long-arrow-left"></i></button>
                                        </div>
                                        <div class="search-input-box">
                                            <input type="text"
                                                class="border border-soft-light form-control fs-14 hov-animate-outline"
                                                id="search" name="keyword" placeholder="I am shopping for..."
                                                autocomplete="off">

                                            <svg id="Group_723" data-name="Group 723"
                                                xmlns="http://www.w3.org/2000/svg" width="20.001" height="20"
                                                viewBox="0 0 20.001 20">
                                                <path id="Path_3090" data-name="Path 3090"
                                                    d="M9.847,17.839a7.993,7.993,0,1,1,7.993-7.993A8,8,0,0,1,9.847,17.839Zm0-14.387a6.394,6.394,0,1,0,6.394,6.394A6.4,6.4,0,0,0,9.847,3.453Z"
                                                    transform="translate(-1.854 -1.854)" fill="#b5b5bf" />
                                                <path id="Path_3091" data-name="Path 3091"
                                                    d="M24.4,25.2a.8.8,0,0,1-.565-.234l-6.15-6.15a.8.8,0,0,1,1.13-1.13l6.15,6.15A.8.8,0,0,1,24.4,25.2Z"
                                                    transform="translate(-5.2 -5.2)" fill="#b5b5bf" />
                                            </svg>
                                        </div>
                                    </div>
                                </form>
                                <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                                    style="min-height: 200px">
                                    <div class="search-preloader absolute-top-center">
                                        <div class="dot-loader">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="search-nothing d-none p-3 text-center fs-16">

                                    </div>
                                    <div id="search-content" class="text-left">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search box -->
                        <div class="d-none d-lg-none ml-3 mr-0">
                            <div class="nav-search-box">
                                <a href="#" class="nav-box-link">
                                    <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Compare -->
                        <div class="d-none d-lg-block ml-3 mr-0">
                            <div class="" id="compare">
                                <a href="compare.html" class="d-flex align-items-center text-dark"
                                    data-toggle="tooltip" data-title="Compare" data-placement="top">
                                    <span class="position-relative d-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16">
                                            <path id="_9f8e765afedd47ec9e49cea83c37dfea"
                                                data-name="9f8e765afedd47ec9e49cea83c37dfea"
                                                d="M18.037,5.547v.8a.8.8,0,0,1-.8.8H7.221a.4.4,0,0,0-.4.4V9.216a.642.642,0,0,1-1.1.454L2.456,6.4a.643.643,0,0,1,0-.909L5.723,2.227a.642.642,0,0,1,1.1.454V4.342a.4.4,0,0,0,.4.4H17.234a.8.8,0,0,1,.8.8Zm-3.685,4.86a.642.642,0,0,0-1.1.454v1.661a.4.4,0,0,1-.4.4H2.84a.8.8,0,0,0-.8.8v.8a.8.8,0,0,0,.8.8H12.854a.4.4,0,0,1,.4.4V17.4a.642.642,0,0,0,1.1.454l3.267-3.268a.643.643,0,0,0,0-.909Z"
                                                transform="translate(-2.037 -2.038)" fill="#919199" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Wishlist -->
                        <div class="d-none d-lg-block mr-3" style="margin-left: 36px;">
                            <div class="" id="wishlist">
                                <a href="users/login.html" class="d-flex align-items-center text-dark"
                                    data-toggle="tooltip" data-title="Wishlist" data-placement="top">
                                    <span class="position-relative d-inline-block">
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
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Notifications -->
                        <ul class="list-inline mb-0 h-100 d-none d-xl-flex justify-content-end align-items-center">
                            <li class="list-inline-item ml-3 mr-3 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown"
                                    href="javascript:void(0);" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.668" height="16"
                                                viewBox="0 0 14.668 16">
                                                <path id="_26._Notification" data-name="26. Notification"
                                                    d="M8.333,16A3.34,3.34,0,0,0,11,14.667H5.666A3.34,3.34,0,0,0,8.333,16ZM15.06,9.78a2.457,2.457,0,0,1-.727-1.747V6a6,6,0,1,0-12,0V8.033A2.457,2.457,0,0,1,1.606,9.78,2.083,2.083,0,0,0,3.08,13.333H13.586A2.083,2.083,0,0,0,15.06,9.78Z"
                                                    transform="translate(-0.999)" fill="#91919b" />
                                            </svg>
                                        </span>
                                </a>

                            </li>
                        </ul>

                        <div class="ml-auto mr-0">
                            <!--Login & Registration -->
                            <span class="d-none d-xl-flex align-items-center nav-user-info ml-3">
                                <!-- Image -->
                                <span
                                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                                        viewBox="0 0 19.902 20.012">
                                        <path id="fe2df171891038b33e9624c27e96e367"
                                            d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                            transform="translate(-2.064 -1.995)" fill="#91919b" />
                                    </svg>
                                </span>
                                <a href="users/login.html"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                                <a href="users/registration.html"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Loged in user Menus -->
                <div class="hover-user-top-menu position-absolute top-100 left-0 right-0 z-3">
                    <div class="container">
                        <div class="position-static float-right">
                            <div class="aiz-user-top-menu bg-white rounded-0 border-top shadow-sm"
                                style="width:220px;">
                                <ul class="list-unstyled no-scrollbar mb-0 text-left">
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="users/login.html"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path id="Path_2916" data-name="Path 2916"
                                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                    fill="#b5b5c0" />
                                            </svg>
                                            <span class="user-top-menu-name has-transition ml-3">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="index.html"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999"
                                                viewBox="0 0 16 15.999">
                                                <g id="Group_25503" data-name="Group 25503"
                                                    transform="translate(-24.002 -377)">
                                                    <g id="Group_25265" data-name="Group 25265"
                                                        transform="translate(-216.534 -160)">
                                                        <path id="Subtraction_192" data-name="Subtraction 192"
                                                            d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z"
                                                            transform="translate(-11803.999 -2367)" fill="#d43533" />
                                                    </g>
                                                    <rect id="Rectangle_19022" data-name="Rectangle 19022"
                                                        width="1" height="8" rx="0.5"
                                                        transform="translate(31.5 377)" fill="#d43533" />
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name text-primary has-transition ml-3">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Menu Bar -->
            <div class="d-none d-lg-block position-relative bg-primary h-50px">
                <div class="container h-100">
                    <div class="d-flex h-100">
                        <!-- Categoty Menu Button -->
                        <div class="d-none d-xl-block all-category has-transition bg-black-10" id="category-menu-bar">
                            <div class="px-3 h-100"
                                style="padding-top: 12px;padding-bottom: 12px; width:270px; cursor: pointer;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <span class="fw-700 fs-16 text-white mr-3">Categories</span>
                                        <a href="categories.html" class="text-reset">
                                            <span class="d-none d-lg-inline-block text-white hov-opacity-80">(See
                                                All)</span>
                                        </a>
                                    </div>
                                    <i class="las la-angle-down text-white has-transition" id="category-menu-bar-icon"
                                        style="font-size: 1.2rem !important"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Header Menus -->
                        <div class="ml-xl-4 w-100 overflow-hidden">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-xl-start h-100">
                                <ul class="list-inline mb-0 pl-0 hor-swipe c-scrollbar-light">
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="index.html"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                        ">
                                            Home
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="flash-deals.html"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                        ">
                                            Campaign
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="blog.html"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                        ">
                                            Blogs
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="brands.html"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                        ">
                                            All Brands
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 animate-underline-white">
                                        <a href="categories.html"
                                            class="fs-13 px-3 py-3 d-inline-block fw-700 text-white header_menu_links hov-bg-black-10
                                        ">
                                            All categories
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <!-- Cart -->
                        <div class="d-none d-xl-block align-self-stretch ml-5 mr-0 has-transition bg-black-10"
                            data-hover="dropdown">
                            <div class="nav-cart-box dropdown h-100" id="cart_items" style="width: max-content;">
                                <!-- Cart button with cart count -->
                                <a href="javascript:void(0)" class="d-flex align-items-center text-dark px-3 h-100"
                                    data-toggle="dropdown" data-display="static" title="Cart">
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20.562"
                                            viewBox="0 0 24 20.562">
                                            <g id="_5e67fc94b53aaec8ca181b806dd815ee"
                                                data-name="5e67fc94b53aaec8ca181b806dd815ee"
                                                transform="translate(-33.276 -101)">
                                                <path id="Path_32659" data-name="Path 32659"
                                                    d="M34.034,102.519H38.2l-.732-.557c.122.37.243.739.365,1.112q.441,1.333.879,2.666.528,1.6,1.058,3.211.46,1.394.917,2.788c.149.451.291.9.446,1.352l.008.02a.76.76,0,0,0,1.466-.4c-.122-.37-.243-.739-.365-1.112q-.441-1.333-.879-2.666-.528-1.607-1.058-3.213-.46-1.394-.917-2.788c-.149-.451-.289-.9-.446-1.352l-.008-.02a.783.783,0,0,0-.732-.557H34.037a.76.76,0,0,0,0,1.519Z"
                                                    fill="#fff" />
                                                <path id="Path_32660" data-name="Path 32660"
                                                    d="M288.931,541.934q-.615,1.1-1.233,2.193c-.058.106-.119.21-.177.317a.767.767,0,0,0,.656,1.142h11.6c.534,0,1.071.01,1.608,0h.023a.76.76,0,0,0,0-1.519h-11.6c-.534,0-1.074-.015-1.608,0h-.023l.656,1.142q.615-1.1,1.233-2.193c.058-.106.119-.21.177-.316a.759.759,0,0,0-1.312-.765Z"
                                                    transform="translate(-247.711 -429.41)" fill="#fff" />
                                                <circle id="Ellipse_553" data-name="Ellipse 553" cx="1.724"
                                                    cy="1.724" r="1.724" transform="translate(49.612 117.606)"
                                                    fill="#fff" />
                                                <path id="Path_32661" data-name="Path 32661"
                                                    d="M658.4,739.2a2.267,2.267,0,0,0,1.489,2.1,2.232,2.232,0,0,0,2.433-.648A2.231,2.231,0,1,0,658.4,739.2a.506.506,0,0,0,1.013,0c0-.041,0-.084.005-.124a.381.381,0,0,1,.005-.053c.008-.1,0,.033-.005.03a.979.979,0,0,1,.061-.248c.008-.02.023-.106.04-.111s-.046.094-.018.043a.656.656,0,0,0,.028-.061,2.3,2.3,0,0,1,.129-.215c.048-.073-.068.078.013-.015.025-.028.051-.058.078-.086s.056-.056.084-.081l.038-.033c.018-.015.091-.051.025-.023s-.015.013,0,0,.035-.025.056-.038a.947.947,0,0,1,.086-.051c.038-.023.078-.041.119-.061.013-.008.066-.033,0,0s.025-.008.033-.01A1.56,1.56,0,0,1,660.4,738l.068-.013c.056-.013-.048.005-.048.005.046,0,.094-.01.139-.01a2.043,2.043,0,0,1,.248.008c.094.008-.1-.018.02.005.046.008.089.02.134.03s.076.023.114.035a.589.589,0,0,1,.063.023c0,.008-.094-.048-.043-.018.071.043.149.076.22.122.018.013.035.025.056.038s.056.023,0,0-.018-.015,0,0l.051.043a2.274,2.274,0,0,1,.172.177c.076.084-.035-.058.013.015.02.033.043.063.063.1s.041.068.058.1l.023.046c.048.091.01-.008,0-.013.03.01.063.192.073.225l.023.1c.02.1,0-.03,0-.033.013.013.008.071.008.086a1.749,1.749,0,0,1,0,.23.63.63,0,0,0-.005.071c0,.051-.03.043.005-.03a.791.791,0,0,0-.028.134c-.018.071-.046.139-.066.21s.046-.086.013-.028a.245.245,0,0,0-.02.046c-.02.041-.041.078-.063.117s-.041.066-.063.1c-.068.1.048-.051-.01.018a1.932,1.932,0,0,1-.172.18c-.01.01-.071.076-.089.076,0,0,.1-.071.023-.02-.015.01-.028.018-.041.028-.071.046-.144.084-.218.122s.091-.03-.018.008l-.111.038-.116.03c-.018,0-.033.008-.051.01-.111.025.081-.005.015,0a2.045,2.045,0,0,1-.248.01c-.041,0-.081-.005-.124-.008-.015,0-.076-.008,0,0s-.018-.005-.035-.008a1.912,1.912,0,0,1-.261-.076c-.015-.005-.066-.03,0,0s-.015-.008-.03-.015c-.041-.02-.078-.041-.117-.063s-.073-.048-.111-.073c-.061-.038.008.02.023.02-.01,0-.043-.035-.051-.043a1.872,1.872,0,0,1-.187-.187.3.3,0,0,1-.043-.051c0,.01.061.086.02.023-.025-.038-.051-.073-.073-.111s-.048-.089-.071-.132c-.053-.1.025.081-.015-.033a1.836,1.836,0,0,1-.073-.263.163.163,0,0,0-.01-.051c.038.084.008.071,0,.013s-.008-.106-.008-.16a.513.513,0,0,0-1.026,0Z"
                                                    transform="translate(-609.293 -619.872)" fill="#fff" />
                                                <circle id="Ellipse_554" data-name="Ellipse 554" cx="1.724"
                                                    cy="1.724" r="1.724" transform="translate(40.884 117.606)"
                                                    fill="#fff" />
                                                <path id="Path_32662" data-name="Path 32662"
                                                    d="M270.814,272.355a2.267,2.267,0,0,0,1.489,2.1,2.232,2.232,0,0,0,2.433-.648,2.231,2.231,0,1,0-3.922-1.453.506.506,0,0,0,1.013,0c0-.041,0-.084.005-.124a.377.377,0,0,1,.005-.053c.008-.1,0,.033-.005.03a.981.981,0,0,1,.061-.248c.008-.02.023-.106.04-.111s-.046.094-.018.043a.656.656,0,0,0,.028-.061,2.3,2.3,0,0,1,.129-.215c.048-.073-.068.079.013-.015.025-.028.051-.058.078-.086s.056-.056.084-.081l.038-.033c.018-.015.091-.051.025-.023s-.015.013,0,0,.035-.025.056-.038a.96.96,0,0,1,.086-.051c.038-.023.078-.04.119-.061.013-.008.066-.033,0,0s.025-.008.033-.01a1.564,1.564,0,0,1,.213-.061l.068-.013c.056-.013-.048.005-.048.005.046,0,.094-.01.139-.01a2.031,2.031,0,0,1,.248.008c.094.008-.1-.018.02.005.046.008.089.02.134.03s.076.023.114.035a.583.583,0,0,1,.063.023c0,.008-.094-.048-.043-.018.071.043.149.076.22.122.018.013.035.025.056.038s.056.023,0,0-.018-.015,0,0l.051.043a2.257,2.257,0,0,1,.172.177c.076.084-.035-.058.013.015.02.033.043.063.063.1s.04.068.058.1l.023.046c.048.091.01-.008,0-.013.03.01.063.192.073.225l.023.1c.02.1,0-.03,0-.033.013.013.008.071.008.086a1.749,1.749,0,0,1,0,.23.622.622,0,0,0-.005.071c0,.051-.03.043.005-.03a.788.788,0,0,0-.028.134c-.018.071-.046.139-.066.21s.046-.086.013-.028a.249.249,0,0,0-.02.046c-.02.04-.041.078-.063.116s-.041.066-.063.1c-.068.1.048-.051-.01.018a1.929,1.929,0,0,1-.172.18c-.01.01-.071.076-.089.076,0,0,.1-.071.023-.02-.015.01-.028.018-.041.028-.071.046-.144.084-.218.122s.091-.03-.018.008l-.111.038-.116.03c-.018,0-.033.008-.051.01-.111.025.081-.005.015,0a2.039,2.039,0,0,1-.248.01c-.041,0-.081-.005-.124-.008-.015,0-.076-.008,0,0s-.018-.005-.035-.008a1.919,1.919,0,0,1-.261-.076c-.015-.005-.066-.03,0,0s-.015-.008-.03-.015c-.04-.02-.078-.04-.116-.063s-.073-.048-.111-.073c-.061-.038.008.02.023.02-.01,0-.043-.035-.051-.043a1.873,1.873,0,0,1-.187-.187.3.3,0,0,1-.043-.051c0,.01.061.086.02.023-.025-.038-.051-.073-.073-.111s-.048-.089-.071-.132c-.053-.1.025.081-.015-.033a1.84,1.84,0,0,1-.073-.263.164.164,0,0,0-.01-.051c.038.084.008.071,0,.013s-.008-.106-.008-.16a.513.513,0,0,0-1.026,0ZM287.2,258l-3.074,7.926H272.313L269.7,258Z"
                                                    transform="translate(-230.437 -153.024)" fill="#fff" />
                                                <path id="Path_32663" data-name="Path 32663"
                                                    d="M267.044,237.988q-.52,1.341-1.038,2.682-.828,2.138-1.654,4.274l-.38.983.489-.372H254.1c-.476,0-.957-.02-1.436,0h-.02l.489.372q-.444-1.348-.886-2.694-.7-2.131-1.4-4.264c-.109-.327-.215-.653-.324-.983l-.489.641h16.791c.228,0,.456.005.681,0h.03a.506.506,0,0,0,0-1.013H250.744c-.228,0-.456-.005-.681,0h-.03a.511.511,0,0,0-.489.641q.444,1.348.886,2.694.7,2.131,1.4,4.264c.109.327.215.653.324.983a.523.523,0,0,0,.489.372h10.359c.476,0,.957.018,1.436,0h.02a.526.526,0,0,0,.489-.372q.52-1.341,1.038-2.682.828-2.138,1.654-4.274l.38-.983a.508.508,0,0,0-.355-.623A.52.52,0,0,0,267.044,237.988Z"
                                                    transform="translate(-210.769 -133.152)" fill="#fff" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="d-none d-xl-block ml-2 fs-14 fw-700 text-white">৳0.00</span>
                                    <span class="nav-box-text d-none d-xl-block ml-2 text-white fs-12">
                                        (<span class="cart-count">0</span> Items)
                                    </span>
                                </a>

                                <!-- Cart Items -->
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0 stop-propagation rounded-0">
                                    <div class="text-center p-3">
                                        <i class="las la-frown la-3x opacity-60 mb-3"></i>
                                        <h3 class="h6 fw-700">Your Cart is empty</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @include('frontend.inc.menu')
            </div>


        </header>

        <!-- Top Menu Sidebar -->
        <div class="aiz-top-menu-sidebar collapse-sidebar-wrap sidebar-xl sidebar-left d-lg-none z-1035">
            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                data-target=".aiz-top-menu-sidebar" data-same=".hide-top-menu-bar"></div>
            <div class="collapse-sidebar c-scrollbar-light text-left">
                <button type="button" class="btn btn-sm p-4 hide-top-menu-bar" data-toggle="class-toggle"
                    data-target=".aiz-top-menu-sidebar">
                    <i class="las la-times la-2x text-primary"></i>
                </button>
                <!--Login & Registration -->
                <span class="d-flex align-items-center nav-user-info pl-4">
                    <!-- Image -->
                    <span
                        class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                            viewBox="0 0 19.902 20.012">
                            <path id="fe2df171891038b33e9624c27e96e367"
                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                transform="translate(-2.064 -1.995)" fill="#91919b" />
                        </svg>
                    </span>
                    <a href="users/login.html"
                        class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">Login</a>
                    <a href="users/registration.html"
                        class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">Registration</a>
                </span>
                <hr>
                <ul class="mb-0 pl-3 pb-3 h-100">
                    <li class="mr-0">
                        <a href="index.html"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                        ">
                            Home
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="flash-deals.html"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                        ">
                            Campaign
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="blog.html"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                        ">
                            Blogs
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="brands.html"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                        ">
                            All Brands
                        </a>
                    </li>
                    <li class="mr-0">
                        <a href="categories.html"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                        ">
                            All categories
                        </a>
                    </li>
                </ul>
                <br>
                <br>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="order_details" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="order-details-modal-body">

                    </div>
                </div>
            </div>
        </div>

        @yield('content')


        <!-- footer top Bar -->
        <section class="bg-light border-top mt-auto">
            <div class="container px-xs-0">
                <div class="row no-gutters border-left border-soft-light">
                    <!-- Terms & conditions -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="https://oibazar.com/terms">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.004" height="32"
                                viewBox="0 0 26.004 32">
                                <path id="Union_8" data-name="Union 8"
                                    d="M-14508,18932v-.01a6.01,6.01,0,0,1-5.975-5.492h-.021v-14h1v13.5h0a4.961,4.961,0,0,0,4.908,4.994h.091v0h14v1Zm17-4v-1a2,2,0,0,0,2-2h1a3,3,0,0,1-2.927,3Zm-16,0a3,3,0,0,1-3-3h1a2,2,0,0,0,2,2h16v1Zm18-3v-16.994h-4v-1h3.6l-5.6-5.6v3.6h-.01a2.01,2.01,0,0,0,2,2v1a3.009,3.009,0,0,1-3-3h.01v-4h.6l0,0H-14507a2,2,0,0,0-2,2v22h-1v-22a3,3,0,0,1,3-3v0h12l0,0,7,7-.01.01V18925Zm-16-4.992v-1h12v1Zm0-4.006v-1h12v1Zm0-4v-1h12v1Z"
                                    transform="translate(14513.998 -18900.002)" fill="#919199" />
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">Terms &amp; conditions</h4>
                        </a>
                    </div>

                    <!-- Return Policy -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="https://oibazar.com/return-policy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.001" height="23.971"
                                viewBox="0 0 32.001 23.971">
                                <path id="Union_7" data-name="Union 7"
                                    d="M-14490,18922.967a6.972,6.972,0,0,0,4.949-2.051,6.944,6.944,0,0,0,2.052-4.943,7.008,7.008,0,0,0-7-7v0h-22.1l7.295,7.295-.707.707-7.779-7.779-.708-.707.708-.7,7.774-7.779.712.707-7.261,7.258H-14490v0a8.01,8.01,0,0,1,8,8,8.008,8.008,0,0,1-8,8Z"
                                    transform="translate(14514.001 -18900)" fill="#919199" />
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">return policy</h4>
                        </a>
                    </div>

                    <!-- Support Policy -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100  border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="https://oibazar.com/support-policy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.002" height="32.002"
                                viewBox="0 0 32.002 32.002">
                                <g id="Group_24198" data-name="Group 24198" transform="translate(-1113.999 -2398)">
                                    <path id="Subtraction_14" data-name="Subtraction 14"
                                        d="M-14508,18916h0l-1,0a12.911,12.911,0,0,1,3.806-9.187A12.916,12.916,0,0,1-14496,18903a12.912,12.912,0,0,1,9.193,3.811A12.9,12.9,0,0,1-14483,18916l-1,0a11.918,11.918,0,0,0-3.516-8.484A11.919,11.919,0,0,0-14496,18904a11.921,11.921,0,0,0-8.486,3.516A11.913,11.913,0,0,0-14508,18916Z"
                                        transform="translate(15626 -16505)" fill="#919199" />
                                    <path id="Subtraction_15" data-name="Subtraction 15"
                                        d="M-14510,18912h-1a3,3,0,0,1-3-3v-6a3,3,0,0,1,3-3h1a2,2,0,0,1,2,2v8A2,2,0,0,1-14510,18912Zm-1-11a2,2,0,0,0-2,2v6a2,2,0,0,0,2,2h1a1,1,0,0,0,1-1v-8a1,1,0,0,0-1-1Z"
                                        transform="translate(15628 -16489)" fill="#919199" />
                                    <path id="Subtraction_19" data-name="Subtraction 19"
                                        d="M4,12H3A3,3,0,0,1,0,9V3A3,3,0,0,1,3,0H4A2,2,0,0,1,6,2v8A2,2,0,0,1,4,12ZM3,1A2,2,0,0,0,1,3V9a2,2,0,0,0,2,2H4a1,1,0,0,0,1-1V2A1,1,0,0,0,4,1Z"
                                        transform="translate(1146.002 2423) rotate(180)" fill="#919199" />
                                    <path id="Subtraction_17" data-name="Subtraction 17"
                                        d="M-14512,18908a2,2,0,0,1-2-2v-4a2,2,0,0,1,2-2,2,2,0,0,1,2,2v4A2,2,0,0,1-14512,18908Zm0-7a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1,1,1,0,0,0,1-1v-4A1,1,0,0,0-14512,18901Z"
                                        transform="translate(20034 16940.002) rotate(90)" fill="#919199" />
                                    <rect id="Rectangle_18418" data-name="Rectangle 18418" width="1"
                                        height="4.001" transform="translate(1137.502 2427.502) rotate(90)"
                                        fill="#919199" />
                                    <path id="Intersection_1" data-name="Intersection 1"
                                        d="M-14508.5,18910a4.508,4.508,0,0,0,4.5-4.5h1a5.508,5.508,0,0,1-5.5,5.5Z"
                                        transform="translate(15646.004 -16482.5)" fill="#919199" />
                                </g>
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">Support Policy</h4>
                        </a>
                    </div>

                    <!-- Privacy Policy -->
                    <div class="col-lg-3 col-6 policy-file">
                        <a class="text-reset h-100 border-right border-bottom border-soft-light text-center p-2 p-md-4 d-block hov-ls-1"
                            href="https://oibazar.com/privacy-policy">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32">
                                <g id="Group_24236" data-name="Group 24236"
                                    transform="translate(-1454.002 -2430.002)">
                                    <path id="Subtraction_11" data-name="Subtraction 11"
                                        d="M-14498,18932a15.894,15.894,0,0,1-11.312-4.687A15.909,15.909,0,0,1-14514,18916a15.884,15.884,0,0,1,4.685-11.309A15.9,15.9,0,0,1-14498,18900a15.909,15.909,0,0,1,11.316,4.688A15.885,15.885,0,0,1-14482,18916a15.9,15.9,0,0,1-4.687,11.316A15.909,15.909,0,0,1-14498,18932Zm0-31a14.9,14.9,0,0,0-10.605,4.393A14.9,14.9,0,0,0-14513,18916a14.9,14.9,0,0,0,4.395,10.607A14.9,14.9,0,0,0-14498,18931a14.9,14.9,0,0,0,10.607-4.393A14.9,14.9,0,0,0-14483,18916a14.9,14.9,0,0,0-4.393-10.607A14.9,14.9,0,0,0-14498,18901Z"
                                        transform="translate(15968 -16470)" fill="#919199" />
                                    <g id="Group_24196" data-name="Group 24196" transform="translate(0 -1)">
                                        <rect id="Rectangle_18406" data-name="Rectangle 18406" width="2"
                                            height="10" transform="translate(1469 2440)" fill="#919199" />
                                        <rect id="Rectangle_18407" data-name="Rectangle 18407" width="2"
                                            height="2" transform="translate(1469 2452)" fill="#919199" />
                                    </g>
                                </g>
                            </svg>
                            <h4 class="text-dark fs-14 fw-700 mt-3">privacy policy</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section> --->

        <!-- footer subscription & icons -->
        <section class="py-3 text-light footer-widget border-bottom"
            style="border-color: #3d3d46 !important; background-color: #212129 !important;">
            <div class="container">
                <!-- footer logo -->
                <div class="mt-3 mb-4">
                    <a href="index.html" class="d-block">
                        <img class="lazyload" src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                            data-src="https://oibazar.com/public/uploads/all/IzGan91HqN6L4uJrfGdb6Ryj6dfYlMMp5Q9DjAKM.png"
                            alt="OiBazar.com" height="44" style="height: 44px;">
                    </a>
                </div>
                <div class="row">
                    <!-- about & subscription -->
                    <div class="col-xl-6 col-lg-7">
                        <div class="mb-4 text-secondary text-justify">
                            Complete system for your eCommerce business. OiBazar is The Best Trusted Virtual
                            Marketplace. You can Buy or Sell Anything with us, OiBazar is an e-Commerce platform that
                            empowers multiple vendors to sell their products from one storefront. OiBazar store gives
                            shoppers a huge catalog to choose from and provides sellers with a bigger base of
                            ready-to-buy customers. Think of OiBazar platforms as shopping malls.&nbsp;
                        </div>
                        <h5 class="fs-14 fw-700 text-soft-light mt-1 mb-3">Subscribe to our newsletter for regular
                            updates about Offers, Coupons &amp; more</h5>
                        <div class="mb-3">
                            <form method="POST" action="https://oibazar.com/subscribers">
                                <input type="hidden" name="_token"
                                    value="0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1">
                                <div class="row gutters-10">
                                    <div class="col-8">
                                        <input type="email"
                                            class="form-control border-secondary rounded-0 text-white w-100 bg-transparent"
                                            placeholder="Your Email Address" name="email" required>
                                    </div>
                                    <div class="col-4">
                                        <button type="submit"
                                            class="btn btn-primary rounded-0 w-100">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col d-none d-lg-block"></div>

                    <!-- Follow & Apps -->
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <!-- Social -->
                        <h5 class="fs-14 fw-700 text-secondary text-uppercase mt-3 mt-lg-0">Follow Us</h5>
                        <ul class="list-inline social colored mb-4">
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="#" target="_blank" class="facebook"><i
                                        class="lab la-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="#" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="#" target="_blank" class="instagram"><i
                                        class="lab la-instagram"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="#" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                            </li>
                            <li class="list-inline-item ml-2 mr-2">
                                <a href="#" target="_blank" class="linkedin"><i
                                        class="lab la-linkedin-in"></i></a>
                            </li>
                        </ul>

                        <!-- Apps link -->
                        <h5 class="fs-14 fw-700 text-secondary text-uppercase mt-3">Mobile Apps</h5>
                        <div class="d-flex mt-3">
                            <div class="">
                                <a href="#" target="_blank" class="mr-2 mb-2 overflow-hidden hov-scale-img">
                                    <img class="lazyload has-transition"
                                        src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                                        data-src="https://oibazar.com/public/assets/img/play.png" alt="OiBazar.com"
                                        height="44">
                                </a>
                            </div>
                            <div class="">
                                <a href="#" target="_blank" class="overflow-hidden hov-scale-img">
                                    <img class="lazyload has-transition"
                                        src="{{ asset('/asset/frontend/assets/img/placeholder-rect.jpg') }}"
                                        data-src="https://oibazar.com/public/assets/img/app.png" alt="OiBazar.com"
                                        height="44">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-lg-3 text-light footer-widget" style="background-color: #212129 !important;">
            <!-- footer widgets ========== [Accordion Fotter widgets are bellow from this]-->
            <div class="container d-none d-lg-block">
                <div class="row">
                    <!-- Quick links -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">
                                Quick Links
                            </h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="#" class="fs-13 text-soft-light animate-underline-white">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="fs-13 text-soft-light animate-underline-white">
                                        Return Policy
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="fs-13 text-soft-light animate-underline-white">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="fs-13 text-soft-light animate-underline-white">
                                        Seller Policy
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="fs-13 text-soft-light animate-underline-white">
                                        Term Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contacts -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">Contacts</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Address</p>
                                    <p class="fs-13 text-soft-light">House# 16, Road# 7, Block# C, Niketon, Gulshan
                                        -1,
                                        Dhaka-1212.</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Phone</p>
                                    <p class="fs-13 text-soft-light">+8801972212303</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Email</p>
                                    <p class="">
                                        <a href="cdn-cgi/l/email-protection.html#ee81878c8f948f9cdcdaae89838f8782c08d8183"
                                            class="fs-13 text-soft-light hov-text-primary"><span class="__cf_email__"
                                                data-cfemail="cba4a2a9aab1aab9f9ff8baca6aaa2a7e5a8a4a6">[email&#160;protected]</span></a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- My Account -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">My Account</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="users/login.html">
                                        Login
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="users/login.html">
                                        Order History
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="users/login.html">
                                        My Wishlist
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white"
                                        href="track-your-order.html">
                                        Track Order
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="affiliate.html">
                                        Be an affiliate partner
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Seller & Delivery Boy -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="text-center text-sm-left mt-4">
                            <!-- Seller -->
                            <h4 class="fs-14 text-secondary text-uppercase fw-700 mb-3">Seller Zone</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <p class="fs-13 text-soft-light mb-0">
                                        Become A Seller
                                        <a href="shops/create.html" class="fs-13 fw-700 text-warning ml-2">Apply
                                            Now</a>
                                    </p>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" href="seller/login.html">
                                        Login to Seller Panel
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="fs-13 text-soft-light animate-underline-white" target="_blank"
                                        href="#">
                                        Download Seller App
                                    </a>
                                </li>
                            </ul>

                            <!-- Delivery Boy -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Fotter widgets -->
            <div class="d-lg-none bg-transparent">
                <!-- Quick links -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">Quick Links</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2 pb-2 ">
                                    <a href="#"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        About Us
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="#"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Return Policy
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="#"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="#"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Seller Policy
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a href="#"
                                        class="fs-13 text-soft-light text-sm-secondary animate-underline-white">
                                        Term Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contacts -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">Contacts</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Address</p>
                                    <p class="fs-13 text-soft-light">House# 16, Road# 7, Block# C, Niketon, Gulshan
                                        -1,
                                        Dhaka-1212.</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Phone</p>
                                    <p class="fs-13 text-soft-light">+8801972212303</p>
                                </li>
                                <li class="mb-2">
                                    <p class="fs-13 text-secondary mb-1">Email</p>
                                    <p class="">
                                        <a href="cdn-cgi/l/email-protection.html#abc4c2c9cad1cad9999febccc6cac2c785c8c4c6"
                                            class="fs-13 text-soft-light hov-text-primary"><span class="__cf_email__"
                                                data-cfemail="82edebe0e3f8e3f0b0b6c2e5efe3ebeeace1edef">[email&#160;protected]</span></a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- My Account -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">My Account</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="users/login.html">
                                        Login
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="users/login.html">
                                        Order History
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="users/login.html">
                                        My Wishlist
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="track-your-order.html">
                                        Track Order
                                    </a>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="affiliate.html">
                                        Be an affiliate partner
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Seller -->
                <div class="aiz-accordion-wrap bg-black">
                    <div class="aiz-accordion-heading container bg-black">
                        <button class="aiz-accordion fs-14 text-white bg-transparent">Seller Zone</button>
                    </div>
                    <div class="aiz-accordion-panel bg-transparent" style="background-color: #212129 !important;">
                        <div class="container">
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2 pb-2 ">
                                    <p class="fs-13 text-soft-light text-sm-secondary mb-0">
                                        Become A Seller
                                        <a href="shops/create.html" class="fs-13 fw-700 text-warning ml-2">Apply
                                            Now</a>
                                    </p>
                                </li>
                                <li class="mb-2 pb-2 ">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        href="seller/login.html">
                                        Login to Seller Panel
                                    </a>
                                </li>
                                <li class="mb-2 pb-2">
                                    <a class="fs-13 text-soft-light text-sm-secondary animate-underline-white"
                                        target="_blank" href="#">
                                        Download Seller App
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Delivery Boy -->
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="pt-3 pb-7 pb-xl-3 bg-black text-soft-light">
            <div class="container">
                <div class="row align-items-center py-3">
                    <!-- Copyright -->
                    <div class="col-lg-6 order-1 order-lg-0">
                        <div class="text-center text-lg-left fs-14" current-verison="7.3.0">
                            © 2022-2023 <a href="index.html" target="_blank">OiBazar.com</a> | All rights reserved.
                        </div>
                    </div>

                    <!-- Payment Method Images -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="text-center text-lg-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3">
                                    <img src="/asset/frontend/uploads/all/XtceWmt2AIwV7Hj5eVPG1FIjhoNqYFHpWnwUhE57.png"
                                        height="20" class="mw-100 h-auto" style="max-height: 20px">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Mobile bottom nav -->
        <div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom border-top border-sm-bottom border-sm-left border-sm-right mx-auto mb-sm-2"
            style="background-color: rgb(255 255 255 / 90%)!important;">
            <div class="row align-items-center gutters-5">
                <!-- Home -->
                <div class="col">
                    <a href="index.html" class="text-secondary d-block text-center pb-2 pt-3 svg-active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g id="Group_24768" data-name="Group 24768" transform="translate(3495.144 -602)">
                                <path id="Path_2916" data-name="Path 2916"
                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                    transform="translate(-3495.144 602)" fill="#b5b5bf" />
                            </g>
                        </svg>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset text-primary">Home</span>
                    </a>
                </div>

                <!-- Categories -->
                <div class="col">
                    <a href="categories.html" class="text-secondary d-block text-center pb-2 pt-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g id="Group_25497" data-name="Group 25497" transform="translate(3373.432 -602)">
                                <path id="Path_2917" data-name="Path 2917"
                                    d="M126.713,0h-5V5a2,2,0,0,0,2,2h3a2,2,0,0,0,2-2V2a2,2,0,0,0-2-2m1,5a1,1,0,0,1-1,1h-3a1,1,0,0,1-1-1V1h4a1,1,0,0,1,1,1Z"
                                    transform="translate(-3495.144 602)" fill="#91919c" />
                                <path id="Path_2918" data-name="Path 2918"
                                    d="M144.713,18h-3a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h5V20a2,2,0,0,0-2-2m1,6h-4a1,1,0,0,1-1-1V20a1,1,0,0,1,1-1h3a1,1,0,0,1,1,1Z"
                                    transform="translate(-3504.144 593)" fill="#91919c" />
                                <path id="Path_2919" data-name="Path 2919"
                                    d="M143.213,0a3.5,3.5,0,1,0,3.5,3.5,3.5,3.5,0,0,0-3.5-3.5m0,6a2.5,2.5,0,1,1,2.5-2.5,2.5,2.5,0,0,1-2.5,2.5"
                                    transform="translate(-3504.144 602)" fill="#91919c" />
                                <path id="Path_2920" data-name="Path 2920"
                                    d="M125.213,18a3.5,3.5,0,1,0,3.5,3.5,3.5,3.5,0,0,0-3.5-3.5m0,6a2.5,2.5,0,1,1,2.5-2.5,2.5,2.5,0,0,1-2.5,2.5"
                                    transform="translate(-3495.144 593)" fill="#91919c" />
                            </g>
                        </svg>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset ">Categories</span>
                    </a>
                </div>

                <!-- Cart -->
                <div class="col-auto">
                    <a href="cart.html" class="text-secondary d-block text-center pb-2 pt-3 px-3 ">
                        <span class="d-inline-block position-relative px-2">
                            <svg id="Group_25499" data-name="Group 25499" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="16.001" height="16"
                                viewBox="0 0 16.001 16">
                                <defs>
                                    <clipPath id="clip-pathw">
                                        <rect id="Rectangle_1383" data-name="Rectangle 1383" width="16"
                                            height="16" fill="#91919c" />
                                    </clipPath>
                                </defs>
                                <g id="Group_8095" data-name="Group 8095" transform="translate(0 0)"
                                    clip-path="url(#clip-pathw)">
                                    <path id="Path_2926" data-name="Path 2926"
                                        d="M8,24a2,2,0,1,0,2,2,2,2,0,0,0-2-2m0,3a1,1,0,1,1,1-1,1,1,0,0,1-1,1"
                                        transform="translate(-3 -11.999)" fill="#91919c" />
                                    <path id="Path_2927" data-name="Path 2927"
                                        d="M24,24a2,2,0,1,0,2,2,2,2,0,0,0-2-2m0,3a1,1,0,1,1,1-1,1,1,0,0,1-1,1"
                                        transform="translate(-10.999 -11.999)" fill="#91919c" />
                                    <path id="Path_2928" data-name="Path 2928"
                                        d="M15.923,3.975A1.5,1.5,0,0,0,14.5,2h-9a.5.5,0,1,0,0,1h9a.507.507,0,0,1,.129.017.5.5,0,0,1,.355.612l-1.581,6a.5.5,0,0,1-.483.372H5.456a.5.5,0,0,1-.489-.392L3.1,1.176A1.5,1.5,0,0,0,1.632,0H.5a.5.5,0,1,0,0,1H1.544a.5.5,0,0,1,.489.392L3.9,9.826A1.5,1.5,0,0,0,5.368,11h7.551a1.5,1.5,0,0,0,1.423-1.026Z"
                                        transform="translate(0 -0.001)" fill="#91919c" />
                                </g>
                            </svg>
                        </span>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset ">
                            Cart
                            (<span class="cart-count">0</span>)
                        </span>
                    </a>
                </div>

                <!-- Notifications -->
                <div class="col">
                    <a href="users/login.html" class="text-secondary d-block text-center pb-2 pt-3 ">
                        <span class="d-inline-block position-relative px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.6" height="16"
                                viewBox="0 0 13.6 16">
                                <path id="ecf3cc267cd87627e58c1954dc6fbcc2"
                                    d="M5.488,14.056a.617.617,0,0,0-.8-.016.6.6,0,0,0-.082.855A2.847,2.847,0,0,0,6.835,16h0l.174-.007a2.846,2.846,0,0,0,2.048-1.1h0l.053-.073a.6.6,0,0,0-.134-.782.616.616,0,0,0-.862.081,1.647,1.647,0,0,1-.334.331,1.591,1.591,0,0,1-2.222-.331H5.55ZM6.828,0C4.372,0,1.618,1.732,1.306,4.512h0v1.45A3,3,0,0,1,.6,7.37a.535.535,0,0,0-.057.077A3.248,3.248,0,0,0,0,9.088H0l.021.148a3.312,3.312,0,0,0,.752,2.2,3.909,3.909,0,0,0,2.5,1.232,32.525,32.525,0,0,0,7.1,0,3.865,3.865,0,0,0,2.456-1.232A3.264,3.264,0,0,0,13.6,9.249h0v-.1a3.361,3.361,0,0,0-.582-1.682h0L12.96,7.4a3.067,3.067,0,0,1-.71-1.408h0V4.54l-.039-.081a.612.612,0,0,0-1.132.208h0v1.45a.363.363,0,0,0,0,.077,4.21,4.21,0,0,0,.979,1.957,2.022,2.022,0,0,1,.312,1h0v.155a2.059,2.059,0,0,1-.468,1.373,2.656,2.656,0,0,1-1.661.788,32.024,32.024,0,0,1-6.87,0,2.663,2.663,0,0,1-1.7-.824,2.037,2.037,0,0,1-.447-1.33h0V9.151a2.1,2.1,0,0,1,.305-1.007A4.212,4.212,0,0,0,2.569,6.187a.363.363,0,0,0,0-.077h0V4.653a4.157,4.157,0,0,1,4.2-3.442,4.608,4.608,0,0,1,2.257.584h0l.084.042A.615.615,0,0,0,9.649,1.8.6.6,0,0,0,9.624.739,5.8,5.8,0,0,0,6.828,0Z"
                                    fill="#91919b" />
                            </svg>
                        </span>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset ">Notifications</span>
                    </a>
                </div>

                <!-- Account -->
                <div class="col">
                    <a href="users/login.html" class="text-secondary d-block text-center pb-2 pt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g id="Group_8094" data-name="Group 8094" transform="translate(3176 -602)">
                                <path id="Path_2924" data-name="Path 2924"
                                    d="M331.144,0a4,4,0,1,0,4,4,4,4,0,0,0-4-4m0,7a3,3,0,1,1,3-3,3,3,0,0,1-3,3"
                                    transform="translate(-3499.144 602)" fill="#b5b5bf" />
                                <path id="Path_2925" data-name="Path 2925"
                                    d="M332.144,20h-10a3,3,0,0,0,0,6h10a3,3,0,0,0,0-6m0,5h-10a2,2,0,0,1,0-4h10a2,2,0,0,1,0,4"
                                    transform="translate(-3495.144 592)" fill="#b5b5bf" />
                            </g>
                        </svg>
                        <span class="d-block mt-1 fs-10 fw-600 text-reset">My Account</span>
                    </a>
                </div>

            </div>
        </div>

        <!-- User Side nav -->

    </div>

    <!-- cookies agreement -->

    <!-- website popup -->

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        function confirm_modal(delete_url) {
            jQuery('#confirm-delete').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>

                <div class="modal-body">
                    <p>Delete confirmation message</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0"
                        data-dismiss="modal">Cancel</button>
                    <a id="delete_link" class="btn btn-danger btn-ok rounded-0">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fw-600">Login</h6>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <form class="form-default" role="form" action="https://oibazar.com/users/login/cart"
                            method="POST">
                            <input type="hidden" name="_token" value="0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1">
                            <!-- Phone -->
                            <div class="form-group phone-form-group mb-1">
                                <input type="tel" id="phone-code" class="form-control" value=""
                                    placeholder="" name="phone" autocomplete="off">
                            </div>
                            <!-- Country Code -->
                            <input type="hidden" name="country_code" value="">
                            <!-- Email -->
                            <div class="form-group email-form-group mb-1 d-none">
                                <input type="email" class="form-control " value="" placeholder="Email"
                                    name="email" id="email" autocomplete="off">
                            </div>
                            <!-- Use Email Instead -->
                            <div class="form-group text-right">
                                <button class="btn btn-link p-0 text-primary" type="button"
                                    onclick="toggleEmailPhone(this)"><i>*Use Email Instead</i></button>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <input type="password" name="password"
                                    class="form-control h-auto rounded-0 form-control-lg" placeholder="Password">
                            </div>

                            <!-- Remember Me & Forgot password -->
                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember">
                                        <span class=opacity-60>Remember Me</span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="password/reset.html"
                                        class="text-reset opacity-60 hov-opacity-100 fs-14">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="mb-5">
                                <button type="submit"
                                    class="btn btn-primary btn-block fw-600 rounded-0">Login</button>
                            </div>
                        </form>

                        <!-- Register Now -->
                        <div class="text-center mb-3">
                            <p class="text-muted mb-0">Dont have an account?</p>
                            <a href="users/registration.html">Register Now</a>
                        </div>

                        <!-- Social Login -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bid Modal -->
    <div class="modal fade" id="bid_for_product" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bid For Product <small
                            id="min_bid_amount"></small>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="https://oibazar.com/auction_product_bids" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1">
                        <input type="hidden" name="product_id" id="bid_product_id" value="">
                        <div class="form-group">
                            <label class="form-label">
                                Place Bid Price
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-group">
                                <input type="number" step="0.01" class="form-control form-control-sm"
                                    name="amount" id="bid_amount" min="" placeholder="Enter Amount"
                                    required>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit"
                                class="btn btn-sm btn-primary transition-3d-hover mr-1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function account_delete_confirm_modal(delete_url) {
            jQuery('#account_delete_confirm').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('account_delete_link').setAttribute('href', delete_url);
        }
    </script>

    <div class="modal fade" id="account_delete_confirm" tabindex="-1" role="dialog"
        aria-labelledby="account_delete_confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header d-block py-4">
                    <div class="d-flex justify-content-center">
                        <span class="avatar avatar-md mb-2 mt-2">
                            <img src="/asset/frontend/assets/img/avatar-place.png"
                                class="image rounded-circle m-auto"
                                onerror="this.onerror=null;this.src='public/assets/img/avatar-place.png';">
                        </span>
                    </div>
                    <h4 class="modal-title text-center fw-700" id="account_delete_confirmModalLabel"
                        style="color: #ff9819;">Delete Your Account</h4>
                    <p class="fs-16 fw-600 text-center" style="color: #8d8d8d;">Warning: You cannot undo this action
                    </p>
                </div>

                <div class="modal-body pt-3 pb-5 px-xl-5">
                    <p class="text-danger mt-3"><i><strong>Note:&nbsp;Don&#039;t Click to any button or don&#039;t do
                                any action during account Deletion, it may takes some times.</strong></i></p>
                    <p class="fs-14 fw-700" style="color: #8d8d8d;">Deleting Account Means:</p>
                    <div class="row bg-soft-warning py-2 mb-2 ml-0 mr-0 border-left border-width-2 border-danger">
                        <div class="col-1">
                            <img src="/asset/frontend/assets/img/warning.png" class="h-20px">
                        </div>
                        <div class="col">
                            <p class="fw-600 mb-0">If you create any classified ptoducts, after deleting your account,
                                those products will no longer in our system</p>
                        </div>
                    </div>
                    <div class="row bg-soft-warning py-3 ml-0 mr-0 border-left border-width-2 border-danger">
                        <div class="col-1">
                            <img src="/asset/frontend/assets/img/warning.png" class="h-20px">
                        </div>
                        <div class="col">
                            <p class="fw-600 mb-0">After deleting your account, wallet balance will no longer in our
                                system</p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0 w-150px"
                        data-dismiss="modal">Cancel</button>
                    <a id="account_delete_link" class="btn btn-danger rounded-0 w-150px">Delete Account</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
            role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button"
                    class="close absolute-top-right btn-icon close z-1 btn-circle bg-gray mr-2 mt-2 d-flex justify-content-center align-items-center"
                    data-dismiss="modal" aria-label="Close"
                    style="background: #ededf2; width: calc(2rem + 2px); height: calc(2rem + 2px);">
                    <span aria-hidden="true" class="fs-24 fw-700" style="margin-left: 2px;">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="/asset/frontend/assets/js/vendors.js"></script>
    <script src="/asset/frontend/assets/js/aiz-cored17a.js?v=4288"></script>


    <script></script>

    <script>
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('category/nav-element-list.html', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });

            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('language.html', {
                            _token: AIZ.data.csrf,
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('currency.html', {
                            _token: AIZ.data.csrf,
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var searchKey = $('#search').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('ajax-search.html', {
                    _token: AIZ.data.csrf,
                    search: searchKey
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        $(".aiz-user-top-menu").on("mouseover", function(event) {
                $(".hover-user-top-menu").addClass('active');
            })
            .on("mouseout", function(event) {
                $(".hover-user-top-menu").removeClass('active');
            });

        $(document).on("click", function(event) {
            var $trigger = $("#category-menu-bar");
            if ($trigger !== event.target && !$trigger.has(event.target).length) {
                $("#click-category-menu").slideUp("fast");;
                $("#category-menu-bar-icon").removeClass('show');
            }
        });

        function updateNavCart(view, count) {
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key) {
            $.post('cart/removeFromCart.html', {
                _token: AIZ.data.csrf,
                id: key
            }, function(data) {
                updateNavCart(data.nav_cart_view, data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "Item has been removed from cart");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function showLoginModal() {
            $('#login_modal').modal();
        }

        function addToCompare(id) {
            $.post('compare/addToCompare.html', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('#compare').html(data);
                AIZ.plugins.notify('success', "Item has been added to compare list");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            AIZ.plugins.notify('warning', "Please login first");
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('cart/show-cart-modal.html', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });

        function getVariantPrice() {
            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: 'https://oibazar.com/product/variant_price',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('.product-gallery-thumb .carousel-box').each(function(i) {
                            if ($(this).data('variation') && data.variation == $(this).data(
                                    'variation')) {
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.max_limit);
                        if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                            $('.buy-now').addClass('d-none');
                            $('.add-to-cart').addClass('d-none');
                            $('.out-of-stock').removeClass('d-none');
                        } else {
                            $('.buy-now').removeClass('d-none');
                            $('.add-to-cart').removeClass('d-none');
                            $('.out-of-stock').addClass('d-none');
                        }

                        AIZ.extra.plusMinus();
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {

            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://oibazar.com/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                        AIZ.extra.plusMinus();
                        AIZ.plugins.slickCarousel();
                        updateNavCart(data.nav_cart_view, data.cart_count);
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function buyNow() {

            if (checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: 'https://oibazar.com/cart/addtocart',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        if (data.status == 1) {
                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);
                            window.location.replace("cart.html");
                        } else {
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "Please choose all the options");
            }
        }

        function bid_single_modal(bid_product_id, min_bid_amount) {
            $('#login_modal').modal('show');
        }

        function clickToSlide(btn, id) {
            $('#' + id + ' .aiz-carousel').find('.' + btn).trigger('click');
            $('#' + id + ' .slide-arrow').removeClass('link-disable');
            var arrow = btn == 'slick-prev' ? 'arrow-prev' : 'arrow-next';
            if ($('#' + id + ' .aiz-carousel').find('.' + btn).hasClass('slick-disabled')) {
                $('#' + id).find('.' + arrow).addClass('link-disable');
            }
        }

        function goToView(params) {
            document.getElementById(params).scrollIntoView({
                behavior: "smooth",
                block: "center"
            });
        }

        function copyCouponCode(code) {
            navigator.clipboard.writeText(code);
            AIZ.plugins.notify('success', "Coupon Code Copied");
        }

        $(document).ready(function() {
            $('.cart-animate').animate({
                margin: 0
            }, "slow");

            $({
                deg: 0
            }).animate({
                deg: 360
            }, {
                duration: 2000,
                step: function(now) {
                    $('.cart-rotate').css({
                        transform: 'rotate(' + now + 'deg)'
                    });
                }
            });

            setTimeout(function() {
                $('.cart-ok').css({
                    fill: '#d43533'
                });
            }, 2000);

        });
    </script>

    <script type="text/javascript">
        // Country Code
        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if (country.iso2 == 'bd') {
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "https://oibazar.com/public/assets/js/intlTelutils.js?1590403638580",
            onlyCountries: ["BD"],
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if (selectedCountryData.iso2 == 'bd') {
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;
            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el) {
            if (isPhoneShown) {
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                $('input[name=phone]').val(null);
                isPhoneShown = false;
                $(el).html('*Use Phone Instead');
            } else {
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                $('input[name=email]').val(null);
                isPhoneShown = true;
                $(el).html('<i>*Use Email Instead</i>');
            }
        }
    </script>

    <script>
        var acc = document.getElementsByClassName("aiz-accordion-heading");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $.post('home/section/featured.html', {
                _token: '0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1'
            }, function(data) {
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('home/section/best_selling.html', {
                _token: '0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1'
            }, function(data) {
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('home/section/auction_products.html', {
                _token: '0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1'
            }, function(data) {
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('home/section/home_categories.html', {
                _token: '0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1'
            }, function(data) {
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('home/section/best_sellers.html', {
                _token: '0qDCwl7abpH0QNNXt6ZOY1gdIP1toHjrcMQ3XBR1'
            }, function(data) {
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
</body>


</html>
