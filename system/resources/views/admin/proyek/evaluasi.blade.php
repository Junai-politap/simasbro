@extends('template.admin')
@section('content')
    @include('section.admin')
    @include('section.notif')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @csrf
                <div class="col-md-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail Mitra</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Nama Mitra</strong>
                            <p class="text-muted">
                                {{ $project->mitra->nama_mitra }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat Mitra</strong>
                            <p class="text-muted">
                                {{ $project->mitra->alamat_mitra }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                            <p class="text-muted">
                                {{ $project->mitra->email }}
                            </p>
                            <hr>
                            <strong><i class="fa fa-globe mr-1"></i> Website</strong>
                            <p class="text-muted">
                                {{ $project->mitra->website }}
                            </p>
                            <hr>
                            <strong><i class="fa fa-bookmark mr-1"></i> Sektor</strong>
                            <p class="text-muted">
                                {{ $project->mitra->sektor }}
                            </p>
                            <hr>
                            <strong><i class="fa fa-bookmark mr-1"></i> Tipe Organisasi</strong>
                            <p class="text-muted">
                                {{ $project->mitra->tipe_organisasi }}
                            </p>
                            <hr>
                            <strong><i class="fa fa-bookmark mr-1"></i> Jumlah Karyawan</strong>
                            <p class="text-muted">
                                {{ $project->mitra->jumlah_karyawan }}
                            </p>
                            <hr>
                            <strong><i class="fa fa-bookmark mr-1"></i> Tahun Operasi</strong>
                            <p class="text-muted">
                                {{ $project->mitra->tahun_operasi }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#activity" data-toggle="tab">Detail Pengusul</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#timeline" data-toggle="tab">Detail Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab">Borang Penilaian</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class="post">
                                        <div class="user-block">
                                            <strong><i class="fas fa-user mr-1"></i> Nama Pengusul</strong>
                                            <p class="text-muted">
                                                {{ $project->nama_pengusul }}
                                            </p>
                                            <hr>
                                            <strong><i class="fas fa-envelope mr-1"></i> Email Pengusul</strong>
                                            <p class="text-muted">
                                                {{ $project->email_pengusul }}
                                            </p>
                                            <hr>
                                            <strong><i class="fas fa-phone mr-1"></i> Nomor Handphone</strong>
                                            <p class="text-muted">
                                                {{ $project->no_hp_pengusul }}
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="timeline">
                                    <div class="timeline timeline-inverse">
                                        <div class="post">
                                            <div class="user-block">
                                                <strong><i class="fa fa-bookmark mr-1"></i> Judul Project</strong>
                                                <p class="text-muted">
                                                    {{ $project->judul_project }}
                                                </p>

                                                <strong><i class="fa fa-bookmark mr-1"></i> Kluster Project</strong>
                                                <p class="text-muted">
                                                    {{ $project->kluster_project }}
                                                </p>

                                                <strong><i class="fa fa-bookmark mr-1"></i> Status Pengajuan</strong>
                                                <p class="text-muted">
                                                    {{ $project->status_pengajuan }}
                                                </p>
                                                <strong><i class="fa fa-bookmark mr-1"></i> Tipe Project</strong>
                                                <p class="text-muted">
                                                    {{ $project->tipe_project }}
                                                </p>

                                                <strong><i class="fa fa-bookmark mr-1"></i> Potensi HKI</strong>
                                                <p class="text-muted">
                                                    {{ $project->potensi_hki }}
                                                </p>
                                                <strong><i class="fa fa-bookmark mr-1"></i> Deskripsi Masalah</strong>
                                                <p class="text-muted">
                                                    {!! nl2br($project->deskripsi_masalah) !!}
                                                </p>

                                                <strong><i class="fa fa-bookmark mr-1"></i> Deskripsi Umum</strong>
                                                <p class="text-muted">
                                                    {!! nl2br($project->deskripsi_umum) !!}
                                                </p>

                                                <strong><i class="fa fa-bookmark mr-1"></i> Kompetensi Keahlian</strong>
                                                <p class="text-muted">
                                                    {!! nl2br($project->kompetensi_keahlian) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="settings">
                                    <form action="{{ url('storeborang', $project->id_project) }}" method="POST">
                                        @csrf
                                        @method("PUT")
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">1. Level
                                                    Kompleksitas</label>
                                                <div class="col-sm-9">
                                                    <select name="level_kompleksitas" id="" class="form-control">
                                                        <option value="Level 1 - Basic"
                                                            @if ($project->level_kompleksitas == 'Level 1 - Basic') selected @endif> Level 1 -
                                                            Basic
                                                        </option>
                                                        <option value="Level 2 - Advanced"
                                                            @if ($project->level_kompleksitas == 'Level 2 - Advanced') selected @endif> Level 2 -
                                                            Advanced
                                                        </option>
                                                        <option value=" Level 3 - Expert"
                                                            @if ($project->level_kompleksitas == ' Level 3 - Expert') selected @endif> Level 3 -
                                                            Expert
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">
                                                    2. Program Studi Yang Terlibat <p style="font-size: 10px;">(Boleh Pilih
                                                        Lebih Dari Satu)</p>
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="checkbox" name="prodi_terlibat[]"
                                                        value="D3  Teknik Informatika">
                                                    D3 Teknik Informatika
                                                    <br>
                                                    <input type="checkbox" name="prodi_terlibat[]" value="D3  Teknik Mesin">
                                                    D3 Teknik Mesin
                                                    <br>
                                                    <input type="checkbox" name="prodi_terlibat[]"
                                                        value="D3  Teknik Pertambangan">
                                                    D3 Teknik Pertambangan
                                                    <br>
                                                    <input type="checkbox" name="prodi_terlibat[]"
                                                        value="D3  Teknik Elektro">
                                                    D3 Teknik Elektro
                                                    <br>
                                                    <input type="checkbox" name="prodi_terlibat[]"
                                                        value="D3  Teknik Pengolahan Hasil Pertanian">
                                                    D3 Teknik Pengolahan Hasil Pertanian
                                                    <br>
                                                    <input type="checkbox" name="prodi_terlibat[]" value="D3 Agroindustri">
                                                    D3 – Agroindustri
                                                    <br>
                                                    <input type="checkbox" name="prodi_terlibat[]"
                                                        value="D4 Budidaya Tanaman Perkebunan">
                                                    D4 – Budidaya Tanaman Perkebunan
                                                    <br>
                                                    <input type="checkbox" name="prodi_terlibat[]" value="D4 Teknik Sipil">
                                                    D4 – Teknik Sipil
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">
                                                    3. Manajer Proyek Internal
                                                </label>
                                                <div class="col-sm-9">
                                                    <select name="mp_internal" class="select2 pegawai w-100">
                                                        @if ($project->mp_internal)
                                                            <option value="{{ $project->mp_internal }}">
                                                                {{ $project->mp_internal }}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">
                                                    4. Manajer Proyek Eksternal
                                                </label>
                                                <div class="col-sm-9">
                                                    {{-- <select name="mp_eksternal" class="select2 pegawai w-100">
                                                        @if ($project->mp_eksternal)
                                                            <option value="{{ $project->mp_eksternal }}">
                                                                {{ $project->mp_eksternal }}</option>
                                                        @endif
                                                    </select> --}}

                                                    <input type="text" class="form-control" name="mp_eksternal"
                                                        value="{{ $project->mp_eksternal }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">
                                                    5. Tahun Pelaksanaan
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tahun_pelaksana"
                                                        value="{{ $project->tahun_pelaksana }}">
                                                </div>
                                            </div>
                                            <div class="">
                                                <!-- <button class="btn btn-info"><i class="fa fa-times"></i> Batal</button> -->
                                                <button class="btn btn-primary float-right"><i class="fa fa-save"></i>
                                                    Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $('.select2.pegawai').select2({
            ajax: {
                url: 'https://simadu.politap.ac.id/api/admin/select2/pegawai',
                dataType: 'json',
                processResults: function(data) {
                    for (item of data) {
                        item.id = item.text
                    }
                    return {
                        results: data
                    };
                },
            },
            escapeMarkup: function(markup) {
                return markup;
            },
            language: 'id',
            minimumInputLength: 3,
        });
    </script>
    <style>
        .select2-container {
            width: 100% !important;
        }

        .select2-selection.select2-selection--single {

            height: calc(2.25rem + 2px) !important;
        }

    </style>
@endpush
