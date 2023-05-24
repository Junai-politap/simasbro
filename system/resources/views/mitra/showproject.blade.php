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
        	<div class="col-lg-6 col-6">
        		<div class="card card-primary">
        			<div class="card-header">
        				<h3 class="card-title">A. Informasi Data Diri Pengusul Project</h3>
        			</div>
        			<div class="card-body">
        				<div class="form-group row">
        					<label class="col-sm-3 col-form-label">Nama </label>
        					<div class="col-sm-9">
        						<label class="form-label">: {{$project->nama_pengusul}}</label>
        					</div>
        				</div>
        				<div class="form-group row">
        					<label class="col-sm-3 col-form-label">No Handphone</label>
        					<div class="col-sm-9">
        						<label class="form-label">: {{$project->no_hp_pengusul}}</label>
        					</div>
        				</div>
        				<div class="form-group row">
        					<label class="col-sm-3 col-form-label">Alamat Email</label>
        					<div class="col-sm-9">
        						<label class="form-label">: {{$project->email_pengusul}}</label>
        					</div>
        				</div>
        				<div class="form-group row">
        					<label class="col-sm-3 col-form-label">Alamat</label>
        					<div class="col-sm-9">
        						<label class="form-label">: {{$project->alamat_pengusul}}</label>
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
            			<div class="form-group row">
            				<label class="col-sm-4 col-form-label">Nama Mitra</label>
            				<div class="col-sm-8">
            					<label class="form-label">: {{$project->mitra->nama_mitra}}</label>
            				</div>
            			</div>
            			<div class="form-group row">
            				<label class="col-sm-4 col-form-label">Alamat Mitra</label>
            				<div class="col-sm-8">
            					<label class="form-label">: {{$project->mitra->alamat_mitra}}</label>
            				</div>
            			</div>
            			<div class="form-group row">
            				<label class="col-sm-4 col-form-label">Industri/Sektor</label>
            				<div class="col-sm-8">
            					<label class="form-label">: {{$project->mitra->sektor}}</label>
            				</div>
            			</div>
            			<div class="form-group row">
            				<label class="col-sm-4 col-form-label">Tipe Organisasi</label>
            				<div class="col-sm-8">
            					<label class="form-label">: {{$project->mitra->tipe_organisasi}}</label>
            				</div>
            			</div>
            			<div class="form-group row">
            				<label class="col-sm-4 col-form-label">Tahun Operasi</label>
            				<div class="col-sm-8">
            					<label class="form-label">: {{$project->mitra->tahun_operasi}}</label>
            				</div>
            			</div>
            			<div class="form-group row">
            				<label class="col-sm-4 col-form-label">Jumlah Karyawan</label>
            				<div class="col-sm-8">
            					<label class="form-label">: {{$project->mitra->jumlah_karyawan}}</label>
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
                                    <label class="form-label">: {{$project->judul_project}}</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kluster Project</label>
                                <div class="col-sm-10">
                                    <label class="form-label">: {{$project->kluster_project}}</label>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipe Project </label>
                                <div class="col-sm-10">
                                    <label class="form-label">: {{$project->tipe_project}} </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Potensi HKI </label>
                                <div class="col-sm-10">
                                    <label class="form-label">: {{$project->potensi_hki}}</label>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Masalah</label>
                                <div class="col-sm-10">
                                    <label class="form-label"> {!! nl2br($project->deskripsi_masalah) !!} </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi Umum</label>
                                <div class="col-sm-10">
                                    <label class="form-label"> {!! nl2br($project->deskripsi_umum) !!} </label>
                                </div>
                            </div>
 
                           

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                                <div class="col-sm-10">
                                    <label class="form-label"> {!! nl2br($project->kompetensi_keahlian) !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="btn-group">
                            <a href="{{url('project-baru')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        </form>
    </div>
</div>

@endsection