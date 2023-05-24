@extends('template.home')
@section('content')
    <section id="testimonials">
        <div class="container" data-aos="fade-up" style="margin-top: 5%">
            <div class="section-header">
                <h2>Event</h2>
                <p>SISTEM INFORMASI TERPADU POLITAP</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($list_event as $event)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p style="text-align: justify;">
                                    {{ $event->deskripsi }}
                                </p>
                                <img src="{{ url('public/event', $event->poto) }}"
                                    style="object-fit: cover; position: static; width: 100%; height: 200px; border-radius: 10px;">
                                <h3>
                                    {{ $event->judul_event }}
                                </h3>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
@endsection
