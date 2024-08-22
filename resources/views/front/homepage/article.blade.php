<section class="container-fluid position-relative section-padding bg-f6">
    <div class="container section-padding">
        <div class="row">
            <div class="col-12 text-center position-relative">
                <div class="stroke text-nowrap lh-base fw-bold position-absolute top-0 start-50 translate-middle z-1">
                    Article</div>
                <div class="z-2 position-relative wow img-custom-anim-top">
                    <p
                        class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border border-primary bg-white z-2">
                        Artikel</p>
                    <div class="title-lg ds-2 fw-bold text-black mb-5">
                        Artikel Terbaru
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-12 d-flex justify-content-center pb-10 pb-lg-0 mt-5 mt-lg-0">
                    <div class="position-relative z-2 w-400">
                        <div class="zoom-img">
                            <img src="{{ asset('back/assets/img/article/' . $post->cover) }}"
                                alt="{{ $post->slug }}" />
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
            @endforeach

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
    </div>
    {{-- <div class="bg-news position-absolute bottom-0 start-50 translate-middle-x"></div> --}}
</section>
