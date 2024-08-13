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
                        <div class="card-header card-header-divider">Form<span class="card-subtitle">Edit Klient</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.client.update', $client->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group pt-2">
                                    <label for="name">Judul</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{ $client->name }}" type="text" placeholder="Judul">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
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
                                    <img src="{{ asset('back/assets/client/' . $client->image) }}" width="100"
                                        height="28">
                                </div>

                                <div class="row pt-3">

                                    <div class="col-sm-12">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-danger" type="submit">Update</button>
                                            <a href="{{ route('admin.client') }}"
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
