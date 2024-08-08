@extends('back.layouts.index')
@section('content')
    <div class="be-contents">
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border-color card-border-color-danger">
                        <div class="card-header card-header-divider">Form<span class="card-subtitle">Tambah Portofolio</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.portofolio.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group pt-2">
                                    <label for="title">Judul</label>
                                    <input class="form-control @error('title') is-invalid @enderror" id="title"
                                        name="title" type="text" placeholder="Judul">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="desc">Keterangan</label>
                                    <textarea class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc"></textarea>
                                    @if ($errors->has('desc'))
                                        <span class="text-danger">{{ $errors->first('desc') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
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
                                            <a href="{{ route('admin.portofolio') }}"
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
