<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="/asset/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Rupanti</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/asset/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>


        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::url() == url('/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="nav-header">MANAGEMENT</li>


                @can('banner-list')
                    <li class="nav-item">
                        <a href="{{ route('tests.index') }}"
                            class="nav-link {{ request()->is('admin/tests*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-image"></i>
                            <p>
                                Test
                            </p>
                        </a>
                    </li>
                @endcan

                @can('banner-list')
                    <li class="nav-item">
                        <a href="{{ route('packages.index') }}"
                            class="nav-link {{ request()->is('admin/packages*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-image"></i>
                            <p>
                                Package
                            </p>
                        </a>
                    </li>
                @endcan

                @can('receipt-list')
                    <li class="nav-item {{ request()->is('admin/receipts*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/receipts*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Receipt
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('receipt-list')
                                <li class="nav-item">
                                    <a href="{{ route('receipts.index') }}"
                                        class="nav-link {{ request()->is('admin/receipts') ? 'active' : '' }}">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Receipt List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('receipt-create')
                                <li class="nav-item">
                                    <a href="{{ route('receipts.create') }}"
                                        class="nav-link {{ request()->is('admin/receipts/create') ? 'active' : '' }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                <li class="nav-item {{ request()->is('admin/promocodes*') ? 'menu-open active' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/promocodes*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            Promo Code
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('promocodes.index') }}"
                                class="nav-link {{ request()->is('admin/promocodes') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Promo Code List</p>
                            </a>
                        </li>
                    </ul>
                </li>



                {{-- <li class="nav-header">PRODUCT MANAGEMENT</li>

                @can('banner-list')
                    <li class="nav-item {{ request()->is('admin/banners*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/banners*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-image"></i>
                            <p>
                                Banner
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('banners.index') }}"
                                    class="nav-link {{ request()->is('admin/banners') ? 'active' : '' }}">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Banner List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan



                @can('category-list')
                    <li class="nav-item {{ request()->is('admin/categories*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Caregory
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('category-list')
                                <li class="nav-item">
                                    <a href="{{ route('categories.index') }}"
                                        class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Category List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('category-create')
                                <li class="nav-item">
                                    <a href="{{ route('categories.create') }}"
                                        class="nav-link {{ request()->is('admin/categories/create') ? 'active' : '' }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan


                @can('brand-list')
                    <li class="nav-item {{ request()->is('admin/brands*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/brands*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>
                                Brands
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('brands.index') }}"
                                    class="nav-link {{ request()->is('admin/brands') ? 'active' : '' }}">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Brand List</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan


                @can('offer-list')
                    <li class="nav-item {{ request()->is('admin/offers*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/offers*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-percent"></i>
                            <p>
                                Offer
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('offers.index') }}"
                                    class="nav-link {{ request()->is('admin/offers') ? 'active' : '' }}">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Offer List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                --}}

                

                <li class="nav-header">STAFF Management</li>

                <li class="nav-item {{ request()->is('admin/doctors*') ? 'menu-open active' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/doctors*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>
                            Doctors
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('doctors.index') }}"
                                class="nav-link {{ request()->is('admin/doctors') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Doctor List</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item {{ request()->is('admin/employees*') ? 'menu-open active' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/employees*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Employees
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('employees.index') }}"
                                class="nav-link {{ request()->is('admin/employees') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Employee List</p>
                            </a>
                        </li>

                    </ul>
                </li>

                

                {{--

                @can('product-list')
                    <li class="nav-item {{ request()->is('admin/products*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/products*') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-cart-plus"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('product-list')
                                <li class="nav-item">
                                    <a href="{{ route('products.index') }}"
                                        class="nav-link {{ request()->is('admin/products') ? 'active' : '' }}">
                                        <i class="fas fa-list nav-icon"></i>
                                        <p>Product List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('product-create')
                                <li class="nav-item">
                                    <a href="{{ route('products.create') }}"
                                        class="nav-link {{ request()->is('admin/products/create') ? 'active' : '' }}">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                            <li class="nav-item">
                                <a href="{{ route('products.stock_alert') }}"
                                    class="nav-link {{ request()->is('admin/products/stock_alert') ? 'active' : '' }}">
                                    <i class="fas fa-exclamation-triangle nav-ico"></i>
                                    <p>&nbsp;Stock Alert</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @php
                    $hasZoneSettingsPermission =
                        auth()->user()->can('division-list') ||
                        auth()->user()->can('district-list') ||
                        auth()->user()->can('thana-list');
                @endphp

                <li class="nav-header {{ $hasZoneSettingsPermission ? '' : 'd-none' }}">ZONE SETTINGS</li>


                @can('division-list')
                    <li class="nav-item {{ request()->is('admin/divisions*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/divisions*') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-location-arrow"></i>
                            <p>
                                Division
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('division-list')
                                <li class="nav-item">
                                    <a href="{{ route('divisions.index') }}"
                                        class="nav-link {{ request()->is('admin/divisions') ? 'active' : '' }}">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Division List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('division-create')
                                <li class="nav-item">
                                    <a href="{{ route('divisions.create') }}"
                                        class="nav-link {{ request()->is('admin/divisions/create') ? 'active' : '' }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('district-list')
                    <li class="nav-item {{ request()->is('admin/districts*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/districts*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-map"></i>
                            <p>
                                District
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('district-list')
                                <li class="nav-item">
                                    <a href="{{ route('districts.index') }}"
                                        class="nav-link {{ request()->is('admin/districts') ? 'active' : '' }}">
                                        <i class="fas fa-list nav-icon"></i>
                                        <p>District List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('district-create')
                                <li class="nav-item">
                                    <a href="{{ route('districts.create') }}"
                                        class="nav-link {{ request()->is('admin/districts/create') ? 'active' : '' }}">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('thana-list')
                    <li class="nav-item {{ request()->is('admin/thanas*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/thanas*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-map-marker"></i>
                            <p>
                                Thana
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('thana-list')
                                <li class="nav-item">
                                    <a href="{{ route('thanas.index') }}"
                                        class="nav-link {{ request()->is('admin/thanas') ? 'active' : '' }}">
                                        <i class="fas fa-list nav-icon"></i>
                                        <p>Thana List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('thana-create')
                                <li class="nav-item">
                                    <a href="{{ route('thanas.create') }}"
                                        class="nav-link {{ request()->is('admin/thanas/create') ? 'active' : '' }}">
                                        <i class="fas fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan --}}



                <li class="nav-header">WEB SETTINGS</li>

                {{-- <li class="nav-item">
                    <a href="{{ route('media_index') }}"
                        class="nav-link {{ request()->is('admin/media*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Media</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('web_property.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Properties</p>
                    </a>
                </li> --}}

                @can('role-list')
                    <li class="nav-item {{ request()->is('admin/roles*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user-circle"></i>
                            <p>
                                Role
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('role-list')
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}"
                                        class="nav-link {{ request()->is('admin/roles') ? 'active' : '' }}">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Role List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('role-create')
                                <li class="nav-item">
                                    <a href="{{ route('roles.create') }}"
                                        class="nav-link {{ request()->is('admin/roles/create') ? 'active' : '' }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @can('user-list')
                    <li class="nav-item {{ request()->is('admin/users*') ? 'menu-open active' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>
                                user
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('user-list')
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}"
                                        class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>user List</p>
                                    </a>
                                </li>
                            @endcan
                            @can('user-create')
                                <li class="nav-item">
                                    <a href="{{ route('users.create') }}"
                                        class="nav-link {{ request()->is('admin/products/create') ? 'active' : '' }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Log Out</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>

    </div>

</aside>
