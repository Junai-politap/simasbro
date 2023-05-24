@extends('template.admin')
@section('content')
    @include('section.admin')
    @include('section.notif')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 style="text-align: center;"> Data Mitra</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">A. Mitra Internal</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('storeinternal') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Mitra </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Mitra DUDIKA"
                                        name="nama_mitra">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Alamat Mitra DUDIKA"
                                        name="alamat_mitra">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email </label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email Mitra DUDIKA"
                                        name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password </label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" placeholder="Password Akun"
                                        name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Confir Password </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Confirmasi Password Akun"
                                        name="confir_password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pemegang Akses </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Pemegang Akses Sistem"
                                        name="pemegang_akses">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Hp </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nomor HandPhone " name="no_hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Logo/Foto </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control custom-file-input" name="logo"
                                        accept=".jpg, .png, .jpeg" id="customFileLang" lang="es">
                                    <label class="custom-file-label" for="customFileLang"> Logo Mitra DUDIKA</label>
                                </div>
                            </div>
                            <button type="reset" class="btn btn-info"><i class="fa fa-times"></i> Batal</button>
                            <button class="btn btn-primary float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">B. Mitra Eksternal</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('storeeksternal') }}" method="post" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Mitra </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Mitra DUDIKA"
                                        name="nama_mitra">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Alamat Mitra DUDIKA"
                                        name="alamat_mitra">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email </label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email Mitra DUDIKA"
                                        name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password </label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" placeholder="Password Akun"
                                        name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Confir Password </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Confirmasi Password Akun"
                                        name="confir_password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pemegang Akses </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Pemegang Akses Sistem"
                                        name="pemegang_akses">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Hp </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nomor HandPhone " name="no_hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Logo/Foto </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control custom-file-input" name="logo"
                                        accept=".jpg, .png, .jpeg" id="customFileLang" lang="es">
                                    <label class="custom-file-label" for="customFileLang"> Logo Mitra DUDIKA</label>
                                </div>
                            </div>
                            <button type="reset" class="btn btn-info"><i class="fa fa-times"></i> Batal</button>
                            <button class="btn btn-primary float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

        </div>

        <div class="row">
            <div class="col-lg-6 col-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">C. Data Mitra Internal</h3>
                    </div>

                    <div class="card-body">
                        <div class="">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Project Aktif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mitra->where('jenis_mitra', 'Internal') as $mitra)
                                        <tr>
                                            <td class="text-center">{{ $mitra->nama_mitra }}</td>
                                            <td class="text-center">
                                                @foreach ($list_project as $project)
                                                    @if ($project->email == $mitra->email)
                                                        {{ $data_project->filter(function ($q) use ($project) {
                                                                return $project->email == $q->email;
                                                            })->count('id') }}
                                                    @endif
                                                @endforeach


                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">

                                                    <a href="{{ url("member/show/$mitra->id") }}"
                                                        class="btn btn-info"><i class="fa fa-info"></i> Lihat</a>
                                                    <a href="{{ url("member/edit/$mitra->id") }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                                        href="{{ url("memberdelete/$mitra->id") }}"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">D. Data Mitra Eksternal</h3>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Project Aktif</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mitra->where('jenis_mitra', 'Eksternal') as $mitra)
                                        <tr>
                                            <td class="text-center">{{ $mitra->nama_mitra }}</td>
                                            <td class="text-center">10 Project</td>
                                            <td class="text-center">
                                                <div class="btn-group">

                                                    <a href="{{ url("member/show/$mitra->id") }}"
                                                        class="btn btn-info"><i class="fa fa-info"></i> Lihat</a>
                                                    <a href="{{ url('member/edit', $mitra->id) }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                                        href="{{ url("memberdelete/$mitra->id") }}"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                </div>
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
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">E. Registrasi Mitra</h3>
                    </div>

                    <div class="card-body">
                        <div class="">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Alamat Mitra</th>
                                        <th>Email</th>
                                        <th>Pemegang Akses</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mitra as $mitra)
                                        @if ($mitra->status == 1)
                                            <tr>
                                                <td class="text-center">{{ $mitra->nama_mitra }}</td>
                                                <td class="text-center">{{ $mitra->alamat_mitra }}</td>
                                                <td class="text-center">{{ $mitra->email }}</td>
                                                <td class="text-center">{{ $mitra->pemegang_akses }}</td>
                                                <td class="text-center">
                                                    <div class="btn-group">

                                                        <form action="{{ url('konfir', $mitra->id) }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf

                                                            <input type="text" name="email" value="{{ $mitra->email }}"
                                                                hidden="">
                                                            <select name="jenis_mitra" class="form-control">
                                                                <option value="Internal">Internal</option>
                                                                <option value="Eksternal"> Eksternal</option>
                                                            </select>
                                                            <button class="btn btn-primary" style="margin-top: 2%;"><span
                                                                    class="fa fa-check"></span> Konfirmasi </button>
                                                        </form>
                                                    </div>
                                                    <div class="btn-group" style="margin-top: 2%;">
                                                        <a href="{{ url('member/detail', $mitra->id) }}"
                                                            class="btn btn-info"><i class="fa fa-info"></i>
                                                            Lihat</a>
                                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                                            href="{{ url("deletemember/$mitra->id") }}"
                                                            class="btn btn-danger"><i class="fa fa-trash"></i>
                                                            Hapus</a>
                                                    </div>
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
    </div>
@endsection
