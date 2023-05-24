@extends('template.home')
@section('content') 
<style type="text/css">
	
	.main-body {
	    padding: 15px;
	}
	.card {
	    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
	}

	.card {
	    position: relative;
	    display: flex;
	    flex-direction: column;
	    min-width: 0;
	    word-wrap: break-word;
	    background-color: #fff;
	    background-clip: border-box;
	    border: 0 solid rgba(0,0,0,.125);
	    border-radius: .25rem;
	}

	.card-body {
	    flex: 1 1 auto;
	    min-height: 1px;
	    padding: 1rem;
	}

	.gutters-sm {
	    margin-right: -8px;
	    margin-left: -8px;
	}

	.gutters-sm>.col, .gutters-sm>[class*=col-] {
	    padding-right: 8px;
	    padding-left: 8px;
	}
	.mb-3, .my-3 {
	    margin-bottom: 1rem!important;
	}

	.bg-gray-300 {
	    background-color: #e2e8f0;
	}
	.h-100 {
	    height: 100%!important;
	}
	.shadow-none {
	    box-shadow: none!important;
	}
</style>
<section id="services">
	<div class="container" data-aos="fade-up">
		<div class="container">
			<div class="main-body">
				<nav aria-label="breadcrumb" class="main-breadcrumb">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="section-header">
				                <h2>Detail Tim PBL</h2>
				                <p>SISTEM INFORMASI TERPADU POLITAP</p>
				            </div>	
						</div>
					</div>
		        </nav>
		        <div class="row gutters-sm">
		        	<div class="col-md-3"></div>
		          	<div class="col-md-9">
		          		<div class="card"> 
		          			<div class="card-body">
		          				<div class="d-flex flex-column align-items-center text-center">
		          					<img src="{{url('public/poto', $tim->poto)}}" alt="Admin"  style="object-fit: cover; position: static;" class="w-100">
		          					<div class="mt-3">
		          						<h4>{{$tim->nama}}</h4>
		          						<p class="text-secondary">{{$tim->nip}}</p>
		          						<div class="group row">
						                    <div class="col-md-6">
						                    	<h6 class="mb-0">{{$tim->tugas}}</h6>
						                    </div>
						                    <div class="col-md-6">
						                    	<h6 class="mb-0">{{$tim->tanggung_jawab}}</h6>
						                    </div>
						                </div><br>
						                <div class="group row">
						                    <div class="col-md-12">
						                    	<h6 class="mb-0">{{$tim->jabatan}}</h6>
						                    </div>
						                    
						                </div><br>
						                <div class="group row">
						                    <div class="col-md-12">
						                    	<h6 class="mb-0">{{$tim->no_telp}}</h6>
						                    </div>
						                    
						                </div>
		          					</div>
		          				</div>
		          			</div>
		          		</div>
		          	</div>
		        </div>
		    </div>
		</div>
    </div>
</section>
<br><br>

@endsection 