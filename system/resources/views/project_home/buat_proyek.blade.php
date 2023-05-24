@extends('template.home')
@section('content')

    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Buat Proyek Baru</h2>
                <p>Program Studi Teknik Infromatika</p>
            </div>
            <div class="box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container mt-3">
                            <p style="font-size: 20px;">
                                Jika Anda ingin membuat project baru anda harus memiliki akun sebagai member terlebih dahulu
                            </p><br>
                            <p style="font-size: 20px;">
                                Pendaftaran untuk membuat project baru akan dibuka pada tanggal 
                                @foreach($jadwal as $jadwal)
                                @if((date('Y-m-d')) <= $jadwal->tutup)
                                <strong>{{date("d-M-Y", strtotime($jadwal->buka))}}</strong> dan akan di tutup pada tanggal <strong>{{date("d-M-Y", strtotime($jadwal->tutup))}}</strong>
                                @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
