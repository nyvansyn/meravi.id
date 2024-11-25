@extends('front.layouts.index')
@push('seo')
    <meta name="title" content="Pemberdayaan BUM Desa">
    <meta name="description"
        content="Bumdes.id bekerjasama dan didukung oleh komunitas ABCGFM (Academic, Business, Community, Government, Financial Institution, Media) untuk menumbuhkan dan mengembangkan BUM Desa di seluruh Indonesia">
    <meta name="keywords" content="Pemberdayaan, bumdes, meravi.id">
    <meta name="author" content="Meravi.id">
@endpush
@section('containt')
    <section class="about-section-1 pd-top-120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-8 wow img-custom-anim-left">
                    <div class="pe-lg-5 me-lg-5">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border border-secondary-1 bg-white">
                            Pemberdayaan BUM Desa</p>
                        <h2 class="ds-2 lh-1 fw-bold text-dark mb-5">Bumdes.id</h2>
                        <p class="mb-4 "><span class="fw-bold">Bumdes.id</span> merupakan program yang diinisiasi dan
                            dikelola oleh Syncore Indonesia sejak tahun 2017 dengan bekerjasama dan didukung komunitas
                            ABCGFM ( Academic, Business, Community, Government, Financial Institution, Media ) untuk
                            membantu menumbuhkan, menguatkan dan mengembangkan BUM Desa di seluruh Indonesia. Dalam
                            perkembangannya, pada tahun 2020 <span class="fw-bold">bumdes.id</span> resmi dikelola oleh
                            Merapi Visitama Indonesia sebagai
                            salah satu unit usaha.
                        </p>
                        {{-- <p class="mb-6">That empowers you to take control of your operations to the boost productivity, and
                            elevate your business to new heights. Abon is not just a software solution.</p> --}}
                        <div class="d-flex align-items-center">
                            <a href="https://bumdes.id/" target="_blank" class="btn-gradient fs-5 me-2 mt-2">Pelajari
                                selengkapnya<i class="bi bi-arrow-right ms-2"></i></a>
                            {{-- <a href="page-contact.html" class="btn-white border fs-5 mt-2" target="_blank">Get In Touch<i
                                    class="bi bi-arrow-right ms-2"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="position-relative d-inline-flex">
                        <img class="img-fluid position-relative z-1"
                            src="{{ asset('front/assets/images/program/Siapa Bumdes.id 601X607.png') }}"
                            alt="siapa-bumdes.id" />
                        <div class="box-300-about position-absolute bg-gradient z-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-f9">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 position-relative z-2 mb-lg-0 mb-10 wow img-custom-anim-left">
                    <img class="w-100" src="{{ asset('front/assets/images/program/Tentang Bumdes.id 520x650.png') }}"
                        alt="abon" />
                </div>
                <div class="col-lg-7 col-12 position-relative ps-lg-8 ps-0">
                    <div class="pt-5">
                        <div class="scroll-move-right">
                            <div class="stroke lh-base fw-bold z-1 position-absolute top-0 start-0 translate-middle-y">
                                FUNGSI
                            </div>
                        </div>
                        <div class="wow img-custom-anim-top">
                            <div class="z-2 position-relative">
                                <p
                                    class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                                    Fungsi</p>
                                <div class="z-2 lh-sm ds-2 fw-bold text-black mb-5">4 Fungsi Bumdes.id</div>
                            </div>
                            <button class="collapsible fw-bold py-4  border-top">Agregasi</button>
                            <div class="content collapse-content">
                                <p class="fs-4 fw-mediumn">Menghimpun BUM Desa di seluruh Indonesia</p>
                            </div>
                            <button class="collapsible fw-bold py-4">Kurasi</button>
                            <div class="content collapse-content">
                                <p class="fs-4 fw-mediumn">Menilai Kesehatan & Rating Produk</p>
                            </div>
                            <button class="collapsible fw-bold py-4">Inkubasi</button>
                            <div class="content collapse-content">
                                <p class="fs-4 fw-mediumn">Pelatihan dan Pendampingan BUM Desa</p>
                            </div>
                            <button class="collapsible fw-bold py-4">Kemitraan</button>
                            <div class="content collapse-content">
                                <p class="fs-4 fw-mediumn">Mengembangkan Kemitraan Multipihak</p>
                            </div>
                        </div>
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
                            Pemberdayaan BUM Desa</p>
                        <div class="ds-2 fw-bold text-black lh-sm position-relative z-2">Pelatihan BUM Desa</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Training Of Trainer Pendamping Bumdes.png') }}"
                                    alt="Pelatihan Revitalisasi BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-revitalisasi-badan-usaha-milik-desa-pasca-peraturan-pemerintah-no-11-tahun-2021"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        Pelatihan Revitalisasi BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pelatihan Revitalisasi Bumdes Paska PP 11 Tahun 2021.png') }}"
                                    alt="Pelatihan Legalitas BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-legalitas-badan-usaha-milik-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        Pelatihan Legalitas BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pelatihan Tatakelola dan Manajemen Bumdes.png') }}"
                                    alt="⁠Pelatihan Model Bisnis BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-model-bisnis-badan-usaha-milik-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Model Bisnis BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pelatihan Peningkatan Kapasitas dan Kompetensi SDM Pengurus BUM Desa.png') }}"
                                    alt="⁠Pelatihan Manajemen Operasional BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-manajemen-operasional-badan-usaha-milik-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Manajemen Operasional BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pelatihan Penyusunan Laporan Keuangan Bumdes.png') }}"
                                    alt="Pelatihan Penyusunan Laporan Keuangan Bumdes" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-tata-kelola-keuangan-badan-usaha-milik-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Tata Kelola Keuangan
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
                                <img src="{{ asset('front/assets/images/program/icon/Kunjungan Sekolah Bumdes.png') }}"
                                    alt="⁠Pelatihan Pemasaran BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-pemasaran-badan-usaha-milik-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Pemasaran BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Kunjungan Sekolah Bumdes.png') }}"
                                    alt="⁠Pelatihan Sinergi dan Kolaborasi BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-sinergi-dan-kolaborasi-badan-usaha-milik-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Sinergi dan Kolaborasi BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Kunjungan Sekolah Bumdes.png') }}"
                                    alt="Pelatihan Peningkatan Soft Skill SDM BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-peningkatan-soft-skill-sumber-daya-manusia-badan-usaha-milik-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        Pelatihan Peningkatan Soft Skill SDM BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Kunjungan Sekolah Bumdes.png') }}"
                                    alt="⁠Pelatihan Peningkatan Kapasitas & Kompetensi SDM Pengurus BUM Desa"
                                    class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pelatihan-peningkatan-kapasitas-kompetensi-sdm-pengurus-bum-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pelatihan Peningkatan Kapasitas & Kompetensi SDM Pengurus BUM Desa
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
                                src="{{ asset('front/assets/images/program/pelatihan_bumdesa_279x366 .png') }}"
                                alt="pelatiha-umkm-279x366" />
                            <img class="d-block"
                                src="{{ asset('front/assets/images/program/pelatihan_bumdesa_282x190.png') }}"
                                alt="pelatihan-umkm-282x190.png" />
                        </div>
                        <div class="col mb-5">
                            <img class="d-block mb-4"
                                src="{{ asset('front/assets/images/program/pelatihan_bumdesa_341x329.png') }}"
                                alt="pelatihan-umkm-341x329.png" />
                            <img class="d-block"
                                src="{{ asset('front/assets/images/program/pelatihan_bumdesa_341x257.png') }}"
                                alt="pelatihan-umkm-341x257.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pink  h-500px w-50 position-absolute bottom-0 end-0 mb-8 d-none d-md-block" data-aos="fade-up">
        </div>
    </section>
    <section class="services-section-1 section-padding bg-f9">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1s position-relative  pe-lg-5">
                    <div class="position-relative d-inline-flex">
                        <img class="img-fluid position-relative z-1"
                            src="{{ asset('front/assets/images/program/Pendampingan_BUM_Desa_601X601.png') }}"
                            alt="image" />
                        <div class="box-300-about position-absolute bg-gradient z-0"></div>
                    </div>
                </div>
                <div class="col-lg-6 wow img-custom-anim-left">
                    <div class="py-5">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white position-relative z-2 mb-3">
                            Pemberdayaan BUM Desa</p>
                        <div class="ds-2 fw-bold text-black lh-sm position-relative z-2">Pendampingan BUM Desa</div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Kelembagaan BUM Desa.png') }}"
                                    alt="Pendampingan Kelembagaan BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pendampingan-kelembagaan-bum-desa" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        ⁠Pendampingan Kelembagaan BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Pemetaan Potensi & Pemilihan Usaha BUM Desa.png') }}"
                                    alt="Pendampingan Pemetaan Potensi & Pemilihan Usaha BUM Desa"
                                    class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pendampingan-set-up-bisnis-bum-desa" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        ⁠Pendampingan Set Up Bisnis BUM Desa

                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Tata Kelola & Manajemen Operasional BUM Desa.png') }}"
                                    alt="Pendampingan Tata Kelola & Manajemen Operasional BUM Desa"
                                    class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/pendampingan-tata-kelola-manajemen-dan-keuangan-bum-desa"
                                        target="_blank" class="fs-2 fw-bold text-dark">
                                        ⁠Pendampingan Tata Kelola Manajemen Dan Keuangan BUM Desa
                                    </a>
                                    {{-- <p class="mb-5 pe-2">
                                        Capitalize on low hanging fruit to <br />
                                        identify a ballpark value added activity
                                    </p> --}}
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <img src="{{ asset('front/assets/images/program/icon/Pendampingan Akuntansi & Pertanggungjawaban BUM Desa.png') }}"
                                    alt="Pendampingan Akuntansi & Pertanggungjawaban BUM Desa" class="align-self-start" />
                                <div class="px-4">
                                    <a href="https://meravi.id/blog/paket-pendampingan-bum-desa-1-tahun" target="_blank"
                                        class="fs-2 fw-bold text-dark">
                                        ⁠Paket Pendampingan BUM Desa 1 Tahun

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
