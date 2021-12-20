<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-textdirection="ltr" data-layout="semi-dark-layout">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    
    @include('include.header')

    @yield('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->


<body class="vertical-layout vertical-menu-modern navbar-floating    footer-static default" data-open="click"
    data-menu="vertical-menu-modern" data-col="default" data-framework="laravel" data-asset-path="index.html">
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow  ">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i
                                class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app/email.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app/calendar.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i
                                class="ficon" data-feather="calendar"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="sun"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                            data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>

                @include('include.notifiations')



                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user"
                        href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name fw-bolder">{{ Auth::user()->name }}</span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{asset('admin_assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                                height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="page/profile.html">
                            <i class="me-50" data-feather="user"></i> Profile
                        </a>
                        <a class="dropdown-item" href="app/email.html">
                            <i class="me-50" data-feather="mail"></i> Inbox
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="page/account-settings-account.html">
                            <i class="me-50" data-feather="settings"></i> Settings
                        </a>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="me-50" data-feather="power"></i> Logout
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand"
                        href="">
                        <span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <h2 class="brand-text">CRUD</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pe-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
                            data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        
        @include('include.sidebar')
    </div>
    <!-- END: Main Menu-->
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper ">


            <div class="content-body">

                @yield('content')

            </div>
        </div>

    </div>
    <!-- End: Content-->


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <!-- BEGIN: Footer-->
    <footer class="footer footer-light  footer-static">
        <p class="clearfix mb-0">
            <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script><a class="ms-25" href=""  target="_blank">Pixinvent</a>,
                <span class="d-none d-sm-inline-block">All rights Reserved</span>
            </span>
            <span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    @include('include.scripts')

    @yield('scripts')
</body>
</html>
