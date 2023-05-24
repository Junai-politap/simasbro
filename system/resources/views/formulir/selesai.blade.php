@extends('template.form')
@section('content')
    <br><br>
    <div class="register-box" style="width: 100%">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong class="text-center" style="font-size: 20px;">{{ $message }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-body register-card-body">
                <h1 class="text-center">Data Anda Sudah Direkam</h1>

                <p class="login-box-msg" style="font-size: 20px;">Salam PBL</p>

                <p class="login-box-msg">PBL Lebih Pasti</p>
            </div>

        </div>
        <div class="card-body register-card-body">
            <div class="row">
                <div class="col-3">
                    <p class="login-box-msg">Data Mining</p>
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
                <div class="col-3">
                    <p class="login-box-msg"> Kecerdasan Buatan</p>
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
                <div class="col-3">
                    <p class="login-box-msg">Sistem Pendukung Keputusan</p>
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
                <div class="col-3">
                    <p class="login-box-msg">Sistem Informasi Geografis</p>
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
@endsection
