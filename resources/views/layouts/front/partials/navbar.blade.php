<nav class="navbar bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand ms-5 text-white" href="https://www.unp.ac.id/">
            <img src="{{ asset('images/LOGO UNIVERSITAS NEGERI PADANG.png') }}" height="55px" alt="">
            Universitas Negeri Padang
        </a>
        <ul class="list-unstyled d-flex flex-sm-row text-white mt-3">
            <li class="ms-3">Email : labterpadu@unp.ac.id</li>
            <li class="ms-3">CP 1 (Annisa) : 0822-8757-9638</li>
            <li class="ms-3">CP 2 (Febri) : 0853-56001235</li>
            <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/profile.php?id=100093953252930"><i
                        class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
            </li>
            <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/laboratoriumterpadu_unp/?hl=en"><i
                        class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            </li>
            <li class="ms-3"><a class="link-body-emphasis" href="https://x.com/LaborTerpaduUNP?s=20"><i
                        class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
            </li>
            <li class="ms-3"><a class="link-body-emphasis" href="https://www.tiktok.com/@laboratoriumterpaduunp"><i
                        class="fa-brands fa-tiktok" style="color: #ffffff;"></i></a>
            </li>
        </ul>
        
    </div>
</nav>
<nav class="navbar navbar-expand-lg shadow bg-white sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('beranda') }}">
            <img src="{{ asset('images/Logo-labdu.jpg') }}" width="350" height="50" class="object-fit-contain" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (Request::routeIs('beranda'))? 'active bg-primary text-light rounded-pill fw-bold ': '' }}"  href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ (Request::routeIs('profile.*'))? 'active bg-primary text-light rounded-pill fw-bold ': '' }}" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ (Request::routeIs('profile.sejarah'))? 'active text-decoration-underline ': '' }}" href="{{ route('profile.sejarah') }}">Sejarah</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('profile.visi'))? 'active text-decoration-underline ': '' }}" href="{{ route('profile.visi') }}">Visi, misi, dan tujuan</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('profile.struktur'))? 'active text-decoration-underline ': '' }}" href="{{ route('profile.struktur') }}">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ (Request::routeIs('informasiPengujian.*'))? 'active bg-primary text-light rounded-pill fw-bold': '' }}" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Informasi Pengujian
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ (Request::routeIs('informasiPengujian.tarik'))? 'active text-decoration-underline ': '' }}" href="{{ route('informasiPengujian.tarik') }}">Pengujian Tarik</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('informasiPengujian.tekan'))? 'active text-decoration-underline ': '' }}" href="{{ route('informasiPengujian.tekan') }}">Kuat Tekan</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('informasiPengujian.batubara'))? 'active text-decoration-underline ': '' }}" href="{{ route('informasiPengujian.batubara') }}">Batubara</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('informasiPengujian.xrd'))? 'active text-decoration-underline ': '' }}" href="{{ route('informasiPengujian.xrd') }}">XRD</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('informasiPengujian.kekerasan'))? 'active text-decoration-underline ': '' }}" href="{{ route('informasiPengujian.kekerasan') }}">Kekerasan Bahan</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('informasiPengujian.halal'))? 'active text-decoration-underline ': '' }}" href="{{ route('informasiPengujian.halal') }}">Uji Halal</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ (Request::routeIs('tentangKami.*'))? 'active bg-primary text-light rounded-pill fw-bold': '' }}" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ (Request::routeIs('tentangKami.laboratorium'))? 'active text-decoration-underline ': '' }}s" href="{{ route('tentangKami.laboratorium') }}">Laboratorium</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('tentangKami.fasilitas'))? 'active text-decoration-underline ': '' }}s" href="{{ route('tentangKami.fasilitas') }}">Fasilitas</a></li>
                        <li><a class="dropdown-item {{ (Request::routeIs('tentangKami.galeri'))? 'active text-decoration-underline ': '' }}s" href="{{ route('tentangKami.galeri') }}">Galeri</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (Request::routeIs('front.alur'))? 'active bg-primary text-light rounded-pill fw-bold ': '' }}" href="{{ route('front.alur') }}">Alur Pengujian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::routeIs('hubungiKami'))? 'active bg-primary text-light rounded-pill fw-bold ': '' }}" href="{{ route('hubungiKami') }}">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::routeIs('front.download'))? 'active bg-primary text-light rounded-pill fw-bold ': '' }}" href="{{ route('front.download') }}">Download</a>
                </li>
                <li class="nav-item bg-warning text-white rounded-pill shadow">
                    <a href="https://siladu.unp.ac.id/" class="nav-link">Siladu +</a>
                </li>
            </ul>
        </div>
    </div>
</nav>