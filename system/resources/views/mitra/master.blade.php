@extends('template.mitra')
@section('content')

@include('section.mitra')
@include('section.notif')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 style="text-align: center;">Select Master</h3>
				</div>
			</div>
		</div>
	</div> 

	<div class="row">
		<div class="col-lg-6 col-6">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">A. Master Tipe Project</h3>
				</div>

				<div class="card-body">
					<form action="{{url('storetipe')}}" method="post">
						@csrf
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Jenis Tipe Projects </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="Jenis Tipe Project" name="nama">
							</div>
						</div>
						<div class="from-group row">
							<div class="col cm-4"></div>
							<div class="col-sm-8">
                        		<button class="btn btn-default float-left"><i class="fa fa-save"></i>Simpan</button>
							</div>
						</div>						
					</form>
				</div>
			</div>
		</div>
            
        <div class="col-lg-6 col-6">
        	<div class="card card-primary">
        		<div class="card-header">
        			<h3 class="card-title">B.   Master Potensi HKI Project</h3>
        		</div>
        		<div class="card-body">
        			<form action="{{url('storehki')}}" method="post">
        				@csrf
	        			<div class="form-group row">
	        				<label class="col-sm-3 col-form-label">Potensi HKI</label>
	        				<div class="col-sm-9">
	        					<input type="text" class="form-control" placeholder="Potensi HKI Project" name="nama">
	        				</div>
	        			</div>
						<div class="from-group row">
							<div class="col cm-3"></div>
							<div class="col-sm-9">
                        		<button class="btn btn-default float-left"><i class="fa fa-save"></i>Simpan</button>
							</div>
						</div>	        			
	        		</form>
        		</div>
        	</div>
        </div>
    </div>

    <div class="row">
		<div class="col-lg-12">
			<div class="card card-primary">
				<!-- <div class="card-header">
					<h3 style="text-align: center;">Select Master</h3>
				</div> -->
			</div>
		</div>
	</div> 

	<div class="row">
		<div class="col-lg-6 col-6">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">A. Data Tipe Project</h3>
				</div>

				<div class="card-body">
					<div class="form-group row">
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr class="text-center">
									<th>Aksi</th>
									<th>Nama</th>
									
								</tr>
							</thead>
							<tbody>
								@foreach ($list_master->where('jenis', 'Tipe') as $master)
								<tr>
									<td class="text-center">
										<a href="{{url("master-tipe/$master->id_master")}}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
									</td>
									<td class="text-center">{{$master->nama}}</td>
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
        			<h3 class="card-title">B.   Data Potensi HKI Project</h3>
        		</div>
        		<div class="card-body">
					<div class="form-group row">
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr class="text-center">
									<th>Aksi</th>
									<th>Nama</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($list_master->where('jenis', 'HKI') as $master)
								<tr>
									<td class="text-center">
										<a href="{{url("master-hki/$master->id_master")}}" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
									</td>
									<td class="text-center">{{$master->nama}}</td>
								</tr>
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