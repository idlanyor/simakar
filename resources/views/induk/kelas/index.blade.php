@extends('layouts.admin.template')
@section('cssbawah')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('title','Daftar Kelas')
@section('bread','Daftar Kelas')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Daftar Kelas
        <a href="{{ route('kelas.create') }}" style="float: right" class="btn btn-success" ><i class="fas fa-plus"></i>&nbsp;Tambah Kelas</a></h5><br>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="1px">No</th>
                        <th width="78px">Action</th>
                        <th>Nama Kelas</th>
                        <th>SEO</th>
                        <th>Jumlah Siswa</th>
                        <th>Wali Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $k)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td><a href="" style="margin-right: 10px" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a><a href="" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
                        <td>{{ $k->name }}</td>
                        <td>{{ $k->email }}</td>
                        <td>{{ $k->level }}</td>
                        <td>{{ $k->id }}</td>
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
