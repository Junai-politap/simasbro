@extends('template.admin')
@section('content')

@include('section.admin')
@include('section.notif')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-lg">
                                        <i class="fa fa-user-plus"></i> Tambah Prodi
                                    </button>
                                </div>
                                <div class="col-6">
                                    <h3 class="card-title">Data Prodi</h3>
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
                                        <th>Nama Prodi</th>
                                        <th>Poto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_prodi as $prodi)
                                        <tr>
                                            <td class="text-center">Aksi</td>
                                            <td class="text-center">{{ $prodi->nip }}</td>
                                            <td class="text-center">{{ $prodi->nama }}</td>
                                            <td class="text-center">{{ $prodi->jabatan }}</td>
                                            <td class="text-center">{{ $prodi->prodi }}</td>
                                            <td class="text-center">
                                                <img src="{{ url('public/prodi', $prodi->poto) }}"
                                                    style="object-fit: cover; position: static; width: 50%; height: 200px; border-radius: 15px;">
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
                    <h4 class="modal-title">Tambah Admin Prodi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-info">
                        <form class="form-horizontal" action="{{ url('storeprodi') }}" method="POST" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nip" class="form-control"
                                            placeholder="Masukan NIP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control"
                                            placeholder="Masukan Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jabatan" class="form-control"
                                            placeholder="Masukan Jabatan">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Prodi</label>
                                    <div class="col-sm-10">
                                        <select name="prodi" id="" class="form-control">
                                            <option value=""> Pilih Prodi</option>
                                            <option value="TEKNIK INFORMATIKA"> TEKNIK INFORMATIKA</option>
                                            <option value="TEKNIK ELEKTRO"> TEKNIK ELEKTRO</option>
                                            <option value="TEKNIK SIPIL"> TEKNIK SIPIL</option>
                                            <option value="TEKNIK PERTAMBANGAN"> TEKNIK PERTAMBANGAN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Poto</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="poto" accept=".jpg, .png, .jpeg" class="form-control"
                                           >
                                    </div>
                                </div>
                                
                                <div class=" card-footer">
                                    <button class="btn btn-info"><i class="fa fa-times"></i> Batal</button>
                                    <button class="btn btn-default float-right"><i class="fa fa-save"></i>Simpan
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
