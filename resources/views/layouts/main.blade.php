<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('asset/css/font-face.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all" />

    <!-- Bootstrap CSS-->
    <link href="{{ asset('asset/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all" />

    <!-- Vendor CSS-->
    <link href="{{ asset('asset/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/wow/animate.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/slick/slick.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all" />
    <link href="{{ asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all" />

    <!-- Main CSS-->
    <link href="{{ asset('asset/css/theme.css') }}" rel="stylesheet" media="all" />

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('asset/images/icon/logo.png') }}">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/">
                            <img src="{{ asset('asset/images/icon/logo.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a class="js-arrow" href="/">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/artikel">
                                <i class="fas fa-copy"></i>Data Artikel</a>
                        </li>
                        <li>
                            <a href="/kategori">
                                <i class="fas fa-table"></i>Data Kategori</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('asset/images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{ request()->is('/') ? 'active' : null }}">
                            <a href="/">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="{{ request()->is('artikel') ? 'active' : null }}">
                            <a href="/artikel">
                                <i class="fas fa-copy"></i>Data Artikel</a>
                        </li>
                        <li class="{{ request()->is('kategori') ? 'active' : null }}">
                            <a href="/kategori">
                                <i class="fas fa-table"></i>Data Kategori</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('layouts.header')

            @yield('content')
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('asset/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('asset/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('asset/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('asset/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
<!-- end document-->