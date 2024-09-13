<section class="section-padding bg-f6">
    <div class="container">
        <div class="row">
            <div class="col col-12 position-relative">
                <div class="scroll-move-right">
                    <div class="stroke stroke-about lh-base fw-bold z-1 position-absolute">Portfolio</div>
                </div>
                <div class="z-2 position-relative wow img-custom-anim-left">
                    <p
                        class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                        portofolio</p>
                    {{-- <h2 class="z-2 title-lg ds-2 fw-bold text-black mb-5">
                        Project yang telah terlaksana dan<br> dieksekusi dengan baik
                    </h2> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- swipper slider -->
    <div class="row">
        @forelse ($portofolios as $post)
            <div class="col-lg-4 col-12 d-flex justify-content-center pb-10 pb-lg-0 mt-5 mt-lg-0">
                <div class="position-relative z-2 w-400">
                    <div class="zoom-img">
                        <img src="{{ asset('back/assets/img/article/' . $post->cover) }}" alt="{{ $post->slug }}" />
                    </div>
                    <div class="card-hover">
                        <div class="title-news position-absolute top-100 start-50 translate-middle bg-white">
                            <div class="position-relative p-4">
                                <div class="left-20 position-absolute top-0 translate-middle">
                                    <p class="text-white bg-black p-1 fs-6">{{ $post->category->name }}</p>
                                </div>
                                <div class="d-flex">
                                    <p class="text-primary fs-6">{{ $post->created_at->format('d M Y ') }}</p>
                                    <span class="px-2 text-secondary">/</span>
                                    <p class="text-secondary fs-6">By: <span
                                            class="text-black">{{ $post->user->name }}</span></p>
                                </div>
                                <h5 class="text-black fw-bold border-bottom pb-4">{{ $post->title }}</h5>
                                <a href="{{ route('blog.show', $post->slug) }}" target="_blink"
                                    class="text-primary fw-medium pt-2 d-lg-inline-block"><i
                                        class="bi bi-arrow-right me-2"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="row wow img-custom-anim-top">
                <div class="col-12 text-center">
                    <div class="row">
                        <div class="col-6 text-lg-end">
                            <h3 class="ds-4 fw-bold text-black mb-3">
                                Oops !
                            </h3>
                            <p class="text-secondary">
                                Portofolio belum tersedia
                            </p>
                        </div>
                        <div class="col-6 text-lg-start">
                            <img class="rounded-4 avatar-xxl" src="{{ asset('front/assets/images/404.webp') }}"
                                alt="meravi-404">
                        </div>
                    </div>
                </div>
            </div>
        @endforelse


        {{-- <div class="col-lg-4 col-12 d-flex justify-content-center pb-10 pb-lg-0 mt-5 mt-lg-0">
            <div class="position-relative z-2 w-400">
                <div class="zoom-img">
                    <img src="{{ asset('front/assets/images/home1/news/img-2.png') }}" alt="abon" />
                </div>
                <div class="card-hover">
                    <div class="title-news position-absolute top-100 start-50 translate-middle bg-white">
                        <div class="position-relative p-4">
                            <div class="left-20 position-absolute top-0 translate-middle">
                                <p class="text-white bg-black p-1 fs-6">Consultancy</p>
                            </div>
                            <div class="d-flex">
                                <p class="text-primary fs-6">January 13, 2024</p>
                                <span class="px-2 text-secondary">/</span>
                                <p class="text-secondary fs-6">By: <span class="text-black">Admin</span></p>
                            </div>
                            <h5 class="text-black fw-bold border-bottom pb-4">Is Your business ready for
                                Integration?</h5>
                            <a href="page-service-details.html"
                                class="text-primary fw-medium pt-2 d-lg-inline-block"><i
                                    class="bi bi-arrow-right me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 d-flex justify-content-center pb-10 pb-lg-0 mt-5 mt-lg-0">
            <div class="position-relative z-2 w-400">
                <div class="zoom-img">
                    <img src="{{ asset('front/assets/images/home1/news/img-3.png') }}" alt="abon" />
                </div>
                <div class="card-hover">
                    <div class="title-news position-absolute top-100 start-50 translate-middle bg-white">
                        <div class="position-relative p-4">
                            <div class="left-20 position-absolute top-0 translate-middle">
                                <p class="text-white bg-black p-1 fs-6">Consultancy</p>
                            </div>
                            <div class="d-flex">
                                <p class="text-primary fs-6">January 13, 2024</p>
                                <span class="px-2 text-secondary">/</span>
                                <p class="text-secondary fs-6">By: <span class="text-black">Admin</span></p>
                            </div>
                            <h5 class="text-black fw-bold border-bottom pb-4">That Should you Include in Your
                                Marketing plan</h5>
                            <a href="page-service-details.html"
                                class="text-primary fw-medium pt-2 d-lg-inline-block"><i
                                    class="bi bi-arrow-right me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
