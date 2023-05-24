@extends('template.home')
@section('content')

    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Proyek Baru</h2>
                <p>Program Studi Teknik Infromatika</p>
            </div>
            <div class="section-header">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-9">
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Judul Proyek</th>
                                        <th class="text-center"> Mitra</th>
                                        <th class="text-center"> Kluster Project</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_project as $project)
                                    @if(($project->status) == 1)
                                    <tr>
                                        <td>{{$loop->iteration}}</td> 
                                        <td>{{$project->judul_project}}</td>
                                        <td>{{$project->mitra->nama_mitra}}</td>
                                        <td>{{$project->kluster_project}}</td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3">
                            <h1 class="text-center">Tebaru</h1>
                            Berikut Ini Data Pengajuan Project Baru
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
