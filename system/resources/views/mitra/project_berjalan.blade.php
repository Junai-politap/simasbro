@extends('template.mitra')
@section('content')

    @include('section.mitra')
    <section class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-5">

                            </div>
                            <div class="col-6">
                                <h3 class="card-title">Data Project Yang Sedang Berjalan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>Aksi</th>
                                    <th>Nama Pengusul</th>
                                    <th>Judul Project</th>
                                    <th>Jenis Project</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_project as $project)
                                    @if ($project->email == $mitra->email)
                                        @if ($project->status == 2)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ url("detail/$project->id_project") }}"
                                                            class="btn btn-info"><i class="fa fa-info"></i> Detail</a>

                                                        <a href="{{ url("progres/$project->id_project") }}"
                                                            class="btn btn-default"><span class="fa fa-industry"></span>
                                                            Progress</a>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $project->nama_pengusul }}</td>

                                                <td class="text-center">{{ $project->judul_project }}</td>
                                                <td class="text-center">{{ $project->tipe_project }}</td>
                                                <td class="text-center">

                                                    @if ($project->status_pengajuan == 'Diterima')
                                                        <p>Pengajuan Di Terima</p>
                                                    @endif
                                                </td>

                                            </tr>
                                        @endif
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
