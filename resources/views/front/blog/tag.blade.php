@extends('front.layouts.index')

@section('containt')
    <main>
        <!-- blog section-1 start -->
        <section class="blog-section-1 wow img-custom-anim-top">
            <div class="container section-padding">
                <div class="row">
                    <div class="col-12 text-center">
                        <p
                            class="sub-title fs-5 px-4 py-2 d-none d-md-inline-flex text-primary rounded-pill border border-primary bg-white z-2">
                            Home <span class="text-secondary">-</span> News & Blog</p>
                        <div class="title-lg ds-2 fw-bold text-white mb-3">Latest News</div>
                        <p class="text-white fs-2">Get The Latest News, Advice & Best Practice From Blog.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section-1 end -->

        <!-- blog section-2 start -->
        <section class="blog section-2">
            <div class="container pt-10 pb-10">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 mb-6 wow img-custom-anim-left">
                        <form class="position-relative blog-search-form" action="{{ route('search') }}" method="GET">
                            <label for="searchInput" class="form-label visually-hidden">Search</label>
                            <input name="search" type="search" class="form-control ps-7 rounded-pill bg-secondary-1 fs-5"
                                placeholder="What are you looking for?" id="searchInput" required />
                            <button type="submit" class="btn position-absolute top-50 translate-middle-y ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    @foreach ($postTag as $post)
                        <div
                            class="col-lg-4 col-md-6 col-12 d-flex justify-content-center wow img-custom-anim-top pb-10 pb-lg-0 mt-5">
                            <div class="position-relative z-2 w-400">
                                <div class="zoom-img">
                                    <img src="{{ asset('back/assets/img/article/' . $post->cover) }}"
                                        alt="{{ $post->slug }}" />
                                </div>
                                <div class="card-hover">
                                    <div
                                        class="title-news position-absolute top-100 start-50 translate-middle bg-white shadow-sm">
                                        <div class="position-relative p-4">
                                            <div class="left-20 position-absolute top-0 translate-middle">
                                                <p class="text-white bg-black p-1 fs-6"><a class="text-white"
                                                        href="">{{ $post->tag_name }}</a></p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="text-primary fs-6">{{ $post->created_at->format('d M Y ') }}</p>
                                                <span class="px-2 text-secondary">/</span>
                                                <p class="text-secondary fs-6">By: <span
                                                        class="text-black">{{ $post->user_name }}</span>
                                                </p>
                                            </div>
                                            <h4 class="text-black fs-4 border-bottom pb-4"><a class="text-dark"
                                                    href="{{ route('blog.show', $post->post_slug) }}">{{ $post->title }}</a>
                                            </h4>
                                            <a href="{{ route('blog.show', $post->post_slug) }}" target="_blank"
                                                class="text-primary fw-medium pt-2 d-lg-inline-block"><i
                                                    class="bi bi-arrow-right me-2"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center mt-8">
                    <div class="col-4 d-flex justify-content-center">
                        <div>
                            {{-- {{ $posts->links() }} --}}
                            {{ $postTag->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section-2 end -->

    </main>
@endsection
