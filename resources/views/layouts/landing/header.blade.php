<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo float-right"><a href="/">SMK Ma'arif Karangreja</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo mr-auto"><img src="https://smkmaarifkarangreja.online/media_library/images/deb9bc9f4d37db158509665da2e88634.png" alt="" class="img-fluid"></a> --}}

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li @yield('home')><a href="/">Home</a></li>
                <li class="drop-down"><a href="">Profil Sekolah</a>
                    <ul>
                        <li><a href="#">Sejarah Singkat</a></li>
                        <li><a href="#">Informasi Sekolah</a></li>
                        <li><a href="#">Visi & Misi Sekolah</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">Data Sekolah</a>
                    <ul>
                        <li><a href="#">Data Siswa</a></li>
                        <li><a href="#">Data Alumni</a></li>
                        <li class="drop-down"><a href="#">Daftar GTK</a>
                            <ul>
                                <li><a href="#">Guru</a></li>
                                <li><a href="#">Karyawan</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">Galeri</a>
                    <ul>
                        <li><a href="#">Kegiatan Sekolah</a></li>
                        <li class="drop-down"><a href="#">Kegiatan Kesiswaan</a>
                            <ul>
                                <li><a href="#">OSIS</a></li>
                                <li><a href="#">Pramuka</a></li>
                                <li><a href="#">IT Komputer</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">PPDB <?=date('Y') ?></a>
                    <ul>
                        <li><a href="#">Informasi & Alur Pendaftaran</a></li>
                        <li><a href="#">Daftar</a></li>
                        <li><a href="{{ route('login') }}">Login Pendaftar</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">Pembiayaan</a>
                    <ul>
                        <li><a href="#">Tentang Aplikasi</a></li>
                        <li><a href="{{ route('login') }}">Informasi Tagihan Siswa</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="">File</a>
                    <ul>
                        <li><a href="#">Kurikulum</a></li>
                        <li><a href="#">Kesiswaan</a></li>
                        <li><a href="#">Materi Pembelajaran</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
