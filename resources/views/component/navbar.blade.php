<header id="header" class="header d-flex align-items-center sticky-top">
<div class="container position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
    <h1 class="sitename">Klasifikasi Naive Bayes</h1><span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
        <li><a href="{{ url('/akun-perawat') }}">Data Perawat</a></li>
        <li><a href="{{ url('/data-latih') }}">Data Latih</a></li>
        <li><a href="{{ url('/data-soal') }}">Data Soal</a></li>
        <li><a href="{{ url('/uji-akurasi') }}">Uji Akurasi</a></li>
        <li><a href="{{ url('/hasil-klasifikasi') }}">Hasil Klasifikasi</a></li>
        <li><a href="{{ url('/logout') }}">Keluar</a></li>

        {{-- <li class="dropdown"><a href="about.html"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            <li><a href="team.html">Team</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
            </ul>
            </li>
        </ul>
        </li> --}}
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

</div>
</header>