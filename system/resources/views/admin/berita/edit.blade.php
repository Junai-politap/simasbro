@extends('template.admin')
@section('content')
@include('section.admin')
<section class="content">
    <div class="container-fluid"> 
        <div class="card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Event</h3>
            </div>
              
            <form class="form-horizontal" action="{{url('updateberita', $berita->id_berita)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Judul berita</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul_berita" value="{{$berita->judul_berita}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control" cols="30" rows="10">{{$berita->deskripsi}}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Poto</label>
                        <div class="col-md-4">
                            <img class="img-responsive" src='{{url("public/berita/$berita->poto")}}' style="object-fit: cover; position: static; width: 50%; height: 200px;">
                        </div>

                        <div class="col-md-6">
                            <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg" value="{{$berita->poto}}">
                        </div>
                    </div>
                </div>
            
                <div class="card-footer">
                    <button class="btn btn-info"><i class="fa fa-times"></i> Batal</button>
                    <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection