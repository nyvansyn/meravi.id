@extends('front.layouts.index')

@section('containt')
    <main>
        <!-- blog-details section-1 start -->
        <section class="blog-details-section-1 section-padding border-bottom">
            <div class="container">
                <div class="row wow">
                    <div class="col">
                        <div class="d-flex">
                            @foreach ($post->tags as $tag)
                                <p class="text-white bg-black p-1 fs-6 d-lg-inline-block me-2">{{ $tag->name }}</p>
                            @endforeach
                            {{-- <p class="text-white bg-black p-1 fs-6 d-lg-inline-block me-2">Insurance</p>
                            <p class="text-white bg-black p-1 fs-6 d-lg-inline-block">Business</p> --}}
                        </div>
                        <div class="col-lg-8 col-12">
                            <h3 class="ds-5 fw-bold mb-3 text-wrap">
                                {{ $post->title }}
                            </h3>
                        </div>
                        <div class="d-flex">
                            <p class="text-primary fs-6">{{ $post->created_at->format('d M Y ') }}</p>
                            <span class="px-2 text-secondary">/</span>
                            <p class="text-secondary fs-6">By: <span class="text-black">{{ $post->user->name }}</span></p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="contents mb-8">
                            @if ($post->cover != '')
                                <img data-aos="fade-up" src="{{ asset('back/assets/img/article/' . $post->cover) }}"
                                    alt="{{ $post->slug }}" />
                            @else
                                <img data-aos="fade-up" src="assets/images/page-blog-details/section-1/img.png"
                                    alt="abon" />
                            @endif

                            <p class="mt-4">{!! $post->desc !!}</p>

                        </div>
                        {{-- <div class="py-8 border-top border-bottom wow">
                            <a href="#" class="d-flex align-items-center gap-3 pt-2 hover-up">
                                <img src="assets/images/home1/testimonials/avatar-1.png" alt="abon" />
                                <div class="name">
                                    <h4 class="text-dark">Miranda H. Halim</h4>
                                    <p class="fs-6 text-secondary mb-0">Manager, <span class="text-primary"> Airlines
                                            LLC</span></p>
                                </div>
                            </a>
                            <div class="d-flex flex-column flex-lg-row align-items-lg-end align-items-start">
                                <p class="text-secondary mt-5 pe-lg-5 w-lg-75 mb-0">Etiam vitae leo et diam pellentesque
                                    porta. Sed eleifend ultricies risus, vel rutrum erat commodo ut. Praesent finibus congue
                                    euismod. Nullam scelerisque massa vel augue placerat, a tempor sem egestas.</p>
                                <a href="#" class="btn-white d-inline-flex text-nowrap mt-3">View more articles <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div> --}}
                        <div class="row py-8 border-bottom border-top" data-aos="zoom-in">
                            @if ($previous)
                                <div class="col-5 me-auto">
                                    <a href="{{ route('blog.show', $previous) }}" class="text-dark fw-bold"><i
                                            class="bi bi-arrow-left fw-bold me-2"></i>Preview</a>
                                    <h6><a href="{{ route('blog.show', $previous) }}"
                                            class="text-dark mt-5 fs-4">{{ $previous }}</a></h6>
                                </div>
                            @else
                                <div class="col-5 me-auto">
                                    <a href="javascript:void(0)" class="text-dark fw-bold"><i
                                            class="bi bi-arrow-left fw-bold me-2"></i>Preview</a>
                                </div>
                            @endif

                            @if ($next)
                                <div class="col-5 ms-auto text-end">
                                    <a href="{{ route('blog.show', $next) }}" class="text-dark fw-bold">Next<i
                                            class="bi bi-arrow-right fw-bold ms-2"></i></a>
                                    <h6><a href="{{ route('blog.show', $next) }}"
                                            class="text-dark mt-5 fs-4">{{ $next }}</a></h6>
                                </div>
                            @else
                                <div class="col-5 ms-auto text-end">
                                    <a href="javascript:void(0)" class="text-dark fw-bold"><i
                                            class="bi bi-arrow-left fw-bold me-2"></i>Next</a>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="row mt-8 wow">
                            <div class="col-lg-10 ps-lg-0">
                                <h5 class="fs-1 fw-bold">Leave a Reply</h5>
                                <p class="text-secondary fs-4 mb-5">Your email address will not be published.</p>
                                <div class="row">
                                    <div class="col-lg-6 pe-lg-4 pe-3">
                                        <div class="input-group mb-5">
                                            <i
                                                class="bi bi-person-fill text-dark border-bottom d-flex align-items-center"></i>
                                            <input type="text" class="form-control border-0 border-bottom rounded-0"
                                                placeholder="Your name" aria-label="Recipient's username" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ps-lg-4 ps-3">
                                        <div class="input-group mb-5">
                                            <i
                                                class="bi bi-envelope-open-fill text-dark border-bottom d-flex align-items-center"></i>
                                            <input type="text" class="form-control border-0 border-bottom rounded-0"
                                                placeholder="Your name" aria-label="Username" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <i
                                                class="bi bi-pencil-fill mt-2 text-dark border-bottom d-flex align-items-start"></i>
                                            <textarea class="form-control border-0 border-bottom rounded-0 pb-10" placeholder="Describe Your Project in Short"
                                                aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label user-select-none" for="flexCheckDefault"> I agree to the
                                        site’s <a class="text-dark text-decoration-underline" href="#">privacy
                                            policy</a></label>
                                </div>
                                <div class="mt-5">
                                    <a href="#demo" class="btn-gradient border-0 fs-5 mt-2">Post comment<i
                                            class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-4">
                        <div class="ms-lg-5 ms-lg-5 ms-0 mt-8 mt-lg-0">
                            {{-- <form class="position-relative blog-search-form-2 mb-5"> --}}
                            <form class="position-relative  blog-search-form-2 mb-5" action="{{ route('search') }}"
                                method="GET">
                                <input name="search" type="search"
                                    class="form-control ps-7 rounded-pill bg-secondary-1 fs-5"
                                    placeholder="What are you looking for?" id="searchInput" required />
                                <button type="submit" class="btn position-absolute top-50 translate-middle-y ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                            <h6 class="fs-2">Categories</h6>
                            <ul class="ps-3">
                                @foreach ($categories as $category)
                                    <li class="text-reset mt-2"><a href="/blog/kategori/{{ $category->category->slug }}"
                                            class="text-reset">{{ $category->category->name }}
                                            ({{ $category->count }})
                                        </a></li>
                                    {{-- <li><a href="/artikel/kategori/{{ $data->slug }}">{{ $data->title }}</a><span>({{ $data->posts_count }})</span></li> --}}
                                @endforeach
                            </ul>
                            <h6 class="fs-2 mt-5">Recent Posts</h6>
                            @foreach ($recents as $recent)
                                <a href="{{ route('blog.show', $recent->slug) }}"
                                    class="d-flex align-items-center my-3 card-hover">
                                    <img src="{{ asset('back/assets/img/article/' . $recent->cover) }}"
                                        class="img-fluid me-3" style="width: 89px; height:89px"
                                        alt="{{ $recent->slug }}" />
                                    <div class="d-block">
                                        <p class="fs-4 fw-semibold text-dark">{{ $recent->title }}</p>
                                        <div class="d-flex">
                                            <p class="text-primary fs-6 mb-0">{{ $recent->created_at->format('d M Y ') }}
                                            </p>
                                            <span class="px-2 text-secondary">/</span>
                                            <p class="text-secondary fs-6 mb-0">By: <span
                                                    class="text-black">{{ $recent->user->name }}</span></p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                            <h6 class="fs-2 mt-5">Tags</h6>
                            @foreach ($tags as $tag)
                                </a></li>
                                <a class="icon-shape bg-secondary-1 btn-lift px-3 mb-2 rounded-pill">
                                    <p class="d-flex align-items-center my-2 text-dark fs-5 fw-normal">#
                                        {{ $tag->name }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details section-1 end -->

        <!-- News start-->
        <section class="container-fluid position-relative section-padding ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-12 text-center wow">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border border-primary bg-white z-2">
                            RELATED ARTICLES</p>
                        <div class="ds-5 fw-bold text-black mb-5">Get the latest news, advice & best practice from blog.
                        </div>
                    </div>
                </div>
                <div class="row wow">
                    <!-- Swiper -->
                    <div class="swiper slider_blog pb-4">
                        <div class="swiper-wrapper">
                            @forelse ($relatedPost as $data)
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center pb-10 pb-lg-0 mt-5 mt-lg-0">
                                        <div class="position-relative z-2 w-400">
                                            <div class="zoom-img">
                                                <img src="{{ asset('back/assets/img/article/' . $data->cover) }}"
                                                    alt="{{ $data->slug }}" />
                                            </div>
                                            <div class="card-hover">
                                                <div
                                                    class="title-news position-absolute top-100 start-50 translate-middle shadow-sm bg-white">
                                                    <div class="position-relative p-4">
                                                        <div class="left-20 position-absolute top-0 translate-middle">
                                                            <p class="text-white bg-black p-1 fs-6">
                                                                {{ $data->category->name }}</p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="text-primary fs-6">
                                                                {{ $data->created_at->format('d M Y ') }}</p>
                                                            <span class="px-2 text-secondary">/</span>
                                                            <p class="text-secondary fs-6">By: <span
                                                                    class="text-black">{{ $data->user->name }}</span></p>
                                                        </div>
                                                        <h5 class="text-black fw-bold border-bottom pb-4">
                                                            {{ $data->title }}</h5>
                                                        <a href="{{ route('blog.show', $data->slug) }}" target="_blank"
                                                            class="text-primary fw-medium pt-2 d-lg-inline-block"><i
                                                                class="bi bi-arrow-right me-2"></i>Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <div class="d-flex justify-content-center pb-10 pb-lg-0 mt-5 mt-lg-0">
                                        <div class="position-relative z-2 w-400">
                                            <div class="zoom-img">
                                                <img src="assets/images/page-blog-details/section-2/thumb-1.png"
                                                    alt="abon" />
                                            </div>
                                            <div class="card-hover">
                                                <div
                                                    class="title-news position-absolute top-100 start-50 translate-middle shadow-sm bg-white">
                                                    <div class="position-relative p-4">
                                                        <div class="left-20 position-absolute top-0 translate-middle">
                                                            <p class="text-white bg-black p-1 fs-6">Consultancy</p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p class="text-primary fs-6">January 13, 2024</p>
                                                            <span class="px-2 text-secondary">/</span>
                                                            <p class="text-secondary fs-6">By: <span
                                                                    class="text-black">Admin</span></p>
                                                        </div>
                                                        <h5 class="text-black fw-bold border-bottom pb-4">That Should you
                                                            Include in Your Marketing plan</h5>
                                                        <a href="#"
                                                            class="text-primary fw-medium pt-2 d-lg-inline-block"><i
                                                                class="bi bi-arrow-right me-2"></i>Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                    <!-- Swiper JS -->
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <div class="d-flex justify-content-center gap-4">
                            <div class="icon-xxl pagination_item border btn-swp-prev rounded-circle icon-shape text-reset"
                                href="#"><i class="bi bi-chevron-left"></i></div>
                            <div class="icon-xxl pagination_item border btn-swp-next rounded-circle icon-shape text-reset "
                                href="#"><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News end-->

    </main>
@endsection
