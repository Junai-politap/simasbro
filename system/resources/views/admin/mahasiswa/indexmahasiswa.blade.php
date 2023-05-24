@extends('template.admin')
@section('content')
    @include('section.admin')
    @include('section.notif')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 style="text-align: center;"> Data Mahasiswa</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 style="text-align: center; font-size: 20px;">Tambah Data Mahasiswa</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('#') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NPM </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nomor Pokok Mahasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Mahasiswa </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Mahasiswa">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Mahasiswa </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" placeholder="Nama Mahasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jurusan </label>
                                <div class="col-sm-9">
                                    <select name="" id="" class="form-control">
                                        <option value=""> Pilih Jurusan Mahasiswa</option>
                                        <option value=""> Sistem Informasi</option>
                                        <option value="">Teknik Informatika</option>
                                        <option value=""> Rekayasa Perangkat Lunak</option>
                                        <option value=""> Multimedia</option>
                                        <option value=""> Jaringan Komputer</option>
                                        <option value=""> Manajemen Informatika</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-3">
                                    <input type="radio" name="" id=""> Laki-Laki
                                </div>

                                <div class="col-md-4">
                                    <input type="radio" name="" id=""> Perempuan
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Mahasiswa </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Alamat Mahasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-info"><i class="fa fa-times"></i>
                                        Batal</button>
                                </div>
                                <div class="col-md-3">

                                    <button class="btn btn-primary float-right"><i
                                            class="fa fa-save"></i>Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card card-primary">
                    <div class="card-header mb-2">
                        <h3 class="card-title"> Data Mahasiswa</h3>
                    </div>
                    <div class="card">

                        <div class="btn-group">
                            <td>
                                <a href="" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                <a href="" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                <a href="" class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</a>
                                <a href="" class="btn btn-default"><span class="fa fa-times"></span> Keluar</a>

                            </td>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th class="text-center">NPM</th>
                                        <th class="text-center">Nama Mahasiswa</th>
                                        <th class="text-center">Jurusan</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center"> Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
