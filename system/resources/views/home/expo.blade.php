@extends('template.home')
@section('content')
    <section id="about" style="margin-top: 5%; margin-bottom: 10%">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Ti9lDD7Pgw0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 content">
                    <h2>FGD (FOCUS GROUP DISCUSSION)</h2>
                    <h3>
                        Dalam Rangka Penyusunan Kurikulum Program Sarjana Terapan Berbasis Industri Untuk Mewujudkan Link
                        And Match Jurusan Teknik Informatika Politap Dengan DUDIKA Dalam Rangka Pembelajaran Berbasis
                        Project/Problem Magang Dosen, Magang Mahasiswa, dan Magang Dosen Praktisi Kolaborasi Penelitian dan
                        Pengabdian Kepada Masyarakat.
                    </h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>
                            Kegiatan Ini Dihadiri Oleh Direktur POLITAP dan DUDIKA
                        </li>
                        <li><i class="bi bi-check-circle"></i>
                            Kegiatan Ini di Laksanakan Di Nevada Hotel Ketapang, Mulai Dari Tanggal 16-17 November 2021.
                        </li>
                    </ul>
                </div>
                <div class="card" style="background-color: blue; border-radius: 10px; height: 50px;">
                    <div class="col-lg-12">
                        <p style="color: white; font-size: 30px; font-family: 'Times New Roman', Times, serif">
                            Kategori Bidang PBL</p>
                    </div>
                </div>
                <div class="card-box mt-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 about-img">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ url('public/home') }}/assets/img/iot.jpg"
                                            style="object-fit: cover; position: static; width: 100%; height: 150px; border-radius: 15px;">
                                    </div>
                                    <div class="col-lg-6">
                                        <p><strong style="font-size: 20px;"> 20 IoT </strong>
                                            <br> Hardware dan Software yang saling berperan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-img">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ url('public/home') }}/assets/img/mobile-web.jpg"
                                            style="object-fit: cover; position: static; width: 100%; height: 150px; border-radius: 15px;">
                                    </div>
                                    <div class="col-lg-6">
                                        <p><strong style="font-size: 20px;"> 15 Aplikasi Web & Mobile </strong>
                                            <br> Berbagai Aplikasi Berbasis Web Dll.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-img">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ url('public/home') }}/assets/img/animasi.jfif">
                                    </div>
                                    <div class="col-lg-6">
                                        <p><strong style="font-size: 20px;"> 10 Animasi & Videografi </strong>
                                            <br> Animasi 2D atau 3D dengan Cerita yang Menarik
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4 about-img">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ url('public/home') }}/assets/img/desain.png"
                                            style="object-fit: cover; position: static; width: 100%; height: 150px; border-radius: 15px;">
                                    </div>
                                    <div class="col-lg-6">
                                        <p><strong style="font-size: 20px;"> 20 Konsep Desain </strong>
                                            <br> Hasil Desain-Desain Yang Telah Dibuat
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-img">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ url('public/home') }}/assets/img/service.jpg"
                                            style="object-fit: cover; position: static; width: 100%; height: 150px; border-radius: 15px;">
                                    </div>
                                    <div class="col-lg-6">
                                        <p><strong style="font-size: 20px;"> 5 Layanan & Jasa </strong>
                                            <br> Perawatan Dan Perbaikan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-img">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ url('public/home') }}/assets/img/jaringan.jpg"
                                            style="object-fit: cover; position: static; width: 100%; height: 150px; border-radius: 15px;">
                                    </div>
                                    <div class="col-lg-6">
                                        <p><strong style="font-size: 20px;"> 5 Jaringan & CyberSecurity </strong>
                                            <br> Permasalahan Jaringan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
