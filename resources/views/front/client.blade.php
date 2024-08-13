@extends('front.layouts.index')
@section('containt')
    <section id="clinet">
        <div class="container section-padding border-top">
            <div class="row pd-bottom-120px">
                <div class="col-12 text-center" data-aos="fade-up">
                    <p
                        class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                        Mitra & Klien Kami</p>
                    <div class="ds-2 fw-bold text-black lh-sm mb-5">
                        Our Happy Sponsors <br />
                        Around Us.
                    </div>
                </div>
                <div class="row mt-8 position-relative z-1">
                    <div class="position-relative" data-aos="fade-up">
                        <div class="swiper slider-3 position-relative z-2">
                            <div class="swiper-wrapper">
                                @foreach ($clients as $client)
                                    <div class="swiper-slide">
                                        <img class="py-4 px-6 img-fluid d-block"
                                            src="{{ asset('back/assets/client/' . $client->image) }}"
                                            alt="{{ $client->slug }}" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="stroke-h2 fw-bold z-1 position-absolute start-50 translate-middle-x lh-1 z-0">Mitra
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
