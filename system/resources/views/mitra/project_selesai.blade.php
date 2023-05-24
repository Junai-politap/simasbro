@extends('template.mitra')
@section('content')
    @include('section.mitra')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <h3 class="card-title">Data Project</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Aksi</th>
                                        <th>Nama Mitra DUDIKA</th>
                                        <th>Alamat Mitra</th>
                                        <th>Nama Pemegang Akses</th>
                                        <th>Logo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_project as $project)
                                        @if ($project->email == $mitra->email)
                                            @if ($project->status == 4)
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a href="{{ url("show-project/$project->id_project") }}"
                                                                class="btn btn-info"><i class="fa fa-check"></i>
                                                                Lihat</a>

                                                        </div>
                                                    </td>
                                                    <td class="text-center">{{ $project->nama_mitra }}</td>
                                                    <td class="text-center">{{ $project->alamat_mitra }}</td>
                                                    <td class="text-center">{{ $project->pemegang_akses }}</td>
                                                    <td class="text-center">
                                                        <img src="{{ url('public/member', $project->logo) }}"
                                                            style="object-fit: cover; position: static; width: 50%; height: 200px; border-radius: 15px;">
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
s
