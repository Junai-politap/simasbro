@extends('template.home')
@section('content')

    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Data Mitra Internal</h2>
                <p>SISTEM INFORMASI TERPADU POLITAP</p>
            </div>
            <div class="">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-9">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center"> No</th>
                                        <th class="text-center">Nama Mitra</th>
                                        <th class="text-center">Proyek yang Aktif</th>

                                    </tr>
                                </thead> 
                                <tbody>
                                    @foreach($list_mitra->where('jenis_mitra', 'Internal') as $mitra)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$mitra->nama_mitra}} </td>
                                        <td class="text-center">
                                            10
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3">
                            <h1 class="text-just">Data Mitra Internal</h1>
                            Berikut Ini Adalah Daftar Data Mitra Politeknik Negeri Ketapang yang Bekerjasama Dengan Politap
                        </div>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Data Mitra Eksternal</h2>
                <p>SISTEM INFORMASI TERPADU POLITAP</p>
            </div>
            <div class="">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-9">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center"> No</th>
                                        <th class="text-center">Nama Mitra</th>
                                        <th class="text-center">Proyek yang Aktif</th>

                                    </tr>
                                </thead> 
                                <tbody>
                                    @foreach($list_mitra->where('jenis_mitra', 'Eksternal') as $mitra)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$mitra->nama_mitra}} </td>
                                        <td class="text-center">
                                            10
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3">
                            <h1>Data Mitra Eksternal</h1>
                            Berikut Ini Adalah Daftar Data Mitra Politeknik Negeri Ketapang yang Bekerjasama Dengan Politap
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
