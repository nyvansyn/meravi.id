@extends('back.layouts.index')
@section('content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">List Tag
                        <div class="tools dropdown">
                            <a class="btn btn-space btn-primary" href="{{ route('admin.post.tag.create') }}"><i
                                    class="icon mdi mdi-plus-square"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Keywords</th>
                                    <th>Meta Description</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->keywords }}</td>
                                        <td>{{ $tag->meta_desc }}</td>
                                        <td class="actions d-flex">
                                            <a class="btn btn-space btn-warning"
                                                href="{{ route('admin.post.tag.edit', $tag->id) }}"><i
                                                    class="icon mdi mdi-edit"></i></a>
                                            <form action="{{ route('admin.post.tag.destroy', $tag->id) }}" method="post">
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
