@extends('template.admin')
@section('content') 

@include('section.admin')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 style="text-align: center;">Edit Profil Mitra DUDIKA</h3>
				</div>
			</div>
		</div>
	</div>
    <form action="{{url('memberupdate', $mitra->id)}}" method="POST" enctype="multipart/form-data">
    	@csrf
        @method("PUT")
	    <div class="row">
	    	<div class="col-lg-12 col-12">
	    		<div class="card-primary">
	    			<div class="card-header">
	    				<h3 class="card-title">A. Informasi Data Diri Pengusul Project</h3>
	    			</div>
	    			<div class="card-body">
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Nama Mitra</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="nama_mitra" value="{{$mitra->nama_mitra}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Alamat Mitra</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="alamat_mitra" value="{{$mitra->alamat_mitra}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Sektor</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="sektor" value="{{$mitra->sektor}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Tipe Organisasi</label>
	    					<div class="col-sm-10">
	    						<select name="tipe_organisasi" class="form-control">
	    							<option value="Profit" 
	    								@if($mitra->tipe_organisasi == "Profit") selected @endif>Profit</option>

	    							<option value="Non-profit"
	    								@if($mitra->tipe_organisasi == "Non-profit") selected @endif>Non-profit</option>

	    							<option value="Pemerintahan/Sektor Publik"
	    								@if($mitra->tipe_organisasi == "Pemerintahan/Sektor Publik") selected @endif>Pemerintahan/Sektor Publik</option>

	    							<option value="Nasional" 
	    								@if($mitra->tipe_organisasi == "Nasional") selected @endif>Nasional</option>
	    							<option value="Multinasional" 
	    								@if($mitra->tipe_organisasi == "Multinasional") selected @endif>Multinasional</option>
	    						</select>
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Jumlah Karyawan</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="jumlah_karyawan" value="{{$mitra->jumlah_karyawan}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Tahun Operasi Mitra</label>
	    					<div class="col-sm-10">
	    						<input type="number" class="form-control" name="tahun_operasi" value="{{$mitra->tahun_operasi}}">
	    					</div>
	    				</div>

	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Website *(Jika Ada)</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="website" value="{{$mitra->website}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Email Mitra</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="email" value="{{$mitra->email}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Username Mitra</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="username" value="{{$mitra->username}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Password</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="password" value="{{$mitra->confir_password}}" hidden="">

	    						<input type="text" class="form-control" name="confir_password" value="{{$mitra->confir_password}}">

	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Pemegang Akses Sistem</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="pemegang_akses" value="{{$mitra->pemegang_akses}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	    					<label class="col-sm-2 col-form-label">Nomor Telephone</label>
	    					<div class="col-sm-10">
	    						<input type="text" class="form-control" name="no_hp" value="{{$mitra->no_hp}}">
	    					</div>
	    				</div>
	    				<div class="form-group row">
	                    	<label for="inputPassword3" class="col-sm-2 col-form-label">Logo</label>
	                    	<div class="col-md-4">
								<img class="img-responsive" src='{{url("public/$mitra->logo")}}' style="object-fit: cover; position: static; width: 50%; height: 200px;">
							</div>

							<div class="col-md-6">
								<input type="file" class="form-control" id="inlineinput" name="logo" accept=".jpg, .png, .jpeg" value="{{$mitra->logo}}">
							</div>
	                	</div>
	                	<div class="card-header">
			                <button class="btn btn-info"><i class="fa fa-times"></i> Batal</button>
			                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
			            </div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</form>
</div>
@endsection