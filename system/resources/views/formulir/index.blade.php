@extends('template.form')
@section('content')
    <div class="register-box" style="width: 100%">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong class="text-center" style="font-size: 20px;">{{ $message }}</strong>
            </div>
        @endif
        <form action="{{ url('store-formulir') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Formulir Pendaftaran Mata Kuliah Pilihan</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="NIM Mahasiswa" name="nim" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" required>
                    </div>

                    {{-- <div class="row">
                        <div class="col-4">
                            <label for="">
                                Mata Kuliah Pilihan
                            </label>

                        </div>

                        <div class="col-8">
                            <select name="mk" id="" class="form-control">
                                <option value=""> Pilih Mata Kuliah</option>
                                <option value="Data Mining"> Data Mining</option>
                                <option value="Kecerdasan Buatan"> Kecerdasan Buatan</option>
                                <option value="Sistem Pendukung Keputusan"> Sistem Pendukung Keputusan</option>
                                <option value="Sistem Informasi Geografis"> Sistem Informasi Geografis</option>
                            </select>
                        </div>
                    </div> --}}

                    {{-- <div class="social-auth-links">
                        <button class="btn btn-primary"> Kirim</button>
                    </div> --}}
                </div>

            </div>
            <div class="card-body register-card-body">
                <div class="row">
                    <div class="col-md-3">
                        @if ($mk_pilihan_1->sum('mining') > 0 && $mk_pilihan_1->sum('mining') <= 16)
                            <button class="btn btn-primary float-right" name="mining" value="1"> <span
                                    class="fa fa-plus"></span></button>
                        @endif
                        <h5 class="login-box-msg float-left">Data Mining</h5>
                        <div class="card-body register-card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">NIM </th>
                                        <th class="text-center">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mk_pilihan->where('mining', '1') as $mk_pilihan)
                                        <tr>
                                            <td class="text-center">{{ $mk_pilihan->nim }}</td>
                                            <td class="text-center">{{ $mk_pilihan->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-3">
                        @if ($mk_pilihan_2->sum('kecerdasan') > 0 && $mk_pilihan_2->sum('kecerdasan') <= 3)
                            <button class="btn btn-primary float-right" name="kecerdasan" value="1"> <span
                                    class="fa fa-plus"></span></button>
                        @endif
                        <h5 class="login-box-msg float-left"> Kecerdasan Buatan</h5>
                        <div class="card-body register-card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">NIM </th>
                                        <th class="text-center">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mk_pilihan->where('kecerdasan', '1') as $mk_pilihan)
                                        <tr>
                                            <td class="text-center">{{ $mk_pilihan->nim }}</td>
                                            <td class="text-center">{{ $mk_pilihan->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                        @if ($mk_pilihan_3->sum('spk') > 0 && $mk_pilihan_3->sum('spk') <= 3)
                            <button class="btn btn-primary float-right" name="spk" value="1"> <span
                                    class="fa fa-plus"></span></button>
                        @endif
                        <h6 class="login-box-msg float-left">Sistem Pendukung Keputusan</h6>
                        <div class="card-body register-card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">NIM </th>
                                        <th class="text-center">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mk_pilihan->where('spk', '1') as $mk_pilihan)
                                        <tr>
                                            <td class="text-center">{{ $mk_pilihan->nim }}</td>
                                            <td class="text-center">{{ $mk_pilihan->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                        @if ($mk_pilihan_4->sum('sig') > 0 && $mk_pilihan_4->sum('sig') <= 3)
                            <button class="btn btn-primary float-right" name="sig" value="1"> <span
                                    class="fa fa-plus"></span></button>
                        @endif
                        <h5 class="login-box-msg float-left">Sistem Informasi Geografis</h5>
                        <div class="card-body register-card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">NIM </th>
                                        <th class="text-center">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mk_pilihan->where('sig', '1') as $mk_pilihan)
                                        <tr>
                                            <td class="text-center">{{ $mk_pilihan->nim }}</td>
                                            <td class="text-center">{{ $mk_pilihan->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
