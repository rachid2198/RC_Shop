<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.ico') }}">
    <title>DZ RC modélisme</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/toastr/build/toastr.min.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c0dfc42c32.js" crossorigin="anonymous"></script>

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10 mr-3 d-flex align-items-center">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('images/logo/logo-small.png') }}" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text d-flex align-items-center ">
                            <!-- dark Logo text -->
                            <h3 class="m-auto">RC Admin</h3>

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                    </ul>

                    @auth
                        <ul class="navbar-nav float-right my-auto">
                            <h4 style="color: white">Bienvenue, {{ auth()->user()->name }}</h4>
                        </ul>
                    @endauth

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ asset('images/users/1.jpg') }}" alt="user" class="rounded-circle"
                                    width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i
                                            class="fa fa-power-off m-r-5 m-l-5"></i> déconnecter</button>
                                </form>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin/dashboard" aria-expanded="false"><i class="fa fa-tachometer-alt"></i><span
                                    class="hide-menu">Dashboard</span></a></li> --}}
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin/utilisateurs" aria-expanded="false"><i class="fa fa-users"></i><span
                                    class="hide-menu">Gestion des utilisateurs</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="fa fa-cube"></i><span
                                    class="hide-menu">Gestion des produits </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/admin/ajout-produit" class="sidebar-link"><i
                                            class="fa fa-plus-square"></i><span class="hide-menu"> Ajouter un produit
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/admin/liste-produits" class="sidebar-link"><i
                                            class="fa fa-list-alt"></i><span class="hide-menu"> Liste de produits
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin/categories" aria-expanded="false"><i class="fa fa-folder-open"></i><span
                                    class="hide-menu">Categories</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin/marques" aria-expanded="false"><i class="fa fa-tags"></i><span
                                    class="hide-menu">Marques</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin/wilayas" aria-expanded="false"><i class="fa fa-truck"></i><span
                                    class="hide-menu">Gestion des livraisons</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/admin/commandes" aria-expanded="false"><i class="fa fa-clipboard-list"></i><span
                                    class="hide-menu">Gestion des commandes</span></a></li>
                        {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/commandes" aria-expanded="false"><i class="fa fa-tags"></i><span class="hide-menu">Commandes</span></a></li> --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">@yield('title')</h3>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>

            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center" style="background-color: #eeeeee">
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('extra-libs/sparkline/sparkline.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('dist/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('dist/js/custom.min.js') }}"></script>
        <!--This page JavaScript -->
        <!-- <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script> -->
        <!-- Charts js Files -->
        <script src="{{ asset('libs/flot/excanvas.js') }}"></script>
        <script src="{{ asset('libs/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('libs/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('libs/flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('libs/flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('libs/flot/jquery.flot.crosshair.js') }}"></script>
        <script src="{{ asset('libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>
        <script src="{{ asset('libs/toastr/build/toastr.min.js') }}"></script>

        @yield('js')

        @include('partials._flash-message')
</body>

</html>
