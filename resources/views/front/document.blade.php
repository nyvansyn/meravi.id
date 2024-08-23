@extends('front.layouts.index')
@push('seo')
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endpush

@section('containt')
    <section class="position-relative bg-pink wow img-custom-anim-top">
        <div class="container section-padding position-relative z-1">
            <div class="row">
                <div class="col-12 text-center">
                    <p
                        class="sub-title fs-5 px-4 py-2 d-none d-md-inline-flex text-primary rounded-pill border border-primary bg-white z-2">
                        Download</p>
                    <div class="title-lg ds-2 fw-bold text-black mb-3">Download Dokumen</div>
                    <p class="text-secondary">
                        Download dokumen seputar BUM Desa dan UMKM
                    </p>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0 z-0 d-none d-md-inline">
            <img src="{{ asset('front/assets/images/page-service-details/section-1/img-bg-1.png') }}" alt="abon" />
        </div>
        <div class="position-absolute end-0 bottom-0 d-none d-md-inline">
            <img src="{{ asset('front/assets/images/page-service-details/section-1/img-bg-2.png') }}" alt="abon" />
        </div>
    </section>
    <section class="services-section-5 section-padding">
        <div class="container">
            {{-- <div class="row wow img-custom-anim-top">
                <div class="col-12 text-center">
                    <p
                        class="sub-title fs-5 px-4 py-2 d-inline-flex text-primary text-uppercase rounded-pill border bg-white z-2">
                        Pricing planss</p>
                    <h3 class="ds-2 fw-bold text-black mb-3">
                        We offer great price plans <br />
                        for your business
                    </h3>
                    <p class="mb-8 text-secondary">
                        Unlocking Success: Discover Tailored Price Plans <br />
                        Designed to Propel Your Business Forward
                    </p>
                </div>
            </div> --}}
            <div class="row wow img-custom-anim-top">
                {{-- <div class="col-lg-12 pt-2 pb-5 col-md-12 mb-lg-0 mb-lg-5">
                    <div class="border rounded-3 card-hover position-relative">
                        <div class="p-32px">
                            <h5 class="card-title text-gradient fs-1 mb-4">Starter</h5>
                            <p class="card-text ds-5 fw-semibold text-dark mb-0">$19<span
                                    class="card-text fs-5 text-secondary"> /month</span></p>
                            <p class="card-text fs-4 text-secondary fw-normal border-bottoms pb-4">This package is suitable
                                for teams 1-15 members.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">50 ads / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">50 ads / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text card-tex mb-0 text-secondary"><span class="text-dark card-text">10
                                    </span>spaces</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">3 GB
                                    </span>storage</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">15 GB </span>data
                                    / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">
                                    <span class="text-dark card-text">100 000 </span>requests / month
                                </p>
                            </div>
                            <a href="#" class="card-link btn-white text-center w-100 mt-3">Purchase Now<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                        <div class="strip position-absolute top-0 end-0 me-3 d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42"
                                fill="none">
                                <path
                                    d="M36.7188 -2.0625V39.0625C36.7188 39.3353 36.6428 39.6026 36.4994 39.8347C36.356 40.0667 36.1508 40.2542 35.9068 40.3762C35.6629 40.4982 35.3898 40.5498 35.1181 40.5253C34.8464 40.5008 34.587 40.4012 34.3687 40.2375L23.5 32.0859L12.6313 40.2375C12.413 40.4012 12.1536 40.5008 11.8819 40.5253C11.6102 40.5498 11.3371 40.4982 11.0932 40.3762C10.8492 40.2542 10.644 40.0667 10.5006 39.8347C10.3572 39.6026 10.2812 39.3353 10.2812 39.0625V-2.0625C10.2812 -2.45204 10.436 -2.82562 10.7114 -3.10106C10.9869 -3.37651 11.3605 -3.53125 11.75 -3.53125H35.25C35.6395 -3.53125 36.0131 -3.37651 36.2886 -3.10106C36.564 -2.82562 36.7188 -2.45204 36.7188 -2.0625Z"
                                    fill="#FFDA58" />
                            </svg>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 pt-2 pb-5 col-md-6 mb-lg-0 mb-lg-5">
                    <div class="border rounded-3 card-hover position-relative">
                        <div class="p-32px">
                            <h5 class="card-title text-gradient fs-1 mb-4">Basic</h5>
                            <p class="card-text ds-5 fw-semibold text-dark mb-0">$29<span
                                    class="card-text fs-5 text-secondary"> /month</span></p>
                            <p class="card-text fs-4 text-secondary fw-normal border-bottom pb-4">This package is suitable
                                for teams 20-50 members.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">50 ads / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">50 ads / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text card-tex mb-0 text-secondary"><span class="text-dark card-text">100
                                    </span>spaces</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">5 GB
                                    </span>storage</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">25 GB </span>data
                                    / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">300 000
                                    </span>requests / month</p>
                            </div>
                            <a href="#" class="card-link btn-white text-center w-100 mt-3">Purchase Now<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                        <div class="strip position-absolute top-0 end-0 me-3 d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42"
                                fill="none">
                                <path
                                    d="M36.7188 -2.0625V39.0625C36.7188 39.3353 36.6428 39.6026 36.4994 39.8347C36.356 40.0667 36.1508 40.2542 35.9068 40.3762C35.6629 40.4982 35.3898 40.5498 35.1181 40.5253C34.8464 40.5008 34.587 40.4012 34.3687 40.2375L23.5 32.0859L12.6313 40.2375C12.413 40.4012 12.1536 40.5008 11.8819 40.5253C11.6102 40.5498 11.3371 40.4982 11.0932 40.3762C10.8492 40.2542 10.644 40.0667 10.5006 39.8347C10.3572 39.6026 10.2812 39.3353 10.2812 39.0625V-2.0625C10.2812 -2.45204 10.436 -2.82562 10.7114 -3.10106C10.9869 -3.37651 11.3605 -3.53125 11.75 -3.53125H35.25C35.6395 -3.53125 36.0131 -3.37651 36.2886 -3.10106C36.564 -2.82562 36.7188 -2.45204 36.7188 -2.0625Z"
                                    fill="#FFDA58" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pt-2 pb-5 col-md-6 mb-lg-0 mb-lg-5">
                    <div class="border rounded-3 card-hover position-relative outstanding">
                        <div class="p-32px">
                            <h5 class="card-title text-gradient fs-1 mb-4">Popular</h5>
                            <p class="card-text ds-5 fw-semibold text-dark mb-0">$49<span
                                    class="card-text fs-5 text-secondary"> /month</span></p>
                            <p class="card-text fs-4 text-secondary fw-normal border-bottom pb-4">This package is suitable
                                for teams 50-100 members.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">500 ads / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">50 ads / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">500
                                    </span>spaces</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">10 GB
                                    </span>storage</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">50 GB
                                    </span>data / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">500 000
                                    </span>requests / month</p>
                            </div>
                            <a href="#" class="card-link btn-black text-center w-100 mt-3">Purchase Now<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                        <div class="strip position-absolute top-0 end-0 me-3 d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42"
                                fill="none">
                                <path
                                    d="M36.7188 -2.0625V39.0625C36.7188 39.3353 36.6428 39.6026 36.4994 39.8347C36.356 40.0667 36.1508 40.2542 35.9068 40.3762C35.6629 40.4982 35.3898 40.5498 35.1181 40.5253C34.8464 40.5008 34.587 40.4012 34.3687 40.2375L23.5 32.0859L12.6313 40.2375C12.413 40.4012 12.1536 40.5008 11.8819 40.5253C11.6102 40.5498 11.3371 40.4982 11.0932 40.3762C10.8492 40.2542 10.644 40.0667 10.5006 39.8347C10.3572 39.6026 10.2812 39.3353 10.2812 39.0625V-2.0625C10.2812 -2.45204 10.436 -2.82562 10.7114 -3.10106C10.9869 -3.37651 11.3605 -3.53125 11.75 -3.53125H35.25C35.6395 -3.53125 36.0131 -3.37651 36.2886 -3.10106C36.564 -2.82562 36.7188 -2.45204 36.7188 -2.0625Z"
                                    fill="#FFDA58" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 pt-2 pb-5 col-md-6 mb-lg-0 mb-lg-5">
                    <div class="border rounded-3 card-hover position-relative">
                        <div class="p-32px">
                            <h5 class="card-title text-gradient fs-1 mb-4">Enterprise</h5>
                            <p class="card-text ds-5 fw-semibold text-dark mb-0">$99<span
                                    class="card-text fs-5 text-secondary"> /month</span></p>
                            <p class="card-text fs-4 text-secondary fw-normal border-bottom pb-4">This package is suitable
                                for big company or coporation.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">Unlimited ads</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary">Build dynamic sites</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text card-tex mb-0 text-secondary"><span class="text-dark card-text">1000
                                    </span>spaces</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">Unlimited
                                    </span>storage</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">500 GB
                                    </span>data / month</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-shape text-gradient icon-sm me-1">
                                    <i class="card-text bi bi-check-circle-fill"></i>
                                </div>
                                <p class="card-text mb-0 text-secondary"><span class="text-dark card-text">Unlimited
                                    </span>requests / month</p>
                            </div>
                            <a href="#" class="card-link btn-white text-center w-100 mt-3">Purchase Now<i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                        <div class="strip position-absolute top-0 end-0 me-3 d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="42" viewBox="0 0 47 42"
                                fill="none">
                                <path
                                    d="M36.7188 -2.0625V39.0625C36.7188 39.3353 36.6428 39.6026 36.4994 39.8347C36.356 40.0667 36.1508 40.2542 35.9068 40.3762C35.6629 40.4982 35.3898 40.5498 35.1181 40.5253C34.8464 40.5008 34.587 40.4012 34.3687 40.2375L23.5 32.0859L12.6313 40.2375C12.413 40.4012 12.1536 40.5008 11.8819 40.5253C11.6102 40.5498 11.3371 40.4982 11.0932 40.3762C10.8492 40.2542 10.644 40.0667 10.5006 39.8347C10.3572 39.6026 10.2812 39.3353 10.2812 39.0625V-2.0625C10.2812 -2.45204 10.436 -2.82562 10.7114 -3.10106C10.9869 -3.37651 11.3605 -3.53125 11.75 -3.53125H35.25C35.6395 -3.53125 36.0131 -3.37651 36.2886 -3.10106C36.564 -2.82562 36.7188 -2.45204 36.7188 -2.0625Z"
                                    fill="#FFDA58" />
                            </svg>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="card card-body rounded-5 p-4 shadow-sm">
                <h5 class="mt-0 mb-4 p-0" style="font-weight: 600">Cari Dokumen Kebutuhan Anda</h5>
                <form action="" method="get">
                    @csrf
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-4">
                            <label for="search" class="small mb-2" style="font-weight: 600">Kata kunci pencarian</label>
                            <div class="input-group">
                                {{-- <span class="input-group-text rounded-4 bg-transparent">
                                    <i class="fa-solid fa-magnifying-glass text-lightgreen"></i>

                                    </span> --}}
                                <input type="text" class="form-control rounded-4 border-start-0" id="search"
                                    name="search" placeholder="Cari dokumen..." value="{{ request()->search }}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label for="search" class="small mb-2" style="font-weight: 600">Kategori</label>
                            <select class="form-select rounded-4" id="category" name="category">
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->slug }}"
                                        {{ request()->category == $category->slug ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-3">
                            <label for="search" class="small mb-2" style="font-weight: 600">Urutkan berdasarkan</label>
                            <select class="form-select rounded-4" id="sort" name="sort">
                                <option value="1" {{ request()->sort == 1 ? 'selected' : '' }}>Tanggal terbaru
                                </option>
                                <option value="2" {{ request()->sort == 2 ? 'selected' : '' }}>Tanggal terlama
                                </option>
                                <option value="3" {{ request()->sort == 3 ? 'selected' : '' }}>A - Z</option>
                                <option value="4" {{ request()->sort == 4 ? 'selected' : '' }}>Z - A</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn rounded-4 text-light w-100" style="background: #000000"><i
                                    class="fa-solid fa-magnifying-glass text-light"></i> Cari Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card card-body rounded-5 my-4 p-4 shadow-sm">
                <div class="table-responsive">
                    <table class="table-borderless table-sm m-0 table p-0" id="table-download">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Dokumen</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Unduh</th>
                            </tr>
                        </thead>
                        <tbody class="small">
                            @forelse ($documents as $document)
                                <tr>
                                    <td class="text-capitalize">{{ $document->name }}</td>
                                    <td>{{ $document->kategori->name }}</td>
                                    <td>{{ $document->created_at }}</td>
                                    <td><a href="{{ url('download/' . $document->id) }}"
                                            class="btn btn-sm bg-green text-light rounded-4 w-100">Unduh</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <h6 class="m-0 p-0 text-center">Data tidak ada</h6>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- pagination link -->
                    <div class="d-flex justify-content-center align-items-center m-4">
                        {{ $documents->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
