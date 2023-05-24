@extends('template.admin')

@section('content')
@include('section.admin')<br>
	<div class="">
    	<div class="row">
        	<div class="col-lg-6 col-6">
            	<div class="small-box bg-info">
                	<div class="inner">
                    	<h3 style="margin-left:20px;">Project Baru</h3>
                    	<h2 style="margin-left:20px;">{{($baru)}} Project Baru</h2>
                    </div>
                   	<div class="icon">
                    	<i class="ion ion-pie-graph"></i>
                   	</div>
                   	<br><br>
               	</div>
            </div>
            <div class="col-lg-6 col-6">
            	<div class="small-box bg-info">
                	<div class="inner">
                    	<h3 style="margin-left:20px;">Project Yang Sedang Berjalan</h3>
                    	<h2 style="margin-left:20px;">{{($berjalan)}} Project Saat Ini</h2>
                    </div>
                    <div class="icon">
                    	<i class="ion ion-pie-graph"></i>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="row">
           	<div class="col-lg-6 col-6">
            	<div class="small-box bg-primary">
                	<div class="inner">
                    	<h3 style="margin-left:20px;">Mitra Internal</h3>
                    	<h2 style="margin-left:20px;">{{($internal)}} Internal</h2>
                    </div>
                   	<div class="icon">
                   		<i class="ion ion-person-add"></i>
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="small-box bg-primary">
                	<div class="inner">
                    	<h3 style="margin-left:20px;">Mitra Eksternal</h3>
                    	<h2 style="margin-left:20px;">{{($eksternal)}} Eksternal</h2>
                    </div>
                  	<div class="icon">
                    	<i class="ion ion-person-add"></i>
                    </div>
                   	<br><br>
                </div>
            </div>    
        </div><br><br>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="small-box bg-info">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="card-header">
                                <h5 class="card-title">Jadwal Pendaftaran Project</h5>
                            </div>

                            <div class="card-body">
                                <form action="{{url('storejadwal')}}" method="post" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Pembukaan</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" name="buka">
                                        </div>

                                        <label class="col-sm-2 col-form-label"> Penutupan</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" name="tutup">
                                        </div>
                                    </div>
                                    
                                    <!-- <button type="reset" class="btn btn-warning"><i class="fa fa-times"></i> Batal</button> -->
                                    <button class="btn btn-primary float-right"><i class="fa fa-save"></i>Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Periode</th>
                                        <th>Buka</th>
                                        <th>Tutup</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_jadwal as $jadwal)
                                        <tr>
                                            <td class="text-center">Periode {{$loop->iteration}}</td>
                                            <td class="text-center">
                                                {{date("d-M-Y", strtotime($jadwal->buka))}}
                                            </td>
                                            <td class="text-center">
                                                {{date("d-M-Y", strtotime($jadwal->tutup))}}
                                            </td>
                                            <td class="text-center">
                                                @if((date('Y-m-d')) <= $jadwal->tutup)
                                                    <strong><p>Dibuka</p></strong>
                                                
                                                @elseif((date('Y-m-d')) >= $jadwal->tutup)
                                                    <strong><p>Ditutup</p></strong>
                                                @endif
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
    </div>

   

@endsection
