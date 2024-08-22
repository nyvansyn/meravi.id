<section id="clinet">
    <div class="container section-padding border-top">
        <div class="row pd-bottom-120px">
            <div class="col-12 text-center" data-aos="fade-up">
                <p
                    class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                    Mitra & Klien Kami</p>
                <div class="ds-2 fw-bold text-black lh-sm mb-5">
                    Kami berkolaborasi bersama berbagai mitra strategis. <br />
                    Mari berkolaborasi dengan kami!
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
                                        alt={{ $client->slug }}" />
                                </div>
                            @endforeach
                            {{-- <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home1/sponsors/Ukuran Logo Client 80x32.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-1.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-2.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-3.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-4.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-5.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-6.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-1.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-2.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-3.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-4.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-5.png') }}"
                                    alt="abon" />
                            </div>
                            <div class="swiper-slide">
                                <img class="py-4 px-6 img-fluid d-block"
                                    src="{{ asset('front/assets/images/home3/section-7/logo-6.png') }}"
                                    alt="abon" />
                            </div> --}}
                        </div>
                    </div>
                    <div class="stroke-h2 fw-bold z-1 position-absolute start-50 translate-middle-x lh-1 z-0">Mitra
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
