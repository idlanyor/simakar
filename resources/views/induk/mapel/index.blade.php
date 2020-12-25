@extends('layouts.admin.template')
@section('cssbawah')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Daftar Pengguna
        <a href="" style="float: right" class="btn btn-success" ><i class="fas fa-user-plus"></i>Tambah User</a></h5><br>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="1px">No</th>
                        <th width="78px">Action</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td><a href="" style="margin-right: 10px" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a><a href="" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td>{{ $user->id }}</td>
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
