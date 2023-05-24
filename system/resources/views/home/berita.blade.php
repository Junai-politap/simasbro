@extends('template.home')
@section('content')

    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Berita</h2>
                <p>SISTEM INFORMASI TERPADU POLITAP</p>
            </div>

            <div class="row gy-4">
                @foreach ($list_berita as $berita)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <div class="form-group row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-6 about-img">
                                    <img src="{{ url('public/berita', $berita->poto) }}"
                                        style="object-fit: cover; position: static; width: 100%; height: 200px; border-radius: 10px;">
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="title" style="text-align: center">
                                        <a>
                                            {{ $berita->judul_berita }}
                                        </a>
                                    </h4>
                                    <p class="description" style="text-align: justify;">
                                        {{ $berita->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
