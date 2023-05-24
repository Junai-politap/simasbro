@extends('template.home')

@section('content')
    <section id="hero">
        <div class="hero-content" data-aos="fade-up">
            <h2 style="color: #0c2e8a;">SIMAS
                <span style="color: #0c2e8a; margin-left: -3%; text-decoration: underline;">BRO
                </span> 
            </h2>
            <p style="margin-top: -30px; font-size: 30px;">Sistem Informasi Manajemen Pembelajaran Berbasis Proyek</p>
            <div>
                <a href="{{ url('buat-proyek') }}" class="btn-get-started scrollto">Start a Project</a>
            </div>
        </div>

        <div class="hero-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('public/home/assets/img/1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('public/home/assets/img/2.png');"></div>
                <div class="swiper-slide" style="background-image: url('public/home/assets/img/3.png');"></div>
                <div class="swiper-slide" style="background-image: url('public/home/assets/img/4.png');"></div>
                <div class="swiper-slide" style="background-image: url('public/home/assets/img/5.png');"></div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{ url('public/home') }}/assets/img/5.jpg" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>WORKSHOP</h2>
                    <h3>Penyusunan Roadmap Peningkatan Kualitas Penelitian Dan Pengabdian Institusi, Program Studi dan Dosen
                        Jurusan Teknik Informatika</h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>
                            Kegiatan Ini Dihadiri Oleh Tamu dari PENS
                        </li>
                        <li><i class="bi bi-check-circle"></i>
                            Kegiatan Ini di Laksanakan Di Jurusan Teknik Infromatika, Mulai Dari Tanggal 29 September Sampai
                            Tanggal 2 Desember 2021
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
