@extends('template.mitra')
@section('content') 
@include('section.mitra')
@include('section.notif')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 style="text-align: center;">Edit Pengusulan Project Baru</h3>
                    </div>
                </div>
            </div>
        </div> 
        <form action="{{url('updateproject', $project->id_project)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">A. Informasi Data Diri Pengusul Project</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nama Pengusul" name="nama_pengusul" value="{{$project->nama_pengusul}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nomor Handphone Pengusul" name="no_hp_pengusul" value="{{$project->no_hp_pengusul}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Alamat Email Pengusul" name="email_pengusul" value="{{$project->email_pengusul}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Alamat Lengkap Pengusul" name="alamat_pengusul" value="{{$project->alamat_pengusul}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-6 col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">B.   Informasi Mitra Dudika Pengusul Project</h3>
                        </div>
                        <div class="card-body">
                            
                            <input type="text" name="id" value="{{$mitra->id}}" hidden="">
                            <input type="text" name="email" value="{{$mitra->email}}" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Mitra</label>
                                <div class="col-sm-10">
                                    <label class="form-label">{{$mitra->nama_mitra}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Mitra</label>
                                <div class="col-sm-10">
                                    <label class="form-label">{{$mitra->alamat_mitra}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Industri/Sektor</label>
                                <div class="col-sm-10">
                                    <label class="form-label">{{$mitra->sektor}}</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipe Organisasi</label>
                                <div class="col-sm-10">
                                    <label class="form-label">{{$mitra->tipe_organisasi}}</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun Operasi</label>
                                <div class="col-sm-10">
                                    <label class="form-label">{{$mitra->tahun_operasi}}</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah Karyawan</label>
                                <div class="col-sm-10">
                                    <label class="form-label">{{$mitra->jumlah_karyawan}}</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">C. Informasi Project</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul Project </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Judul Project" name="judul_project" value="{{$project->judul_project}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kluster Project</label>
                                <div class="col-sm-10">
                                    <select name="kluster_project" class="form-control">
                                        <option value="Teknik Informatika" 
                                            @if($project->kluster_project == "Teknik Informatika") selected @endif> Teknik Informatika
                                        </option>
                                        <option value="Teknik Elektro" 
                                            @if($project->kluster_project == "Teknik Elektro") selected @endif> Teknik Elektro
                                        </option>
                                        <option value="Teknik Mesin" 
                                            @if($project->kluster_project == "Teknik Mesin") selected @endif> Teknik Mesin
                                        </option>
                                        <option value="Manajemen Bisnis" 
                                            @if($project->kluster_project == "Manajemen Bisnis") selected @endif> Manajemen Bisnis
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Masalah</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi_masalah" class="summernote">{{$project->deskripsi_masalah}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Umum</label>
                                <div class="col-sm-10">
                                    <textarea name="deskripsi_umum" class="summernote">{{$project->deskripsi_umum}}</textarea>
                                </div>
                            </div>
 
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipe Project </label>
                                <div class="col-sm-10">
                                    <select name="tipe_project" class="form-control">
                                        <option value="{{$project->tipe_project}}"> {{$project->tipe_project}}</option>
                                        @foreach($tipe->where('jenis', 'Tipe') as $master)
                                            <option value="{{$master->nama}}"> {{$master->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Potensi HKI </label>
                                <div class="col-sm-10">
                                    <select name="potensi_hki" class="form-control">
                                        <option value="{{$project->potensi_hki}}"> {{$project->potensi_hki}}</option>
                                        @foreach($hki->where('jenis', 'HKI') as $master)
                                            <option value="{{$master->nama}}"> {{$master->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                                <div class="col-sm-10">
                                    <textarea name="kompetensi_keahlian" class="summernote">{{$project->kompetensi_keahlian}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="btn-group">
                            <button class="btn btn-info"><i class="fa fa-times"></i> Batal</button>
                            <button class="btn btn-default float-right"><i class="fa fa-save"></i>Simpan
                            </button>
                        </div>
                    </div>
                </div>
            
            </div>
        </form>
    </div>
</div>

@endsection