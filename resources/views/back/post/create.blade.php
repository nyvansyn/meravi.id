@extends('back.layouts.index')
@push('css')
    <script src="https://unpkg.com/slim-select@latest/dist/slimselect.min.js"></script>
    <link href="https://unpkg.com/slim-select@latest/dist/slimselect.css" rel="stylesheet">
@endpush
@section('content')
    <div class="be-contents">
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border-color card-border-color-danger">
                        <div class="card-header card-header-divider">Form<span class="card-subtitle">Tambah dokumen</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group pt-2">
                                    <label>Pilih Kategori</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror"
                                        name="category_id">
                                        {{-- <option value="1" selected>1</option> --}}
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="title">Judul</label>
                                    <input class="form-control @error('title') is-invalid @enderror" id="title"
                                        name="title" type="text" placeholder="Nama dokumen">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="keywords">Keywords</label>
                                    <input type="text" name="keywords"
                                        class="form-control @error('keywords') is-invalid @enderror" id="keywords"
                                        placeholder="Keywords">
                                    @if ($errors->has('keywords'))
                                        <span class="text-danger">{{ $errors->first('keywords') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="meta_desc">Meta Description</label>
                                    <input type="text" name="meta_desc"
                                        class="form-control @error('meta_desc') is-invalid @enderror" id="meta_desc"
                                        placeholder="Meta description">
                                    @if ($errors->has('meta_desc'))
                                        <span class="text-danger">{{ $errors->first('meta_desc') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label for="desc">Konten</label>
                                    <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="editor1" cols="30"
                                        rows="10"></textarea>
                                    @if ($errors->has('desc'))
                                        <span class="text-danger">{{ $errors->first('desc') }}</span>
                                    @endif
                                </div>

                                <div class="form-group pt-2">
                                    <label>Tags</label>
                                    <select name="tags[]" class="form-control @error('tags') is-invalid @enderror"
                                        id="selectElement" multiple>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('tags'))
                                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {{-- <label class="text-sm-right" for="file-2">File Input</label> --}}
                                    <label>Upload Gambar Cover</label>
                                    <div class="">
                                        <input class="inputfile @error('cover') is-invalid @enderror" id="cover"
                                            type="file" name="cover" data-multiple-caption="{count} files selected"
                                            multiple>
                                        <label class="btn-primary" for="cover"> <i
                                                class="mdi mdi-upload"></i><span>Browse files...</span></label>
                                        @if ($errors->has('cover'))
                                            <span class="text-danger">{{ $errors->first('cover') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row pt-3">

                                    <div class="col-sm-12">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-danger" type="submit">Simpan</button>
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
@push('js')
    <script type="text/javascript">
        new SlimSelect({
            select: '#selectElement'
        });
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dataTables();
            App.textEditors();
            App.formElements();
            // $('#table4').DataTable();
        });
    </script>
@endpush
