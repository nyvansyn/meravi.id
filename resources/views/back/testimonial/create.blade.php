@extends('back.layouts.index')
@section('content')
    <div class="be-contents">
        {{-- <div class="page-head">
            <h2 class="page-head-title">Form Elements</h2>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb page-head-nav">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div> --}}
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border-color card-border-color-danger">
                        <div class="card-header card-header-divider">Form<span class="card-subtitle">Tambah Testimoni</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.testimonial.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group pt-2">
                                    <label for="name">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" type="text" placeholder="Nama">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group pt-2">
                                    <label for="name">Jabatan</label>
                                    <input class="form-control @error('job_title') is-invalid @enderror" id="job_title"
                                        name="job_title" type="text" placeholder="Jabatan">
                                    @if ($errors->has('job_title'))
                                        <span class="text-danger">{{ $errors->first('job_title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label>Review</label>
                                    <select class="form-control @error('star') is-invalid @enderror" name="star">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @if ($errors->has('star'))
                                        <span class="text-danger">{{ $errors->first('star') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="testimonial">Testimoni</label>
                                    <textarea class="form-control @error('testimonial') is-invalid @enderror" id="testimonial" name="testimonial"></textarea>
                                    @if ($errors->has('testimonial'))
                                        <span class="text-danger">{{ $errors->first('testimonial') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {{-- <label class="text-sm-right" for="file-2">File Input</label> --}}
                                    <label>Upload Foto</label>
                                    <div class="">
                                        <input class="inputfile @error('image') is-invalid @enderror" id="image"
                                            type="file" name="image" data-multiple-caption="{count} files selected"
                                            multiple>
                                        <label class="btn-primary" for="image"> <i
                                                class="mdi mdi-upload"></i><span>Browse files...</span></label>
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row pt-3">

                                    <div class="col-sm-12">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-danger" type="submit">Simpan</button>
                                            <a href="{{ route('admin.testimonial') }}"
                                                class="btn btn-space btn-secondary">Cancel</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
