<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-adminassets-path="../adminassets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>EdugotAdmin</title>

    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('adminassets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('adminassets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('adminassets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('adminassets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('../../assets/css/style.css') }}">

    <!-- Helpers -->
    <script src="{{ asset('adminassets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('adminassets/js/config.js') }}"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminassets/DataTables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('adminassets/css/styles.css') }}">
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <p class="display-7 text-primary mb-1 title-admin"><strong>EdugotAdmin</strong></p>
                            </div>
                            <div class="row">
                                <p class="fs-6">Admin</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    {{-- Produk --}}
                    <li class="menu-item {{ request()->is('product*') ? ' active' : '' }}">
                        <a href="{{ route('product.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-shopping-bag"></i>
                            <div>Produk</div>
                        </a>
                    </li>

                    {{-- Artikel --}}
                    <li class="menu-item {{ request()->is('article*') ? ' active' : '' }}">
                        <a href="{{ route('article.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-news"></i>
                            <div>Artikel</div>
                        </a>
                    </li>

                    {{-- Order --}}
                    <li class="menu-item {{ request()->is('order') ? ' active' : '' }}">
                        <a href="{{ route('order.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-notepad"></i>
                            <div>Penjualan</div>
                        </a>
                    </li>

                    {{-- Logout --}}
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Logout</span></li>
                    <li class="menu-item">
                        <form action="#" method="POST">
                            @csrf
                            <button type="submit" class="btn menu-link btn-logout">
                                <i class="menu-icon tf-icons bx bx-log-out"></i>
                                <div>Logout</div>
                            </button>
                        </form>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center header-admin"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <p class="fs-4 mt-0 mb-0 fw-bold text-white">EDUGOT ADMIN - CAPSTONE PROJECT</p>
                    </div>
                </nav>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js adminassets/vendor/js/core.js -->
    <script src="{{ asset('adminassets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('adminassets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('adminassets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('adminassets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('adminassets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- DataTables -->
    <script src="{{ asset('adminassets/DataTables/datatables.js') }}"></script>
    <!-- Script  -->
    @yield('script')
</body>

</html>
