@extends('template.admin')
@section('content')
    @include('section.admin')
    @include('section.notif')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-lg">
                                        <i class="fa fa-calendar"></i> Tambah Event
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="card-title">Data event</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Aksi</th>
                                        <th>Judul Event</th>
                                        <th>Deskripsi</th>
                                        <th>Poto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_event as $event)
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('edit-event', $event->id_event) }}"
                                                        class="btn btn-info"> <i class="fa fa-info"></i> Edit</a>

                                                    <a class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                                        href="{{ url("deleteevent/$event->id_event") }}"><i
                                                            class="fas fa-trash"></i> Hapus</a>
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $event->judul_event }}</td>
                                            <td class="text-justify">{{ $event->deskripsi }}</td>

                                            <td class="text-center">
                                                <img src="{{ url('public/event', $event->poto) }}"
                                                    style="object-fit: cover; position: static; height: 200px; border-radius: 15px;">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Event</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-info">
                        <form class="form-horizontal" action="{{ url('storeevent') }}" method="post" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Event</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="judul_event" class="form-control"
                                            placeholder="Masukan Judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi" class="summernote" id="" cols="30" rows="10"></textarea>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Poto</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="poto" accept=".jpg, .png, .jpeg" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class=" card-footer">
                                <button class="btn btn-info"><i class="fa fa-times"></i> Batal</button>
                                <button class="btn btn-default float-right"><i class="fa fa-save"></i>
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
