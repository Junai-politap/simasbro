@extends('template.admin')
@section('content')
    @include('section.admin')
    @include('section.notif')
    <style>
        .font-size38 {
            font-size: 38px;
        }

        .team-single-text .section-heading h4,
        .section-heading h5 {
            font-size: 36px
        }

        .team-single-text .section-heading.half {
            margin-bottom: 20px
        }

        @media screen and (max-width: 1199px) {

            .team-single-text .section-heading h4,
            .section-heading h5 {
                font-size: 32px
            }

            .team-single-text .section-heading.half {
                margin-bottom: 15px
            }
        }

        @media screen and (max-width: 991px) {

            .team-single-text .section-heading h4,
            .section-heading h5 {
                font-size: 28px
            }

            .team-single-text .section-heading.half {
                margin-bottom: 10px
            }
        }

        @media screen and (max-width: 767px) {

            .team-single-text .section-heading h4,
            .section-heading h5 {
                font-size: 24px
            }
        }


        .team-single-icons ul li {
            display: inline-block;
            border: 1px solid #02c2c7;
            border-radius: 50%;
            color: #86bc42;
            margin-right: 8px;
            margin-bottom: 5px;
            -webkit-transition-duration: .3s;
            transition-duration: .3s
        }

        .team-single-icons ul li a {
            color: #02c2c7;
            display: block;
            font-size: 14px;
            height: 25px;
            line-height: 26px;
            text-align: center;
            width: 25px
        }

        .team-single-icons ul li:hover {
            background: #02c2c7;
            border-color: #02c2c7
        }

        .team-single-icons ul li:hover a {
            color: #fff
        }

        .team-social-icon li {
            display: inline-block;
            margin-right: 5px
        }

        .team-social-icon li:last-child {
            margin-right: 0
        }

        .team-social-icon i {
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            font-size: 15px;
            border-radius: 50px
        }

        .padding-30px-all {
            padding: 30px;
        }

        .bg-light-gray {
            background-color: #f7f7f7;
        }

        .text-center {
            text-align: center !important;
        }

        img {
            max-width: 100%;
            height: auto;
        }


        .list-style9 {
            list-style: none;
            padding: 0
        }

        .list-style9 li {
            position: relative;
            padding: 0 0 15px 0;
            margin: 0 0 15px 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
        }

        .list-style9 li:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0
        }


        .text-sky {
            color: #02c2c7
        }

        .text-orange {
            color: #e95601
        }

        .text-green {
            color: #5bbd2a
        }

        .text-yellow {
            color: #f0d001
        }

        .text-pink {
            color: #ff48a4
        }

        .text-purple {
            color: #9d60ff
        }

        .text-lightred {
            color: #ff5722
        }

        a.text-sky:hover {
            opacity: 0.8;
            color: #02c2c7
        }

        a.text-orange:hover {
            opacity: 0.8;
            color: #e95601
        }

        a.text-green:hover {
            opacity: 0.8;
            color: #5bbd2a
        }

        a.text-yellow:hover {
            opacity: 0.8;
            color: #f0d001
        }

        a.text-pink:hover {
            opacity: 0.8;
            color: #ff48a4
        }

        a.text-purple:hover {
            opacity: 0.8;
            color: #9d60ff
        }

        a.text-lightred:hover {
            opacity: 0.8;
            color: #ff5722
        }

        .custom-progress {
            height: 10px;
            border-radius: 50px;
            box-shadow: none;
            margin-bottom: 25px;
        }

        .progress {
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            overflow: hidden;
            font-size: .75rem;
            background-color: #e9ecef;
            border-radius: .25rem;
        }


        .bg-sky {
            background-color: #02c2c7
        }

        .bg-orange {
            background-color: #e95601
        }

        .bg-green {
            background-color: #5bbd2a
        }

        .bg-yellow {
            background-color: #f0d001
        }

        .bg-pink {
            background-color: #ff48a4
        }

        .bg-purple {
            background-color: #9d60ff
        }

        .bg-lightred {
            background-color: #ff5722
        }

    </style>

    <div class="container-fluid">
        <div>
            <div class="row">
                @csrf
                <div class="col-lg-12">
                    <h4 class="font-size38 sm-font-size32 xs-font-size30">
                        <p style="text-align: center;">Detail Mitra DUDIKA</p>
                    </h4>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                    <div class="team-single-img" style="text-align: center;">
                        @foreach ($mitra as $mitra)
                            @if ($mitra->id == $project->id)
                                <img src="{{ url("public/$mitra->logo") }}">
                            @endif
                        @endforeach
                    </div>
                    <div class=" padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                        <h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600">
                            {{ $project->mitra->pemegang_akses }}
                        </h4>
                        <p class="sm-width-95 sm-margin-auto">
                            <i class="fa fa-phone"></i>
                            {{ $project->mitra->no_hp }}
                        </p>

                        <div class="margin-20px-top team-single-icons">
                            <ul class="no-margin">

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="team-single-text padding-50px-left sm-no-padding-left">
                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                            <p>{{ $project->mitra->nama_mitra }}</p>
                        </h4>
                        <p class="no-margin-bottom">
                        <p>{{ $project->mitra->alamat_mitra }}</p>
                        </p>
                        <p class="no-margin-bottom text-center">
                        <p>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                {{ $project->mitra->email }}
                            </a>
                        </p>
                        </p>
                        <br>
                        <div class="contact-info-section margin-40px-tb">
                            <ul class="list-style9 no-margin">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Industri/Sektor:</strong>
                                        </div>
                                        <div class="col-md-9 col-9">
                                            <p>{{ $project->mitra->sektor }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Tipe Organisasi:</strong>
                                        </div>
                                        <div class="col-md-9 col-9">
                                            <p>{{ $project->mitra->tipe_organisasi }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Tahun Operasi:</strong>
                                        </div>
                                        <div class="col-md-9 col-9">
                                            <p>
                                                Tahun {{ $project->mitra->tahun_operasi }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Jumlah Karyawan:</strong>
                                        </div>
                                        <div class="col-md-9 col-9">
                                            <p>{{ $project->mitra->jumlah_karyawan }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Website:</strong>
                                        </div>
                                        <div class="col-md-9 col-9">
                                            <p><a href="{{ $project->mitra->website }}"
                                                    target="_blank">{{ $project->mitra->website }}</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-info-section margin-40px-tb">
                            <ul class="list-style9 no-margin">
                                <li>
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Industri/Sektor:</strong>
                                        </div>
                                        <div class="col-md-9 col-9">
                                            <p>{{ $project->mitra->sektor }}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-lg-12 col-md-12" style="margin-left: 20px;">
                    <div class="team-single-text sm-no-padding-left">
                        <hr>
                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                            <p style="text-align: center;">Detail Project</p>
                        </h4>
                        <hr>
                        <div class="contact-info-section margin-40px-tb">
                            <ul class="list-style9 no-margin">
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Nama Pengusul:</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{ $project->nama_pengusul }}</p>
                                        </div>

                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Alamat Pengusul:</strong>
                                        </div>
                                        <div class="col-md-2">
                                            <p>{{ $project->alamat_pengusul }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">No Hp:</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{ $project->no_hp_pengusul }}</p>
                                        </div>

                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Email :</strong>
                                        </div>
                                        <div class="col-md-2">
                                            <p>{{ $project->email_pengusul }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Judul Project:</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{ $project->judul_project }}</p>
                                        </div>

                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Kluster Project:</strong>
                                        </div>
                                        <div class="col-md-2">
                                            <p>{{ $project->kluster_project }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Deskripsi Masalah:</strong>
                                        </div>
                                        <div class="col-md-4" style="text-align: justify;">
                                            <p style="text-align: justify;">
                                                {!! nl2br($project->deskripsi_masalah) !!}
                                            </p>
                                        </div>

                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Deskripsi Umum:</strong>
                                        </div>
                                        <div class="col-md-3" style="text-align: justify;">
                                            <p style="text-align: justify;">{!! nl2br($project->deskripsi_umum) !!}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Tipe Project:</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{ $project->tipe_project }}</p>
                                        </div>

                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Potensi HKI:</strong>
                                        </div>
                                        <div class="col-md-2">
                                            <p>{{ $project->potensi_hki }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Kompetensi Keahlian:</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{!! nl2br($project->kompetensi_keahlian) !!}</p>
                                        </div>

                                        <div class="col-md-2">
                                            <i class="fas fa-bookmark text-orange"></i>
                                            <strong style="color: black;">Status Pengajuan:</strong>
                                        </div>
                                        <div class="col-md-2">
                                            <p>
                                                @if ($project->status == 1)
                                                    Pengajuan Baru
                                                @endif
                                                @if ($project->status == 2)
                                                    Pengajuan Diterima
                                                @endif
                                                @if ($project->status == 3)
                                                    Pengajuan Selesai
                                                @endif

                                                @if ($project->status == 4)
                                                    Pengajuan Ditolak
                                                @endif
                                                /
                                                @if ($project->status_pengajuan == 'Diterima')
                                                    Pengajuan Diterima
                                                @endif

                                                @if ($project->status_pengajuan == 'Ditolak')
                                                    Pengajuan Ditolak
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
