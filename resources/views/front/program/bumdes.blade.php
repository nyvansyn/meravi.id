@extends('front.layouts.index')
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
                            dikelola oleh Syncore Indonesia pada tahun 2017 dan dalam perkembangannya pada tahun 2020 resmi
                            dikelola oleh Meravi.id sebagai salah satu unit usahanya. Bumdes.id bekerjasama dan didukung
                            oleh komunitas ABCGFM (Academic, Business, Community, Government, Financial Institution, Media)
                            untuk menumbuhkan dan mengembangkan BUM Desa di seluruh Indonesia.
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
    <section class="section-padding">
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
@endsection
