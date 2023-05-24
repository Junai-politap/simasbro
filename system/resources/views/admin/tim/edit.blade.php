@extends('template.admin')
@section('content')

@include('section.admin')
<section class="content">
    <div class="container-fluid"> 
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Data Tim PBL</h3>
            </div>
              
            <form class="form-horizontal" action="{{url('tim/update', $tim->id_tim)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nip" value="{{$tim->nip}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="{{$tim->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tugas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tugas" value="{{$tim->tugas}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggung Jawab</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tanggung_jawab" value="{{$tim->tanggung_jawab}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jabatan" value="{{$tim->jabatan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_telp" value="{{$tim->no_telp}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Poto</label>
                        <div class="col-md-4">
                            <img class="img-responsive" src='{{url("public/poto/$tim->poto")}}' style="object-fit: cover; position: static; width: 50%; height: 200px;">
                        </div>

                        <div class="col-md-6">
                            <input type="file" class="form-control" id="inlineinput" name="poto" accept=".jpg, .png, .jpeg" value="{{$tim->poto}}">
                        </div>
                    </div>
                </div>
            
                <div class="card-footer">
                    <a href="{{url('page-tim')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection