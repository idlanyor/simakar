@extends('layouts.admin.template')
@section('title', 'Daftar Guru dan Karyawan')
@section('cssbawah')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Daftar Guru dan Karyawan
                <a href="{{ route('guru.create') }}" style="float: right" class="btn btn-success"><i
                        class="fas fa-user-plus"></i>Tambah Guru</a>
            </h5><br>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th width="1px">No</th>
                            <th width="78px">Action</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Email</th>
                            <th>Jenis GTK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $gtk)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>
                                    <form action="{{ route('guru.destroy', $gtk->id) }}" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('data akan dihapus?')" type="submit"><i class="fas fa-times"></i></button>
                                        <a class="btn btn-info" href="{{ route('guru.edit', $gtk->id) }}"><i
                                                class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                                    </form>
                                </td>
                                <td>{{ $gtk->nama_lengkap }}</td>
                                <td>{{ $gtk->nik }}</td>
                                <td>{{ $gtk->email }}</td>
                                <td>{{ $gtk->jenis->jenis_gtk }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
@section('jsbawah')
    <!-- this page js -->
    <script src="{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

    </script>
@endsection
