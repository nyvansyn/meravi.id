@extends('back.layouts.index')
@section('content')
    <div class="be-contents">
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border-color card-border-color-danger">
                        <div class="card-header card-header-divider">Form<span class="card-subtitle">Edit Tag</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.post.tag.update', $tag->id) }}" method="POST">
                                @csrf
                                <div class="form-group pt-2">
                                    <label for="name">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{ $tag->name }}" type="text" placeholder="Nama tag">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="keywords">Keywords</label>
                                    <input type="text" name="keywords" value="{{ $tag->keywords }}"
                                        class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                        placeholder="Keywords">
                                    @if ($errors->has('keywords'))
                                        <span class="text-danger">{{ $errors->first('keywords') }}</span>
                                    @endif
                                </div>
                                <div class="form-group pt-2">
                                    <label for="meta_desc">Meta Description</label>
                                    <input type="text" name="meta_desc" value="{{ $tag->meta_desc }}"
                                        class="form-control @error('meta_desc') is-invalid @enderror" id="meta_desc"
                                        placeholder="Meta description">
                                    @if ($errors->has('meta_desc'))
                                        <span class="text-danger">{{ $errors->first('meta_desc') }}</span>
                                    @endif
                                </div>

                                <div class="row pt-3">

                                    <div class="col-sm-12">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-danger" type="submit">Update</button>
                                            <a href="{{ route('admin.post.tag') }}"
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
