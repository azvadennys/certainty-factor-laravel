<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{ asset('gambar/admin/favicon.png') }}">
    <link href="{{ asset('css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/owl-carousel/owl.theme.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/magnific-popup.css') }}" type="text/css" rel="stylesheet" media="all" />
    <link href="{{ asset('css/font.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/fontello.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/paging.css') }}" type="text/css" media="screen">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('aset/bootstrap.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('aset/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('aset/cinta.css') }}">
    <link rel="stylesheet" href="{{ asset('aset/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aset/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aset/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('aset/icheck/green.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('aset/jQuery-2.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('aset/bootstrap.js') }}"></script>
    <script src="{{ asset('aset/icheck/icheck.js') }}"></script>
    <script src="{{ asset('aset/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('aset/Flot/jquery.flot.js') }}"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{ asset('aset/Flot/jquery.flot.resize.js') }}"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{ asset('aset/Flot/jquery.flot.pie.js') }}"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="{{ asset('aset/Flot/jquery.flot.categories.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('aset/app.js') }}"></script>

</head>

<body id="pakarayam" class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b><i class="fa fa-contao" aria-hidden="true"></i>XS</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b><i class="fa fa-contao" aria-hidden="true"></i>hirexs 1.0</b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <!-- Right side menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            @auth
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('gambar/admin/admin.png') }}" class="rounded-circle"
                                            alt="User Image" style="width: 30px; height: 30px;">
                                        {{ ucfirst(auth()->user()->username) }}
                                        <span class="d-none d-sm-inline">{{ auth()->user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                        <li class="text-center px-3 py-2">
                                            <img src="{{ asset('gambar/admin/admin.png') }}" class="img-circle mb-2"
                                                alt="User Image" style="width: 60px; height: 60px;">
                                            <p class="mb-0">
                                                Login sebagai {{ ucfirst(auth()->user()->username) }}
                                                <small class="d-block">Pakar dari Chirexs 1.0</small>
                                            </p>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> <span>LogOut</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>

                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}"
                                        href="{{ route('login') }}">
                                        <i class="fa fa-sign-in"></i> <span>Login</span>
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header"></li>
                    <!-- Optionally, you can add icons to the links -->
                    @include('menu')
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 310px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible " role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Display validation errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>
                <div class="cinta">Copyright © 2024 - Made with <i class="fa fa-heart pulse"></i> by <a
                        href="#">Nabila Aulia Zalfa</a></div>
            </strong>
        </footer>
        <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
        <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
    </div><!-- ./wrapper -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>



3

</html>
