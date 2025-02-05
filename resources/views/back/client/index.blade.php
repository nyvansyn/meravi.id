@extends('back.layouts.index')
@section('content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header">List Klien
                        <div class="tools dropdown">
                            <a class="btn btn-space btn-primary" href="{{ route('admin.client.create') }}"><i
                                    class="icon mdi mdi-plus-square"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table4">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr class="odd gradeX">
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td><img src="{{ asset('back/assets/client/' . $client->image) }}" width="100"
                                                height="28">
                                            </i></td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->slug }}</td>
                                        <td class="actions d-flex">
                                            <a class="btn btn-space btn-warning"
                                                href="{{ route('admin.client.edit', $client->id) }}"><i
                                                    class="icon mdi mdi-edit"></i></a>
                                            <form action="{{ route('admin.client.destroy', $client->id) }}" method="post">
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
