@extends('front.layouts.index')

@section('containt')
    <section class="about-home-2 section-padding bg-f6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-8 mb-lg-0">
                    <div class="position-relative z-1 text-center">
                        <div class="wow img-custom-anim-left">
                            <img class="w-75 z-1 position-relative"
                                src="{{ asset('front/assets/images/home2/section-2/bg.png') }}" alt="abon" />
                        </div>
                        <div class="position-absolute bottom-0 start-0 mb-4">
                            <div class="floating-card position-relative bg-white px-3 z-1">
                                <p class="stroke-twenty fw-bold">20</p>
                                <div
                                    class="text-xs fs-3 position-absolute text-center bottom-0 start-50 translate-middle-x">
                                    <p class="text-secondary mb-0">Years of</p>
                                    <p class="text-dark">Experience</p>
                                </div>
                            </div>
                            <div class="circle bg-primary rounded-circle position-absolute start-0 translate-middle z-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="position-relative">
                        <div class="scroll-move-right">
                            <div class="stroke stroke-slider-home2 lh-base fw-bold position-absolute z-0">Meravi</div>
                        </div>
                        <div class="slider pe-5">
                            <div class="py-90px wow img-custom-anim-top z-1 position-relative">
                                <p
                                    class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white">
                                    Tentang Kami</p>
                                <div class="lh-1 ds-5 fw-bold text-black mb-3">PT. Meravi Visitama Indonesia (Meravi.id)
                                </div>
                                <p class="fs-4 fw-normal mb-4"><b>Meravi.id</b> merupakan layanan terintegrasi Training
                                    Center, Event Organizer dan Kemitraan untuk Community Management & Empowerment.</p>
                                {{-- <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check-circle me-2 text-primary"></i>
                                    <p class="mb-0">We Target on Business</p>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-check-circle me-2 text-primary"></i>
                                    <p class="mb-0">We Adapt Your Needs</p>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <i class="bi bi-check-circle me-2 text-primary"></i>
                                    <p class="mb-0">We Focus on Outcome</p>
                                </div> --}}
                                {{-- <div class="d-flex flex-md-row flex-column align-items-start align-items-md-center">
                                    <a href="page-about.html" class="btn-black mb-md-0 mb-5">Learn More<i
                                            class="bi bi-arrow-right ms-2"></i></a>
                                    <a href="tel:(123)4568569" class="ps-md-4 ps-0 text-align-center">
                                        <i class="bi bi-telephone-outbound-fill"></i>
                                        <span class="text-dark fw-medium ps-2">+(123) 456 8569 00</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pd-top-120px">
        <div class="container pd-bottom-120px">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="zoom-img wow img-custom-anim-left">
                        <img src="{{ asset('front/assets/images/home2/section-3/bg.png') }}" alt="abon" />
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="box-text overflow-hidden position-relative border-bottom border-primary bg-white">
                        <div class="w-100 p-5 position-absolute start-50 translate-middle-x bottom-0 z-1">
                            <p
                                class="sub-title  fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white">
                                Visi kami</p>
                            <div class="lh-1 ds-5 fw-bold text-black mb-3">Membangun Masyarakat dan Komunitas yang Berdaya.
                            </div>
                            <p class="fs-4 fw-normal mb-4">Through innovative strategies, expert guidance, and unwavering
                                support, we are committed.</p>
                        </div>
                        <div class="position-absolute top-0 start-0 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                                fill="none">
                                <g clip-path="url(#clip0_70_1258)">
                                    <path
                                        d="M68.9746 63.5289H64.7514V47.5314C64.7514 46.9652 64.2923 46.5061 63.726 46.5061C63.1597 46.5061 62.7006 46.9652 62.7006 47.5314V63.5289H53.7031V28.291H62.7006V42.7463C62.7006 43.3126 63.1597 43.7717 63.726 43.7717C64.2923 43.7717 64.7514 43.3126 64.7514 42.7463V27.2656C64.7514 26.6993 64.2923 26.2402 63.726 26.2402H52.6777C52.1114 26.2402 51.6523 26.6993 51.6523 27.2656V63.5289H49.2838V32.79C49.2838 32.2237 48.8247 31.7646 48.2584 31.7646H37.2098C36.6435 31.7646 36.1844 32.2237 36.1844 32.79V63.5289H33.8157V41.0765C33.8157 40.5103 33.3566 40.0512 32.7904 40.0512H21.7417C21.1754 40.0512 20.7163 40.5103 20.7163 41.0765V63.5289H18.3477V47.7058C18.3477 47.1395 17.8886 46.6804 17.3223 46.6804H6.27348C5.70719 46.6804 5.24809 47.1395 5.24809 47.7058V63.5289H1.02539C0.459102 63.5289 0 63.988 0 64.5543V68.9744C0 69.5407 0.459102 69.9998 1.02539 69.9998H12.0996C12.6659 69.9998 13.125 69.5407 13.125 68.9744C13.125 68.4081 12.6659 67.949 12.0996 67.949H2.05078V65.5797H67.9492V67.949H16.8848C16.3185 67.949 15.8594 68.4081 15.8594 68.9744C15.8594 69.5407 16.3185 69.9998 16.8848 69.9998H68.9746C69.5409 69.9998 70 69.5407 70 68.9744V64.5543C70 63.988 69.5409 63.5289 68.9746 63.5289ZM38.2352 33.8154H47.233V63.5289H38.2352V33.8154ZM22.767 42.1019H31.7648V63.5289H22.767V42.1019ZM7.29887 48.7312H16.2967V63.5289H7.29887V48.7312Z"
                                        fill="url(#paint0_linear_70_1258)" />
                                    <path
                                        d="M6.13593 37.4062H21.741C22.6464 37.4062 23.5159 37.0238 24.1266 36.3573L36.8373 22.4902H45.4959C46.3604 22.4902 47.1729 22.1539 47.7836 21.5432L58.2818 11.045V14.2842C58.2818 14.8505 58.7409 15.3096 59.3072 15.3096H63.726C64.2923 15.3096 64.7514 14.8505 64.7514 14.2842V3.23477C64.7514 1.45113 63.3002 0 61.5166 0H50.4683C49.9021 0 49.443 0.459102 49.443 1.02539V5.44551C49.443 6.0118 49.9021 6.4709 50.4683 6.4709H53.7064L44.1566 16.0207H35.4142C34.5098 16.0207 33.6407 16.4031 33.0301 17.0695L20.3179 30.9367H17.4904C16.9241 30.9367 16.465 31.3958 16.465 31.9621C16.465 32.5284 16.9241 32.9875 17.4904 32.9875H20.7689C21.0563 32.9875 21.3306 32.8669 21.5247 32.655L34.5418 18.4553C34.7652 18.2115 35.0831 18.0716 35.4141 18.0716H44.5811C44.853 18.0716 45.1139 17.9636 45.3061 17.7712L56.9067 6.17066C57.2 5.8774 57.2877 5.43635 57.129 5.05326C56.9703 4.67004 56.5964 4.42025 56.1817 4.42025H51.4936V2.05078H61.5165C62.1693 2.05078 62.7004 2.58193 62.7004 3.23477V13.259H60.3325V8.56953C60.3325 8.15486 60.0827 7.78094 59.6995 7.62221C59.3165 7.46375 58.8752 7.55125 58.5821 7.84451L46.3336 20.093C46.1102 20.3164 45.8125 20.4395 45.4959 20.4395H36.3863C36.0988 20.4395 35.8247 20.56 35.6304 20.772L22.6146 34.9717C22.3912 35.2156 22.0728 35.3555 21.741 35.3555H7.16132V32.9875H12.7053C13.2716 32.9875 13.7307 32.5284 13.7307 31.9621C13.7307 31.3958 13.2716 30.9367 12.7053 30.9367H6.13593C5.56964 30.9367 5.11053 31.3958 5.11053 31.9621V36.3809C5.11053 36.9472 5.56964 37.4062 6.13593 37.4062Z"
                                        fill="url(#paint1_linear_70_1258)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_70_1258" x1="0" y1="48.12" x2="70"
                                        y2="48.12" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#F94743" />
                                        <stop offset="1" stop-color="#FF7B49" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_70_1258" x1="5.11053" y1="18.7031" x2="64.7514"
                                        y2="18.7031" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#F94743" />
                                        <stop offset="1" stop-color="#FF7B49" />
                                    </linearGradient>
                                    <clipPath id="clip0_70_1258">
                                        <rect width="70" height="70" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="num stroke-red-home2 position-absolute fw-bold z-0">02</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-f6">
        <div class="container pd-bottom-120px pd-top-120px">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box-text overflow-hidden position-relative border-bottom border-primary bg-white">
                        <div class="w-100 p-5 position-absolute start-50 translate-middle-x bottom-0 z-1">
                            <p
                                class="sub-title  fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white">
                                Misi Kami</p>
                            {{-- <div class="lh-1 ds-5 fw-bold text-black mb-3">Empowering Your Success</div>
                            <p class="fs-4 fw-normal mb-4">Through innovative strategies, expert guidance, and unwavering
                                support, we are committed.</p> --}}
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle me-2 text-primary"></i>
                                <p class="mb-0">Menyelenggarakan Pelatihan untuk Peningkatan Kapasitas SDM</p>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle me-2 text-primary"></i>
                                <p class="mb-0">Menyelenggarakan Pendampingan untuk Pengembangan Ekonomi Lokal</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-check-circle me-2 text-primary"></i>
                                <p class="mb-0">Menyelenggarakan Inkubasi untuk Menciptakan Bisnis-Bisnis Baru</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-check-circle me-2 text-primary"></i>
                                <p class="mb-0">Menyelenggarakan Event Offline dan Online</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-check-circle me-2 text-primary"></i>
                                <p class="mb-0">Menyelenggarakan Pengelolaan Komunitas untuk Pengembangan Ekosistem
                                    Ekonomi Lokal</p>
                            </div>
                        </div>
                        <div class="position-absolute top-0 start-0 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                                fill="none">
                                <g clip-path="url(#clip0_70_1258)">
                                    <path
                                        d="M68.9746 63.5289H64.7514V47.5314C64.7514 46.9652 64.2923 46.5061 63.726 46.5061C63.1597 46.5061 62.7006 46.9652 62.7006 47.5314V63.5289H53.7031V28.291H62.7006V42.7463C62.7006 43.3126 63.1597 43.7717 63.726 43.7717C64.2923 43.7717 64.7514 43.3126 64.7514 42.7463V27.2656C64.7514 26.6993 64.2923 26.2402 63.726 26.2402H52.6777C52.1114 26.2402 51.6523 26.6993 51.6523 27.2656V63.5289H49.2838V32.79C49.2838 32.2237 48.8247 31.7646 48.2584 31.7646H37.2098C36.6435 31.7646 36.1844 32.2237 36.1844 32.79V63.5289H33.8157V41.0765C33.8157 40.5103 33.3566 40.0512 32.7904 40.0512H21.7417C21.1754 40.0512 20.7163 40.5103 20.7163 41.0765V63.5289H18.3477V47.7058C18.3477 47.1395 17.8886 46.6804 17.3223 46.6804H6.27348C5.70719 46.6804 5.24809 47.1395 5.24809 47.7058V63.5289H1.02539C0.459102 63.5289 0 63.988 0 64.5543V68.9744C0 69.5407 0.459102 69.9998 1.02539 69.9998H12.0996C12.6659 69.9998 13.125 69.5407 13.125 68.9744C13.125 68.4081 12.6659 67.949 12.0996 67.949H2.05078V65.5797H67.9492V67.949H16.8848C16.3185 67.949 15.8594 68.4081 15.8594 68.9744C15.8594 69.5407 16.3185 69.9998 16.8848 69.9998H68.9746C69.5409 69.9998 70 69.5407 70 68.9744V64.5543C70 63.988 69.5409 63.5289 68.9746 63.5289ZM38.2352 33.8154H47.233V63.5289H38.2352V33.8154ZM22.767 42.1019H31.7648V63.5289H22.767V42.1019ZM7.29887 48.7312H16.2967V63.5289H7.29887V48.7312Z"
                                        fill="url(#paint0_linear_70_1258)" />
                                    <path
                                        d="M6.13593 37.4062H21.741C22.6464 37.4062 23.5159 37.0238 24.1266 36.3573L36.8373 22.4902H45.4959C46.3604 22.4902 47.1729 22.1539 47.7836 21.5432L58.2818 11.045V14.2842C58.2818 14.8505 58.7409 15.3096 59.3072 15.3096H63.726C64.2923 15.3096 64.7514 14.8505 64.7514 14.2842V3.23477C64.7514 1.45113 63.3002 0 61.5166 0H50.4683C49.9021 0 49.443 0.459102 49.443 1.02539V5.44551C49.443 6.0118 49.9021 6.4709 50.4683 6.4709H53.7064L44.1566 16.0207H35.4142C34.5098 16.0207 33.6407 16.4031 33.0301 17.0695L20.3179 30.9367H17.4904C16.9241 30.9367 16.465 31.3958 16.465 31.9621C16.465 32.5284 16.9241 32.9875 17.4904 32.9875H20.7689C21.0563 32.9875 21.3306 32.8669 21.5247 32.655L34.5418 18.4553C34.7652 18.2115 35.0831 18.0716 35.4141 18.0716H44.5811C44.853 18.0716 45.1139 17.9636 45.3061 17.7712L56.9067 6.17066C57.2 5.8774 57.2877 5.43635 57.129 5.05326C56.9703 4.67004 56.5964 4.42025 56.1817 4.42025H51.4936V2.05078H61.5165C62.1693 2.05078 62.7004 2.58193 62.7004 3.23477V13.259H60.3325V8.56953C60.3325 8.15486 60.0827 7.78094 59.6995 7.62221C59.3165 7.46375 58.8752 7.55125 58.5821 7.84451L46.3336 20.093C46.1102 20.3164 45.8125 20.4395 45.4959 20.4395H36.3863C36.0988 20.4395 35.8247 20.56 35.6304 20.772L22.6146 34.9717C22.3912 35.2156 22.0728 35.3555 21.741 35.3555H7.16132V32.9875H12.7053C13.2716 32.9875 13.7307 32.5284 13.7307 31.9621C13.7307 31.3958 13.2716 30.9367 12.7053 30.9367H6.13593C5.56964 30.9367 5.11053 31.3958 5.11053 31.9621V36.3809C5.11053 36.9472 5.56964 37.4062 6.13593 37.4062Z"
                                        fill="url(#paint1_linear_70_1258)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_70_1258" x1="0" y1="48.12"
                                        x2="70" y2="48.12" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#F94743" />
                                        <stop offset="1" stop-color="#FF7B49" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_70_1258" x1="5.11053" y1="18.7031"
                                        x2="64.7514" y2="18.7031" gradientUnits="userSpaceOnUse">
                                        <stop offset="1" stop-color="#F94743" />
                                        <stop offset="1" stop-color="#FF7B49" />
                                    </linearGradient>
                                    <clipPath id="clip0_70_1258">
                                        <rect width="70" height="70" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="num stroke-red-home2 position-absolute fw-bold z-0">03</div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="zoom-img wow img-custom-anim-left">
                        <img src="{{ asset('front/assets/images/home2/section-3/bg.png') }}" alt="abon" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container add-padding-top">
            <div class="row">
                <div class="col-lg-4 position-relative">
                    <div class="scroll-move-right">
                        <div class="stroke stroke-about lh-base fw-bold z-1 position-absolute">Reviews</div>
                    </div>
                    <div class="z-2 position-relative wow img-custom-anim-top">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                            testimonials</p>
                        <div class="z-2 lh-sm ds-2 fw-bold text-black mb-5">What our Clients say</div>
                    </div>
                    <div class="col-4 d-none d-lg-block justify-content-between position-absolute bottom-0 start-0">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="col-lg-8 border-start-lg">
                    <!-- Swiper -->
                    <div class="swiper slider_home_3 overflow-visible position-relative wow img-custom-anim-left">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="d-flex align-items-start">
                                    <div class="pe-5 d-none d-md-block">
                                        <svg class="position-relative z-2" xmlns="http://www.w3.org/2000/svg"
                                            width="55" height="40" viewBox="0 0 55 40" fill="none">
                                            <path d="M0 0V40L20.625 20V0H0Z" fill="black" />
                                            <path d="M34.375 0V40L55 20V0H34.375Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="position-relative z-2 mb-5 fs-2">" Working with Abon has been a
                                            game-changer for our business. Their strategic insights and actionable
                                            recommendations have helped us overcome obstacles and achieve remarkable growth.
                                            "</p>
                                        <div class="text-start">
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                        </div>
                                        <a href="#"
                                            class="d-flex align-items-center position-relative z-2 d-inline-flex mt-10">
                                            <img src="{{ asset('front/assets/images/home2/section-8/avatar-1.png') }}"
                                                alt="abon" />
                                            <div class="ms-3">
                                                <h4 class="mb-0">Miranda H. Halim</h4>
                                                <p class="text-secondary fs-4 mb-0">Marketing Director</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex align-items-start">
                                    <div class="pe-5 d-none d-md-block">
                                        <svg class="position-relative z-2" xmlns="http://www.w3.org/2000/svg"
                                            width="55" height="40" viewBox="0 0 55 40" fill="none">
                                            <path d="M0 0V40L20.625 20V0H0Z" fill="black" />
                                            <path d="M34.375 0V40L55 20V0H34.375Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div class="ms-5 w-100 d-block">
                                        <div class="d-block">
                                            <p class="position-relative z-2 mb-5 fs-2">" Working with Abon has been a
                                                game-changer for our business. Their strategic insights and actionable
                                                recommendations have helped us overcome obstacles and achieve remarkable
                                                growth. "</p>
                                            <div class="text-start">
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            </div>
                                            <a href="#"
                                                class="d-flex align-items-center position-relative z-2 d-inline-flex mt-10">
                                                <img src="{{ asset('front/assets/images/home2/section-8/avatar-1.png') }}"
                                                    alt="abon" />
                                                <div class="ms-3">
                                                    <h4 class="mb-0">Miranda H. Halim</h4>
                                                    <p class="text-secondary fs-4 mb-0">Marketing Director</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex align-items-start">
                                    <div class="pe-5 d-none d-md-block">
                                        <svg class="position-relative z-2" xmlns="http://www.w3.org/2000/svg"
                                            width="55" height="40" viewBox="0 0 55 40" fill="none">
                                            <path d="M0 0V40L20.625 20V0H0Z" fill="black" />
                                            <path d="M34.375 0V40L55 20V0H34.375Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div class="ms-5 w-100 d-block">
                                        <div class="d-block">
                                            <p class="position-relative z-2 mb-5 fs-2">" Working with Abon has been a
                                                game-changer for our business. Their strategic insights and actionable
                                                recommendations have helped us overcome obstacles and achieve remarkable
                                                growth. "</p>
                                            <div class="text-start">
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            </div>
                                            <a href="#"
                                                class="d-flex align-items-center position-relative z-2 d-inline-flex mt-10">
                                                <img src="{{ asset('front/assets/images/home2/section-8/avatar-1.png') }}"
                                                    alt="abon" />
                                                <div class="ms-3">
                                                    <h4 class="mb-0">Miranda H. Halim</h4>
                                                    <p class="text-secondary fs-4 mb-0">Marketing Director</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex align-items-start">
                                    <div class="pe-5 d-none d-md-block">
                                        <svg class="position-relative z-2" xmlns="http://www.w3.org/2000/svg"
                                            width="55" height="40" viewBox="0 0 55 40" fill="none">
                                            <path d="M0 0V40L20.625 20V0H0Z" fill="black" />
                                            <path d="M34.375 0V40L55 20V0H34.375Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="position-relative z-2 mb-5 fs-2">" Working with Abon has been a
                                            game-changer for our business. Their strategic insights and actionable
                                            recommendations have helped us overcome obstacles and achieve remarkable growth.
                                            "</p>
                                        <div class="text-start">
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                        </div>
                                        <a href="#"
                                            class="d-flex align-items-center position-relative z-2 d-inline-flex mt-10">
                                            <img src="{{ asset('front/assets/images/home2/section-8/avatar-1.png') }}"
                                                alt="abon" />
                                            <div class="ms-3">
                                                <h4 class="mb-0">Miranda H. Halim</h4>
                                                <p class="text-secondary fs-4 mb-0">Marketing Director</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex align-items-start">
                                    <div class="pe-5 d-none d-md-block">
                                        <svg class="position-relative z-2" xmlns="http://www.w3.org/2000/svg"
                                            width="55" height="40" viewBox="0 0 55 40" fill="none">
                                            <path d="M0 0V40L20.625 20V0H0Z" fill="black" />
                                            <path d="M34.375 0V40L55 20V0H34.375Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div class="ms-5 w-100 d-block">
                                        <div class="d-block">
                                            <p class="position-relative z-2 mb-5 fs-2">" Working with Abon has been a
                                                game-changer for our business. Their strategic insights and actionable
                                                recommendations have helped us overcome obstacles and achieve remarkable
                                                growth. "</p>
                                            <div class="text-start">
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            </div>
                                            <a href="#"
                                                class="d-flex align-items-center position-relative z-2 d-inline-flex mt-10">
                                                <img src="{{ asset('front/assets/images/home2/section-8/avatar-1.png') }}"
                                                    alt="abon" />
                                                <div class="ms-3">
                                                    <h4 class="mb-0">Miranda H. Halim</h4>
                                                    <p class="text-secondary fs-4 mb-0">Marketing Director</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex align-items-start">
                                    <div class="pe-5 d-none d-md-block">
                                        <svg class="position-relative z-2" xmlns="http://www.w3.org/2000/svg"
                                            width="55" height="40" viewBox="0 0 55 40" fill="none">
                                            <path d="M0 0V40L20.625 20V0H0Z" fill="black" />
                                            <path d="M34.375 0V40L55 20V0H34.375Z" fill="black" />
                                        </svg>
                                    </div>
                                    <div class="ms-5 w-100 d-block">
                                        <div class="d-block">
                                            <p class="position-relative z-2 mb-5 fs-2">" Working with Abon has been a
                                                game-changer for our business. Their strategic insights and actionable
                                                recommendations have helped us overcome obstacles and achieve remarkable
                                                growth. "</p>
                                            <div class="text-start">
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                                <i class="bi bi-star-fill text-primary position-relative z-2"></i>
                                            </div>
                                            <a href="#"
                                                class="d-flex align-items-center position-relative z-2 d-inline-flex mt-10">
                                                <img src="{{ asset('front/assets/images/home2/section-8/avatar-1.png') }}"
                                                    alt="abon" />
                                                <div class="ms-3">
                                                    <h4 class="mb-0">Miranda H. Halim</h4>
                                                    <p class="text-secondary fs-4 mb-0">Marketing Director</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination position-absolute bottom-0 end-0 z-0"></div>
                    </div>
                    <!-- Swiper -->
                </div>
            </div>
        </div>
    </section>
@endsection
