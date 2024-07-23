@extends('front.layouts.index')
@section('containt')
    <section class="about-section-1 pd-top-120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-8 wow img-custom-anim-left">
                    <div class="pe-lg-5 me-lg-5">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border border-secondary-1 bg-white">
                            BUMDes</p>
                        <h2 class="ds-2 lh-1 fw-bold text-dark mb-5">Apa itu BUM Des</h2>
                        <p class="mb-4 ">At Abon, we understand that managing a business efficiently requires seamless
                            coordination and streamlined processes. That's why we've developed a to the cutting edge.</p>
                        <p class="mb-6">That empowers you to take control of your operations to the boost productivity, and
                            elevate your business to new heights. Abon is not just a software solution.</p>
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
                            src="{{ asset('front/assets/images/page-about/section-1/img.png') }}" alt="image" />
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
                    <img class="w-100" src="{{ asset('front/assets/images/home2/section-10/img-1.png') }}"
                        alt="abon" />
                </div>
                <div class="col-lg-7 col-12 position-relative ps-lg-8 ps-0">
                    <div class="pt-5">
                        <div class="scroll-move-right">
                            <div class="stroke lh-base fw-bold z-1 position-absolute top-0 start-0 translate-middle-y">FAQ
                            </div>
                        </div>
                        <div class="wow img-custom-anim-top">
                            <div class="z-2 position-relative">
                                <p
                                    class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                                    #FAQ</p>
                                <div class="z-2 lh-sm ds-2 fw-bold text-black mb-5">Seputar BUM Des</div>
                            </div>
                            <button class="collapsible fw-bold py-4  border-top">What services does Abon offer?</button>
                            <div class="content collapse-content">
                                <p class="fs-4 fw-mediumn">The cost of our services varies depending on the scope and
                                    complexity of the project. We offer competitive pricing and strive to provide.</p>
                            </div>
                            <button class="collapsible fw-bold py-4">How much do your services cost?</button>
                            <div class="content collapse-content">
                                <p class="fs-4 fw-mediumn">The cost of our services varies depending on the scope and
                                    complexity of the project. We offer competitive pricing and strive to provide.</p>
                            </div>
                            <button class="collapsible fw-bold py-4">How long does a typical consulting engagement
                                last?</button>
                            <div class="content collapse-content">
                                <p class="fs-4 fw-mediumn">The cost of our services varies depending on the scope and
                                    complexity of the project. We offer competitive pricing and strive to provide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
