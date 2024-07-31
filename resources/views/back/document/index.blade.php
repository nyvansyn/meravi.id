@extends('back.layouts.index')
@section('content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">List Dokumen
                        <div class="tools dropdown">
                            <a class="btn btn-space btn-primary" href="{{ route('admin.document.create') }}"><i
                                    class="icon mdi mdi-plus-square"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Dokumen</th>
                                    <th>Kategori</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $document)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><embed type="application/pdf"
                                                src="{{ asset('back/assets/doc/' . $document->path) }}" width="80"
                                                height="40">
                                            </embed></td>
                                        <td>{{ $document->kategori->name }}</td>
                                        <td>{{ $document->name }}</td>
                                        <td class="actions d-flex">
                                            <a class="btn btn-space btn-warning"
                                                href="{{ route('admin.document.edit', $document->id) }}"><i
                                                    class="icon mdi mdi-edit"></i></a>
                                            <form action="{{ route('admin.document.destroy', $document->id) }}"
                                                method="post">
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
