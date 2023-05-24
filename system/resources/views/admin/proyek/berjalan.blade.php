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
                                    <h3 class="text-center">Data Proyek Yang Sedang Berjalan</h3>
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

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_project as $project)
                                        @if ($project->status == 2)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-default" data-toggle="modal"
                                                            data-target="#modal-xl{{ $project->id_project }}">
                                                            <span class="fa fa-industry"></span> Progress
                                                        </button>

                                                        <a href="{{ url("evaluasi/$project->id_project") }}"
                                                            class="btn btn-warning"> <i class="fa fa-edit"></i>
                                                            Evaluasi</a>

                                                        <a href="{{ url("proyek/show-berjalan/$project->id_project") }}"
                                                            class="btn btn-info"> <i class="fa fa-check"></i>
                                                            Detail</a>

                                                        <a href="{{ url("delete-project/$project->id_project") }}"
                                                            class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</a>

                                                    </div>
                                                    <div class="modal fade" id="modal-xl{{ $project->id_project }}">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="text-center">
                                                                        {{ $project->judul_project }}
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{ url('store-progress') }}" method="POST">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="card-body">
                                                                            <input type="text" class="form-control"
                                                                                name="id_project"
                                                                                value="{{ $project->id_project }}" hidden>
                                                                            <div class="form-group row">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-2 col-form-label">Nama
                                                                                    Progress</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" name="nama_progress"
                                                                                        class="form-control"
                                                                                        placeholder="Masukan Nama Progress">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="inputPassword3"
                                                                                    class="col-sm-2 col-form-label">Deskripsi
                                                                                    Progress</label>
                                                                                <div class="col-sm-10">
                                                                                    <textarea name="detail" cols="30" rows="10" class="summernote"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="">
                                                                                <button class="btn btn-info float-left">
                                                                                    <i class="fa fa-times"></i>
                                                                                    Batal
                                                                                </button>
                                                                                <button class="btn btn-default float-right">
                                                                                    <i class="fa fa-save"></i>
                                                                                    Simpan
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $project->mitra->nama_mitra }}</td>
                                                <td class="text-center">{{ $project->judul_project }}</td>

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
