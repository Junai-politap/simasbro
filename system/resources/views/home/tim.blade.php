@extends('template.home')
@section('content')
    <section id="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Tim PBL</h2>
            </div>
            <div class="row">
                @foreach ($list_tim as $tim)
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ url("show-tim/$tim->id_tim") }}">
                            <div class="member">
                                <div class="pic"><img src="{{ url('public/poto', $tim->poto) }}"
                                        style="object-fit: cover; position: static; width: 100%; height: 200px;">
                                </div>
                                <div class="details">
                                    <h5 style="color: black; font-size: 15px;">{{ $tim->nama }}</h5>
                                    <span style="color: black; margin-top: -15px; font-size: 12px;">{{ $tim->jabatan }}</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
