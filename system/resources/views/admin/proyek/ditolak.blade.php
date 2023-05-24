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
                                    <h3 class="card-title">Data Proyek Yang Ditolak</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Aksi</th>
                                        <th>Nama Pengusul</th>
                                        <th>Nama Mitra</th>
                                        <th>Judul Project</th>
                                        <th>Tipe Project</th>
                                        <th>Kluster Project</th>
                                        <th> Status Project</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_project as $project)
                                        @if ($project->status == 4)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ url("proyek/show-selesai/$project->id_project") }}"
                                                            class="btn btn-info"> <i class="fa fa-check"></i>
                                                            Detail</a>

                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $project->nama_pengusul }}</td>
                                                <td class="text-center">{{ $project->mitra->nama_mitra }}</td>
                                                <td class="text-center">{{ $project->judul_project }}</td>
                                                <td class="text-center">{{ $project->tipe_project }}</td>
                                                <td class="text-center">{{ $project->kluster_project }}</td>
                                                <td class="text-center">{{ $project->status_pengajuan }}</td>
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
