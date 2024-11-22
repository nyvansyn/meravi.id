@extends('back.layouts.index')
@section('content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">List Post Artikel
                        <div class="tools dropdown">
                            <a class="btn btn-space btn-primary" href="{{ route('admin.post.create') }}"><i
                                    class="icon mdi mdi-plus-square"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Cover</th>
                                    <th>Kategori</th>
                                    <th>Tag</th>
                                    <th>Judul</th>
                                    <th>Keywords</th>
                                    <th>Meta deskripsi</th>
                                    {{-- <th>Konten</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><img src="{{ asset('back/assets/img/article/' . $post->cover) }}" width="80"
                                                height="40">
                                            </img></td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>
                                            @foreach ($post->tags as $tag)
                                                <span class="badge badge-success m-1">{{ $tag->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->keywords }}</td>
                                        <td>{{ $post->meta_desc }}</td>
                                        {{-- <td>{!! $post->desc !!}</td> --}}
                                        <td class="actions d-flex">
                                            <a class="btn btn-space btn-warning"
                                                href="{{ route('admin.post.edit', $post->id) }}"><i
                                                    class="icon mdi mdi-edit"></i></a>
                                            <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                                                class="btn btn-space btn-info"><i class="icon mdi mdi-eye"></i></a>
                                            <form action="{{ route('admin.post.destroy', $post->id) }}" method="post">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="btn btn-space btn-danger"><i
                                                        class="icon mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dataTables();
            // $('#table4').DataTable();
        });
    </script>
@endpush
