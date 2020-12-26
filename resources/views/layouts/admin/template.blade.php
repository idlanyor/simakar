<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://smkmaarifkarangreja.online/media_library/images/deb9bc9f4d37db158509665da2e88634.png">
    <title>@yield('title')</title>
    @yield('cssatas')
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    @toastr_css
    @yield('cssbawah')

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos">SMK Ma'arif Karangreja</div>
            <div class="lds-pos">SMK Ma'arif Karangreja</div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
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
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin4">
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right ml-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light"
                            href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i>{{ __('  Logout') }}</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form"
                                    style="display: none;">
                                    @csrf
                                </form>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('dashboard') }}" aria-expanded="false"><i
                                    class="fab fa-windows"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="fas fa-database"></i><span
                                    class="hide-menu">Induk Data</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('kelas.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen
                                            Kelas</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('mapel.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen Mata
                                            Pelajaran</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('guru.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen Guru
                                            &
                                            Karyawan</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('siswa.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen
                                            Siswa</span></a></li>
                                <li class="sidebar-item"><a href="{{ route('user.index') }}" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Manajemen
                                            User</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="fab fa-wordpress-simple"></i><span class="hide-menu">CMS Website</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Kategori</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Posting
                                            Artikel</span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">File
                                            Manager</span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Feed
                                            Back</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-school"></i><span
                                    class="hide-menu">PPDB</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pengaturan
                                            PPDB</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Calon Peserta
                                            Didik Baru</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Proses
                                            Seleksi</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pendaftar
                                            Diterima</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pendaftar Tidak
                                            Diterima</span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Percetakan</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-move-resize-variant"></i><span
                                    class="hide-menu">Pembiayaan</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Dashboard</span></a></li>
                                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Data Tagihan
                                            Siswa</span></a></li>
                                <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pembantu
                                            Kas</span></a></li>
                                <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Setting</span></a></li>
                                <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Cetak</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-cash-multiple"></i><span class="hide-menu">E Voting</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Pemilih</span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Kandidat</span></a></li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Penghitungan
                                            Suara</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-desktop-mac"></i><span
                                    class="hide-menu">CBT Online</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Mata Pelajaran
                                            -
                                            Guru</span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Peserta
                                            Ujian</span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Bank
                                            Soal</span></a></li>
                                <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Analisa</span></a>
                                </li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Percetakan</span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Setting
                                            Ujian</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span
                                    class="hide-menu"> Settings</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('settings.source') }}"
                                        class="sidebar-link"><i class="mdi mdi-arrow-right-bold"></i><span
                                            class="hide-menu">Source</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Informasi
                                            Sekolah</span></a></li>
                                <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-bold"></i><span class="hide-menu">Pengaturan
                                            lain</span></a></li>
                            </ul>
                        </li>
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
                        <div class="ml-8auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item float-right"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('bread')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer text-center">
                A Small Masterpiece from<a href=""> Roynaldi </a> for <a href="https://www.smkmaarifkarangreja.online">
                    SMK Ma'arif Karangreja </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
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

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}""></script>
    <script src=" {{ asset('dist/js/jquery.ui.touch-punch-improved.js') }}""></script>
    <script src="{{ asset('dist/js/jquery-ui.min.js') }}""></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=" {{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}""></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=" {{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/calendar/cal-init.js') }}"></script>

    <!-- Charts js Files -->
    @yield('jsatas')
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>
    @yield('jsbawah')
</body>
{{-- @jquery --}}
@toastr_js
@toastr_render

</html>
