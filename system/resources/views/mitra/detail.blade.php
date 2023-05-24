@extends('template.mitra')
@section('content')
    @include('section.mitra')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 style="text-align: center;">Detail Pengusulan Project Baru</h3>
                    </div>
                </div>
            </div>
        </div>
        @csrf
        <div class="row">
            <div class="col-lg-3 col-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">A. Informasi Data Diri Pengusul Project</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Nama </label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->nama_pengusul }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">No HP</label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->no_hp_pengusul }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label"> Email</label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->email_pengusul }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Alamat</label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->alamat_pengusul }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">B. Informasi Borang Tinjauan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Level Kompleksitas </label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->level_kompleksitas }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Prodi Yang Terlibat</label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->prodi_terlibat }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Manajer Internal</label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->mp_internal }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Manajer Eksternal</label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->mp_eksternal }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Tahun Pelaksanaan</label>
                            <div class="col-sm-6">
                                <label class="form-label">{{ $project->tahun_pelaksana }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">C. Informasi Mitra Dudika Pengusul Project</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Mitra</label>
                            <div class="col-sm-8">
                                <label class="form-label">{{ $project->mitra->nama_mitra }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Alamat Mitra</label>
                            <div class="col-sm-8">
                                <label class="form-label">{{ $project->mitra->alamat_mitra }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Industri/Sektor</label>
                            <div class="col-sm-8">
                                <label class="form-label">{{ $project->mitra->sektor }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tipe Organisasi</label>
                            <div class="col-sm-8">
                                <label class="form-label">{{ $project->mitra->tipe_organisasi }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tahun Operasi</label>
                            <div class="col-sm-8">
                                <label class="form-label">{{ $project->mitra->tahun_operasi }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Jumlah Karyawan</label>
                            <div class="col-sm-8">
                                <label class="form-label">{{ $project->mitra->jumlah_karyawan }}</label>
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
                        <h3 class="card-title">D. Informasi Project</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Judul Project </label>
                            <div class="col-sm-10">
                                <label class="form-label">{{ $project->judul_project }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kluster Project</label>
                            <div class="col-sm-10">
                                <label class="form-label">{{ $project->kluster_project }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deskripsi Masalah</label>
                            <div class="col-sm-10">
                                <label class="form-label">{!! nl2br($project->deskripsi_masalah) !!} </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Deskripsi Umum</label>
                            <div class="col-sm-10">
                                <label class="form-label">{!! nl2br($project->deskripsi_umum) !!} </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tipe Project </label>
                            <div class="col-sm-10">
                                <label class="form-label">{{ $project->tipe_project }} </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Potensi HKI </label>
                            <div class="col-sm-10">
                                <label class="form-label">{{ $project->potensi_hki }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                            <div class="col-sm-10">
                                <label class="form-label">{!! nl2br($project->kompetensi_keahlian) !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="btn-group">
                        <a href="{{ url('project-berjalan') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i>
                            Kembali</a>

                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
    </div>
@endsection
