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
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-lg">
                                        <i class="fa fa-user-plus"></i> Tambah Tim
                                    </button>
                                </div>
                                <div class="col-6">
                                    <h3 class="card-title">Data Anggota Tim PBL</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Aksi</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Poto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_tim as $tim)
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{url('tim/edit',  $tim->id_tim)}}" class="btn btn-info"> <i class="fa fa-info"></i> Edit</a>

                                                    <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" href="{{url("tim/delete/$tim->id_tim")}}"><i class="fas fa-trash"></i> Hapus</a>
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $tim->nip }}</td>
                                            <td class="text-center">{{ $tim->nama }}</td>
                                            <td class="text-center">{{ $tim->jabatan }}</td>
                                            <td class="text-center">
                                                <img src="{{ url('public/poto', $tim->poto) }}"
                                                    style="object-fit: cover; position: static; width: 80%; height: 220px; border-radius: 15px;">
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
                    <h4 class="modal-title">Tambah Anggota Tim</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-info">
                        <form class="form-horizontal" action="{{ url('storetim') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nip" class="form-control" placeholder="Masukan NIP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tugas</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tugas" class="form-control"  placeholder="Tugas">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggung Jawab</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tanggung_jawab" class="form-control" placeholder="Tanggung Jawab">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jabatan" class="form-control"    placeholder=" Jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No Telp</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_telp" class="form-control"    placeholder=" Nomor Telephone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Poto</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="poto" accept=".jpg, .png, .jpeg" class="form-control">
                                    </div>
                                </div>
                                
                                <div class=" card-footer">
                                    <button type="reset" class="btn btn-info">
                                        <i class="fa fa-times"></i> Batal
                                    </button>
                                    <button class="btn btn-default float-right">
                                        <i class="fa fa-save"></i>Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
