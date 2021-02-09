@extends('layouts.admin.template')
@section('title', 'Daftar Guru dan Karyawan')
@section('cssbawah')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Sumber Data Jenis GTK
                <button type="button" style="float: right" class="btn btn-success"
                name="create_record" id="create_record" data-toggle="modal" data-target="#formModal" ><i class="fas fa-user-plus">
                    </i>Tambah Data</button>
            </h5><br>
            <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('create.source') }}">
                            @csrf
                            <div class="modal-header bg-light">
                                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span id="form_result"></span>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Jenis GTK</label>
                                    <input type="text" name="jenis_gtk" class="form-control" id="recipient-name">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-rounded"
                                    data-dismiss="modal">Tutup</button>
                                <input type="submit" value="Tambahkan" class="btn btn-primary btn-rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="1px">No</th>
                            <th width="78px">Action</th>
                            <th>Jenis GTK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($srcgtk as $data)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td><a href="" style="margin-right: 10px" class="btn btn-info"><i
                                            class="fas fa-pencil-alt"></i></a><a href="" class="btn btn-danger"><i
                                            class="fas fa-times"></i></a></td>
                                <td>{{ $data->jenis_gtk }}</td>
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
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

    </script>
@endsection
