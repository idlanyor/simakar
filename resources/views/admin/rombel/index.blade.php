@extends('layouts.admin.template')
@section('cssbawah')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('title','Daftar Rombel')
@section('bread','Daftar Rombel')
@section('content')
<div class="card">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#rombel" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Data Rombel</span></a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kelas" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Data Kelas</span></a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jurusan" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Data Jurusan</span></a> </li>
    </ul>
    <div class="tab-content tabcontent-border">
        <div class="card-body tab-pane active" id="rombel" role="tabpanel">
            <h5 class="card-title">Daftar Rombel
            <a href="{{ route('kelas.create') }}" style="float: right" class="btn btn-success" ><i class="fas fa-plus"></i>&nbsp;Tambah Rombel</a></h5><br>
            <div class="table-responsive">
                <table id="zero_rombel" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th width="1px">No</th>
                            <th width="78px">Action</th>
                            <th>Nama Rombel</th>
                            <th>Jurusan</th>
                            <th>Jumlah Siswa</th>
                            <th>Wali Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no1 = 0; ?>
                        @foreach ($rombel as $r)
                        <tr>
                            <td>{{ ++$no1 }}</td>
                            <td><a href="" style="margin-right: 10px" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a><a href="" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
                            <td>{{ $r->nama_rombel }}</td>
                            <td>{{ $r->jurusan->nama_jurusan }}</td>
                            <td>23</td>
                            <td>{{ $r->wk->nama_lengkap }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-body tab-pane p-20" id="kelas" role="tabpanel">
            <h5 class="card-title">Daftar Kelas
            <a href="{{ route('kelas.tambahKelas') }}" style="float: right" class="btn btn-success" ><i class="fas fa-plus"></i>&nbsp;Tambah Kelas</a></h5><br>
            <div class="table-responsive">
                <table id="zero_kelas" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th width="1px">No</th>
                            <th width="78px">Action</th>
                            <th>Nama Kelas</th>
                            <th>SEO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no2 = 0; ?>
                        @foreach ($kelas as $k)
                        <tr>
                            <td>{{ ++$no2 }}</td>
                            <td><a href="" style="margin-right: 10px" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a><a href="" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
                            <td>{{ $k->nama_kelas }}</td>
                            <td>{{ $k->seo_kelas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-body tab-pane p-20" id="jurusan" role="tabpanel">
            <h5 class="card-title">Daftar Jurusan
            <a href="{{ route('kelas.createJurusan') }}" style="float: right" class="btn btn-success" ><i class="fas fa-plus"></i>&nbsp;Tambah Jurusan</a></h5><br>
            <div class="table-responsive">
                <table id="zero_jurusan" class="table table-striped table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th width="1px">No</th>
                            <th width="78px">Action</th>
                            <th>Nama Jurusan</th>
                            <th>SEO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no3 = 0; ?>
                        @foreach ($jurusan as $r)
                        <tr>
                            <td>{{ ++$no3 }}</td>
                            <td><a href="" style="margin-right: 10px" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a><a href="" class="btn btn-danger"><i class="fas fa-times"></i></a></td>
                            <td>{{ $r->nama_jurusan }}</td>
                            <td>{{ $r->seo_jurusan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

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
        $('#zero_rombel').DataTable();
        $('#zero_kelas').DataTable();
        $('#zero_jurusan').DataTable();
    </script>
@endsection
