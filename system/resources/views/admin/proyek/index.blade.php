@extends('template.admin')
@section('content')
    @include('section.admin')
    @include('section.notif')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="card-title">Data Proyek Baru</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Aksi</th>
                                        <th>Nama Mitra</th>
                                        <th>Judul Project</th>
                                        <th> Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_project as $project)
                                        @if ($project->status == 1)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ url("proyek/$project->id_project") }}"
                                                            class="btn btn-info"> <i class="fa fa-check"></i>
                                                            Detail</a>
                                                        <form action="{{ url('setuju', $project->id_project) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button class="btn btn-default"><i class="fa fa-check"></i>
                                                                Setuju</button>
                                                        </form>

                                                        <form action="{{ url('tolak', $project->id_project) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button class="btn btn-danger"><i class="fa fa-times"></i>
                                                                Tolak</button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $project->mitra->nama_mitra }}</td>
                                                <td class="text-center">{{ $project->judul_project }}</td>
                                                <td class="text-center">
                                                    @if ($project->status == 1)
                                                        <p>Pengajuan Baru</p>
                                                    @endif

                                                    @if ($project->status == 2)
                                                        <p>Proyek Di Setujui</p>
                                                    @endif

                                                    @if ($project->status == 3)
                                                        <p>Peroyek Di Tolak</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
