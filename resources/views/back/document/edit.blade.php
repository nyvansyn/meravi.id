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
                        <div class="card-header card-header-divider">Form<span class="card-subtitle">Edit Kategori</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.document.update', $document->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group pt-2">
                                    <label>Pilih Kategori</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror"
                                        name="category_id">
                                        <option value="{{ $document->kategori->id }}" selected>
                                            {{ $document->kategori->name }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="name">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{ $document->name }}" type="text"
                                        placeholder="Nama dokumen">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {{-- <label class="text-sm-right" for="file-2">File Input</label> --}}
                                    <label>Upload File</label>
                                    <div class="">
                                        <input class="inputfile @error('path') is-invalid @enderror" id="path"
                                            type="file" name="path" data-multiple-caption="{count} files selected"
                                            multiple>
                                        <label class="btn-primary" for="path"> <i
                                                class="mdi mdi-upload"></i><span>Browse files...</span></label>
                                        @if ($errors->has('path'))
                                            <span class="text-danger">{{ $errors->first('path') }}</span>
                                        @endif
                                    </div>
                                    <embed type="application/pdf" src="{{ asset('back/assets/doc/' . $document->path) }}"
                                        width="400" height="200">
                                    </embed>
                                </div>

                                <div class="row pt-3">

                                    <div class="col-sm-12">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-danger" type="submit">Update</button>
                                            <a href="{{ route('admin.document') }}"
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
