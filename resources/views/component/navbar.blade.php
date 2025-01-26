<header id="header" class="header d-flex align-items-center sticky-top">
<div class="container position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
    <h1 class="sitename">Klasifikasi Naive Bayes</h1><span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
        <li><a href="{{ url('/dataset') }}">Dataset</a></li>
        {{-- <li><a href="{{ url('/data-latih') }}">Data Latih</a></li>
        <li><a href="{{ url('/data-soal') }}">Data Soal</a></li>
        <li><a href="{{ url('/uji-akurasi') }}">Uji Akurasi</a></li> --}}
        <li><a href="{{ url('/skrining-penyakit') }}">Skrining Penyakit</a></li>
        <li><a href="{{ url('/prediksi-penyakit') }}">Prediksi Penyakit</a></li>
        {{-- <li><a href="{{ url('/logout') }}">Keluar</a></li> --}}

        @guest
        <li><a href="{{ url('/login') }}">Masuk</a></li>
        @endguest
        @auth
            <li class="dropdown"><a href="#"><span>Hi, {{ Auth::user()->username }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Profil</a></li>
                <li>
                    <a href="#"href="{{ route('logout') }}"
                    onclick="event.preventDefault(); 
                    document.getElementById('logout-form').submit();" class="dropdown-item">
                    Keluar
                </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none; ">
                    @csrf
                </form>	
            </ul>
            </li>
        @endauth
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

</div>
</header>