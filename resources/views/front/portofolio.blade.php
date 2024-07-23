@extends('front.layouts.index')
@section('containt')
    <section>
        <div class="container section-padding">
            {{-- <div class="row">
                <div class="col-12 text-center position-relative">
                    <div class="stroke text-nowrap lh-base fw-bold position-absolute top-0 start-50 translate-middle z-1">
                        Experts</div>
                    <div class="z-2 position-relative wow img-custom-anim-top">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border border-primary bg-white z-2">
                            Team</p>
                        <div class="title-lg ds-2 fw-bold text-black mb-5">Meet Our Expert Advisor team</div>
                    </div>
                </div>
            </div> --}}
            <div class="row wow img-custom-anim-top">
                <div class="col-lg-4 col-12 mb-5 mb-lg-4">
                    <div class="position-relative text-center">
                        <img src="{{ asset('front/assets/images/home2/section-6/expert-1.png') }}" alt="abon" />
                        <div class="hove-animation">
                            <div class="w-75 text-start position-absolute bottom-0 start-50 translate-middle-x">
                                <p class="text-white fw-light fs-4 mb-0">CEO</p>
                                <p class="text-white fs-1 fw-bold border-bottom border-secondary pb-2">
                                    <a class="text-white" href="#">Jane Smith </a>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone-call">
                                            <path
                                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <a href="tel:1234568569" class="text-white ms-2 mb-0 fs-5">(123) 456 8569</a>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-envelope-fill text-white"></i>
                                        <a href="mailto:info@abon.com" class="text-white ms-2 mb-0 fs-5">info@abon.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-4">
                    <div class="position-relative text-center">
                        <img src="{{ asset('front/assets/images/home2/section-6/expert-2.png') }}" alt="abon" />
                        <div class="hove-animation">
                            <div class="w-75 text-start position-absolute bottom-0 start-50 translate-middle-x">
                                <p class="text-white fw-light fs-4 mb-0">CEO</p>
                                <p class="text-white fs-1 fw-bold border-bottom border-secondary pb-2">
                                    <a class="text-white" href="#">Jane Smith </a>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone-call">
                                            <path
                                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <a href="tel:1234568569" class="text-white ms-2 mb-0 fs-5">(123) 456 8569</a>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-envelope-fill text-white"></i>
                                        <a href="mailto:info@abon.com" class="text-white ms-2 mb-0 fs-5">info@abon.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-4">
                    <div class="position-relative text-center">
                        <img src="{{ asset('front/assets/images/home2/section-6/expert-3.png') }}" alt="abon" />
                        <div class="hove-animation">
                            <div class="w-75 text-start position-absolute bottom-0 start-50 translate-middle-x">
                                <p class="text-white fw-light fs-4 mb-0">CEO</p>
                                <p class="text-white fs-1 fw-bold border-bottom border-secondary pb-2">
                                    <a class="text-white" href="#">Jane Smith </a>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone-call">
                                            <path
                                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <a href="tel:1234568569" class="text-white ms-2 mb-0 fs-5">(123) 456 8569</a>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-envelope-fill text-white"></i>
                                        <a href="mailto:info@abon.com" class="text-white ms-2 mb-0 fs-5">info@abon.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-5 mb-lg-4">
                    <div class="position-relative text-center">
                        <img src="{{ asset('front/assets/images/home2/section-6/expert-1.png') }}" alt="abon" />
                        <div class="hove-animation">
                            <div class="w-75 text-start position-absolute bottom-0 start-50 translate-middle-x">
                                <p class="text-white fw-light fs-4 mb-0">CEO</p>
                                <p class="text-white fs-1 fw-bold border-bottom border-secondary pb-2">
                                    <a class="text-white" href="#">Jane Smith </a>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone-call">
                                            <path
                                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <a href="tel:1234568569" class="text-white ms-2 mb-0 fs-5">(123) 456 8569</a>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-envelope-fill text-white"></i>
                                        <a href="mailto:info@abon.com" class="text-white ms-2 mb-0 fs-5">info@abon.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-4">
                    <div class="position-relative text-center">
                        <img src="{{ asset('front/assets/images/home2/section-6/expert-2.png') }}" alt="abon" />
                        <div class="hove-animation">
                            <div class="w-75 text-start position-absolute bottom-0 start-50 translate-middle-x">
                                <p class="text-white fw-light fs-4 mb-0">CEO</p>
                                <p class="text-white fs-1 fw-bold border-bottom border-secondary pb-2">
                                    <a class="text-white" href="#">Jane Smith </a>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone-call">
                                            <path
                                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <a href="tel:1234568569" class="text-white ms-2 mb-0 fs-5">(123) 456 8569</a>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-envelope-fill text-white"></i>
                                        <a href="mailto:info@abon.com" class="text-white ms-2 mb-0 fs-5">info@abon.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-4">
                    <div class="position-relative text-center">
                        <img src="{{ asset('front/assets/images/home2/section-6/expert-3.png') }}" alt="abon" />
                        <div class="hove-animation">
                            <div class="w-75 text-start position-absolute bottom-0 start-50 translate-middle-x">
                                <p class="text-white fw-light fs-4 mb-0">CEO</p>
                                <p class="text-white fs-1 fw-bold border-bottom border-secondary pb-2">
                                    <a class="text-white" href="#">Jane Smith </a>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone-call">
                                            <path
                                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <a href="tel:1234568569" class="text-white ms-2 mb-0 fs-5">(123) 456 8569</a>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="bi bi-envelope-fill text-white"></i>
                                        <a href="mailto:info@abon.com" class="text-white ms-2 mb-0 fs-5">info@abon.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
