@extends('front.layouts.index')
@push('seo')
    <meta name="title" content="Pemberdayaan BUM Desa">
    <meta name="description"
        content="Kejar UMKM merupakan Komunitas Kelompok Belajar UMKM dalam mengelola Keuangan, Manajemen, dan Pemasaran UMKM">
    <meta name="keywords" content="Pemberdayaan, kejar umkm, meravi.id">
    <meta name="author" content="Meravi.id">
@endpush
@section('containt')
    <section class="about-section-1 pd-top-120px bg-f9 pd-bottom-120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-8 wow img-custom-anim-left">
                    <div class="pe-lg-5 me-lg-5">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border border-secondary-1 bg-white">
                            Pemberdayaan UMKM</p>
                        <h2 class="ds-2 lh-1 fw-bold text-dark mb-5">Kejar UMKM</h2>
                        <p class="mb-4 "><span class="fw-bold">Kejar UMKM</span> merupakan program Kelompok Belajar UMKM
                            dalam mengelola Keuangan, Manajemen dan Pemasaran UMKM. Dengan program Kejar UMKM ini diharapkan
                            para Pelaku UMKM dapat berkontribusi dan berkolaborasi dalam pengembangan usaha bisnis UMKM.
                        </p>
                        {{-- <p class="mb-6">That empowers you to take control of your operations to the boost productivity, and
                            elevate your business to new heights. Abon is not just a software solution.</p> --}}
                        {{-- <div class="d-flex align-items-center">
                            <a href="https://bumdes.id/" target="_blank" class="btn-gradient fs-5 me-2 mt-2">Pelajari
                                selengkapnya<i class="bi bi-arrow-right ms-2"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="position-relative d-inline-flex">
                        <img class="img-fluid position-relative z-1"
                            src="{{ asset('front/assets/images/program/Siapa Kejar UMKM 601X607.png') }}"
                            alt="sipa-kejar-umkm" />
                        <div class="box-300-about position-absolute bg-gradient z-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section-1 section-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow img-custom-anim-left">
                    <div class="py-5">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white position-relative z-2 mb-3">
                            Program Pemberdayaan UMKM</p>
                        <div class="ds-2 fw-bold text-black lh-sm position-relative z-2">Pelatihan UMKM</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Peningkatan Kapasitas & Kopentensi Pelaku UMKM.png') }}"
                                    alt="⁠Pelatihan Peningkatan Kapasitas & Kompetensi Pelaku UMKM"
                                    class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-peningkatan-kapasitas-kompetensi-pelaku-umkm"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Peningkatan Kapasitas & Kompetensi Pelaku UMKM
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pencatatan Transaksi Keuangan UMKM.png') }}"
                                    alt="Pelatihan Pencatatan Transaksi Keuangan UMKM" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-pencatatan-transaksi-keuangan-umkm"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        Pelatihan Pencatatan Transaksi Keuangan UMKM
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Digital Marketing UMKM.png') }}"
                                    alt="⁠Pelatihan Digital Marketing UMKM" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-digital-marketing-umkm" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Digital Marketing UMKM
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Penysusunan Rencana UMKMMarketing UMKM.png') }}"
                                    alt="Penysusunan Rencana UMKMMarketing UMKM" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-penyusunan-rencana-usaha-umkm" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        Pelatihan Penyusunan Rencana Usaha UMKM
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 position-relative z-1 ps-lg-2">
                    <div class="row wow img-custom-anim-top">
                        <div class="col mt-5">
                            <img class="d-block mb-4"
                                src="{{ asset('front/assets/images/program/pelatihan umkm 279x366.png') }}"
                                alt="pelatiha-umkm-279x366" />
                            <img class="d-block"
                                src="{{ asset('front/assets/images/program/pelatihan umkm  282x190.png') }}"
                                alt="pelatihan-umkm-282x190.png" />
                        </div>
                        <div class="col mb-5">
                            <img class="d-block mb-4"
                                src="{{ asset('front/assets/images/program/pelatihan umkm 341x329.png') }}"
                                alt="pelatihan-umkm-341x329.png" />
                            <img class="d-block" src="{{ asset('front/assets/images/program/pelatihan umkm 341x257.png') }}"
                                alt="pelatihan-umkm-341x257.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pink  h-500px w-50 position-absolute bottom-0 end-0 mb-8 d-none d-md-block" data-aos="fade-up"></div>
    </section>
    <section class="services-section-1 section-padding bg-f9">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1s position-relative  pe-lg-5">
                    <div class="position-relative d-inline-flex">
                        <img class="img-fluid position-relative z-1"
                            src="{{ asset('front/assets/images/program/Pendampingan UMKM 601X601.png') }}" alt="image" />
                        <div class="box-300-about position-absolute bg-gradient z-0"></div>
                    </div>
                </div>
                <div class="col-lg-6 wow img-custom-anim-left">
                    <div class="py-5">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white position-relative z-2 mb-3">
                            Program Pemberdayaan UMKM</p>
                        <div class="ds-2 fw-bold text-black lh-sm position-relative z-2">Pendampingan UMKM</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Rencana Usaha UMKM.png') }}"
                                    alt="⁠Pendampingan Rencana Usaha UMKM" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pendampingan-rencana-usaha-umkm" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        ⁠Pendampingan Rencana Usaha UMKM
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Digital Marketing UMKM.png') }}"
                                    alt="Pendampingan Digital Marketing UMKM" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pendampingan-digital-marketing-umkm" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        Pendampingan Digital Marketing UMKM
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Pembuatan Profil Usaha dan NIB.png') }}"
                                    alt="Pendampingan Pembuatan Profil Usaha dan NIB" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pendampingan-pembuatan-profil-usaha-dan-nib"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        Pendampingan Pembuatan Profil Usaha dan NIB
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Laporan Keuangan UMKM.png') }}"
                                    alt="Pendampingan Laporan Keuangan UMKM" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pendampingan-laporan-keuangan-umkm" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        Pendampingan Laporan Keuangan UMKM
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="bg-pink  h-500px w-50 position-absolute bottom-0 end-0 mb-8 d-none d-md-block" data-aos="fade-up">
        </div> --}}
    </section>
@endsection
