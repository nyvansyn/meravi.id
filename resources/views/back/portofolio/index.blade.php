@extends('back.layouts.index')
@section('content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">List Portofolio
                        <div class="tools dropdown">
                            <a class="btn btn-space btn-primary" href="{{ route('admin.portofolio.create') }}"><i
                                    class="icon mdi mdi-plus-square"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portofolios as $portofolio)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><img src="{{ asset('back/assets/portofolio/' . $portofolio->image) }}"
                                                width="40" height="40">
                                            </i></td>
                                        <td>{{ $portofolio->title }}</td>
                                        <td>{{ $portofolio->slug }}</td>
                                        <td>{{ $portofolio->desc }}</td>
                                        <td class="actions d-flex">
                                            <a class="btn btn-space btn-warning"
                                                href="{{ route('admin.portofolio.edit', $portofolio->id) }}"><i
                                                    class="icon mdi mdi-edit"></i></a>
                                            <form action="{{ route('admin.portofolio.destroy', $portofolio->id) }}"
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
