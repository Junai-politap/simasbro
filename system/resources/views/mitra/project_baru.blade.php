@extends('template.mitra')
@section('content')

@include('section.mitra')
    <section class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                @foreach($jadwal as $jadwal)
                                    @if((date('Y-m-d')) <= $jadwal->tutup)
                                        <a href="{{url('buat-project')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Buat Project Baru</a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-6">
                                <h3 class="card-title">Data Project</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>Nama Pengusul</th>
                                    <th>Judul Project</th>
                                    <th>Jenis Project</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_project as $project)
                                @if(($project->email) == $mitra->email)
                                @if(($project->status) == 1)
                                    <tr>
                                        <td class="text-center">{{ $project->nama_pengusul }}</td>
                                        <td class="text-center">{{ $project->judul_project }}</td>
                                        <td class="text-center">{{ $project->tipe_project }}</td>
                                        <td class="text-center">
                                            @if(($project->status) == 1)
                                                <p>Pengajuan Baru</p>
                                            @endif
                                            @if(($project->status_pengajuan) == 'Diterima')
                                                <p>Pengajuan Di Terima</p>
                                            @endif
                                        </td>  
                                        <td class="text-center">
                                            <div class="btn-group"> 

                                                <a href="{{url("show-project/$project->id_project")}}" class="btn btn-info"><i class="fa fa-check"></i> Lihat</a>

                                                <a href="{{url("edit-project/$project->id_project")}}" class="btn btn-warning"><i class="fa fa-check"></i> Edit</a>

                                                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="{{url("delete-project/$project->id_project")}}"  class="btn btn-danger"><i class="fa fa-check"></i> Hapus</a>
                                            </div>
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
