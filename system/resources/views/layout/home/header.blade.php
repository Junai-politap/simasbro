<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-globe d-flex align-items-center"><a href="http://simadu.politap.ac.id"
                    target="_blank">simadu.politap.ac.id</a></i>

        </div>
        <div class="social-links d-none d-md-flex align-items-center">

            <a href="https://www.facebook.com/informatika.politap" target="_blank" class="facebook"><i
                    class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/informatika.politap" target="_blank" class="instagram"><i
                    class="bi bi-instagram"></i></a>
            <a href="{{ url('login') }}" class="linkedin"> Login <i class="bi bi-box-arrow-right"></i></a>
        </div>
    </div>
</section>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
        <div id="logo">
            <h1><a href="{{ url('/') }}">SIMA<span>DU</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ checkRouteActive('/') }}" href="{{ url('/') }}">Home</a></li>
                <li class="dropdown"><a href="#"><span>PBL</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('pbl') }}">Apa Itu PBL ?</a></li>
                        <li><a href="#">PBL Eco-System</a></li>
                        <li><a href="{{ url('expo') }}">PBL Expo</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Proyek</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('proyek-baru') }}">Proyek Baru</a></li>
                        <li><a href="{{ url('proyek-saat-ini') }}">Proyek Saat Ini</a></li>
                        <li class="dropdown"><a href="#"><span>Proyek Selesai</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Proyek Website</a></li>
                                <li><a href="#">Proyek Mobile</a></li>
                                <li><a href="#">Proyek Multimedia</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('buat-proyek') }}">Buat Proyek Baru</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ checkRouteActive('mitra') }}" href="{{ url('mitra') }}">Mitra
                        DUDIKA</a></li>
                <li><a class="nav-link scrollto {{ checkRouteActive('berita') }} "
                        href="{{ url('berita') }}">Berita</a></li>
                <li><a class="nav-link scrollto {{ checkRouteActive('event') }}" href="{{ url('event') }}">Event</a>
                </li>
                <li><a class="nav-link scrollto {{ checkRouteActive('tim-pbl') }}" href="{{ url('tim-pbl') }}">Tim
                        PBL</a></li>
                <li><a class="nav-link scrollto {{ checkRouteActive('contact') }}"
                        href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
