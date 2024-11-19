@extends('front.layouts.index')
@push('seo')
    <meta name="title" content="Pelatihan Meravi">
    <meta name="description"
        content="Meravi.id merupakan layanan terintegrasi, Training Center, Event Organizer dan Kemitraan untuk Community Management & Empowerment">
    <meta name="keywords" content="about, tentang kami, meravi.id">
    <meta name="author" content="Meravi.id">
@endpush

@section('containt')
    <section class="container-fluid team-section-1 wow img-custom-anim-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="text-center pd-top-120px">
                        <p
                            class="sub-title fs-5 px-4 py-2 mb-4 d-inline-flex text-primary text-uppercase rounded-pill border border-secondary-1 bg-white">
                            Pelatihan Meravi.id</p>
                        <h2 class="ds-5 fw-bold text-white mb-5">Kami memiliki berbagai macam menu pelatihan untuk BUM Desa
                            dan UMKM yang dapat disesuaikan dengan kebutuhan anda</h2>
                        <div class="d-md-flex justify-content-center gap-4">
                            <a href="#pelatian-bumdesa" class="btn-gradient fs-5 mt-2">Pelatihan BUM Desa<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                            <a href="#pelatian-umkm" class="btn-white fs-5 mt-2">Pelatihan UMKM<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-padding bg-f6" id="pelatian-bumdesa">
            <div class="container">
                <div class="row wow img-custom-anim-top">
                    <div class="col-12 text-center position-relative">
                        <div
                            class="stroke text-nowrap lh-base fw-bold position-absolute top-0 start-50 translate-middle z-1">
                            Services</div>
                        <div class="z-2 position-relative">
                            <p
                                class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                                Layanan Kami</p>
                            <div class="title-lg ds-2 fw-bold text-black mb-3">Pelatihan BUM Desa</div>
                            <p class="mb-8 text-secondary">
                                A business strategy is the means by which it sets out to <br />
                                achieve its desired ends.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-white px-5 wow img-custom-anim-top">
                    <div class="col-lg-4 px-0">
                        <a href="" class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-1.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">Training Of Trainers ( TOT ) Pendamping BUMDES</p>
                                <p class="mb-5 pe-2">Assess market opportunities, and create a customized strategy to drive
                                    your business forward.</p>
                            </div>
                        </a>
                        <a href="" class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-2.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">⁠Pelatihan Revitalisasi BUM Desa Paska PP 11 tahun 2021
                                </p>
                                <p class="mb-5 pe-2">Increase productivity with our operational efficiency optimization
                                    services.</p>
                            </div>
                        </a>
                        <a href="" class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-3.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">Pelatihan Tata Kelola dan Manajemen BUM Desa</p>
                                <p class="mb-5 pe-2">Make data driven decisions with our market research and analysis
                                    services. We'll gather valuable insights for you.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 px-0">
                        <a href="" class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-4.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">Pelatihan Peningkatan Kapasitas & Kompetensi SDM Pengurus
                                    BUM Desa</p>
                                <p class="mb-5 pe-2">Gain valuable insights into your financial performance and position
                                    your business for sustainable growth.</p>
                            </div>
                        </a>
                        <a href="" class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-5.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">Pelatihan Penyusunan SOP Unit Usaha BUM Desa</p>
                                <p class="mb-5 pe-2">Mitigate risks and safeguard your business against potential threats
                                    with our risk management services.</p>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-4 px-0">
                        <a href="" class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-6.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">⁠Pelatihan Penyusunan Laporan Keuangan BUM Desa</p>
                                <p class="mb-5 pe-2">Invest in your most valuable asset your people with our training and
                                    development services.</p>
                            </div>
                        </a>
                        <a href="" class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-7.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">Kunjungan Sekolah BUMDES</p>
                                <p class="mb-5 pe-2">From brand positioning to digital marketing campaigns, we'll help you
                                    reach your target audience.</p>
                            </div>
                        </a>
                        {{-- <div class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-8.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">Technology Solutions</p>
                                <p class="mb-5 pe-2">Harness the power of technology to drive innovation and efficiency in
                                    your business.</p>
                            </div>
                        </div>
                        <div class="d-flex mt-5">
                            <img src="front/assets/images/home3/section-3/icon-9.png" alt="abon"
                                class="align-self-start" />
                            <div class="px-4">
                                <p class="fs-2 fw-bold text-dark">Human Resources</p>
                                <p class="mb-5 pe-2">Build a high-performing team and foster a positive work culture with
                                    our human resources consulting services.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="container bg-black mt-8 wow img-custom-anim-top">
                <div class="p-5 overflow-hidden">
                    <div class="d-lg-flex align-items-center position-relative">
                        <img class="position-relative z-2 ms-lg-10" src="assets/images/home2/section-7/avatar-2.png"
                            alt="abon" />
                        <img class="position-absolute top-lg-50 top-0 start-lg-0 end-0 translate-middle-lg translate-middle-x ms-lg-10 z-1"
                            src="assets/images/home2/section-7/avatar-1.png" alt="abon" />
                        <div class="text-lg-start text-center d-lg-flex">
                            <p class="fw-bold ds-6 text-white w-lg-25 mb-0 ms-lg-4 mt-lg-0 mt-5 position-relative z-2">
                                Trusted by <span class="text-gradient">25,000+</span> Happy Customers are Using Abon.</p>
                            <div class="stroke stroke-black fw-bold position-absolute top-0 start-50 translate-middle z-0">
                                review</div>
                            <div class="flex-column position-relative z-2 ms-auto">
                                <p class="text-gradient fw-bold mb-0 ds-2 text-center">200+</p>
                                <p class="fs-2 text-white text-center text-lg-start">
                                    Creative team to <br />
                                    care for projects.
                                </p>
                            </div>
                            <div class="flex-column position-relative z-2 ms-lg-10 ms-0">
                                <p class="text-gradient fw-bold mb-0 ds-2 text-center mb-0">4.9</p>
                                <div class="text-center">
                                    <i class="bi bi-star-fill text-white"></i>
                                    <i class="bi bi-star-fill text-white"></i>
                                    <i class="bi bi-star-fill text-white"></i>
                                    <i class="bi bi-star-fill text-white"></i>
                                    <i class="bi bi-star-fill text-white"></i>
                                </div>
                                <p class="fs-2 text-white text-center">2,488 Reating</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <section class="about-home-2 pd-bottom-120px pd-top-250px" id="pelatian-umkm">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 position-relative">
                    <div class="stroke lh-base fw-bold z-0 position-absolute top-0 star-0 translate-middle-y text-nowrap">
                        Services</div>
                    <div class="z-2 position-relative wow img-custom-anim-left">
                        <span
                            class="sub-title fs-5 px-4 py-2 d-inline-block text-primary text-uppercase rounded-pill border bg-white z-2">Layanan
                            Kami</span>
                        <p class="z-2 title-lg ds-2 fw-bold text-black mb-5">Pelatihan UMKM</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="wow img-custom-anim-left">
                        <p class="mb-0 position-relative z-1 lh-lg pe-4">Other excellent features include slider, sticky
                            navigation, back to top button, testimonials and animated statistics. Present your team, start a
                            blog, share company logos that you</p>
                        {{-- <div class="d-flex align-items-center mt-8">
                            <a class="pe-4 border-end text-dark fw-medium text-capitalize" href="page-about.html">Learn
                                more about us</a>
                            <a class="ps-4 text-dark fw-medium d-flex align-items-center text-capitalize"
                                href="page-contact.html">Send us a massage
                                <span
                                    class="icon-sm rounded-circle p-4 bg-primary text-white ms-2 d-flex align-items-center justify-content-center hover-up">
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 mb-5">
                    <div class="zoom-img position-relative">
                        <img src="front/assets/images/home3/section-2/img-1.png" alt="abon" />
                        <a href="page-service-details.html"
                            class="hover-up position-absolute bottom-0 start-0 bg-white p-4 m-5">
                            <span class="fs-3 fw-bold text-dark pe-5 mb-0">
                                Peningkatan Kapasitas & Kompetensi Pelaku UMKM
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="zoom-img position-relative">
                        <img src="front/assets/images/home3/section-2/img-2.png" alt="abon" />
                        <a href="page-service-details.html"
                            class="hover-up position-absolute bottom-0 start-0 bg-white p-4 m-5">

                            <span class="fs-3 fw-bold text-dark pe-5 mb-0">Pencatatan Transaksi Keuangan UMKM</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="zoom-img position-relative">
                        <img src="front/assets/images/home3/section-2/img-1.png" alt="abon" />
                        <a href="page-service-details.html"
                            class="hover-up position-absolute bottom-0 start-0 bg-white p-4 m-5">
                            {{-- <span class="ds-6 fw-bold text-primary mb-3">01</span> --}}
                            <span class="fs-3 fw-bold text-dark pe-5 mb-0">
                                Digital Marketing UMKM
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="zoom-img position-relative">
                        <img src="front/assets/images/home3/section-2/img-2.png" alt="abon" />
                        <a href="page-service-details.html"
                            class="hover-up position-absolute bottom-0 start-0 bg-white p-4 m-5">

                            <span class="fs-3 fw-bold text-dark pe-5 mb-0">Penyusunan Rencana Usaha UMKM</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
