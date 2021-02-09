@extends('layouts.admin.template')
@section('title', 'Edit User')
@section('cssbawah')
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/quill/dist/quill.snow.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-dark">
                    <h4 class="card-title"><i class="fas fa-edit"></i> Form Edit User</h4>
                </div> <br>

                <form action="" method="" autocomplete="off">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3  control-label col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3  control-label col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datepicker-autoclose" class="col-sm-3  control-label col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="tttt-bb-hh">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3  control-label col-form-label">Company</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-sm-3">Role User</label>
                            <div class="col-md-9">
                                <select  class=" form-control custom-select select2">
                                    <option id="role">--Pilih Salah Satu--</option>
                                        <option value="admin">Administrator</option>
                                        <option value="guru">Guru</option>
                                        <option value="staff">Karyawan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3  control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3  control-label col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" placeholder="Masukkan password yang sama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3  control-label col-form-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cono1" placeholder="Nomor Telepon">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body" style="float: right">
                            <button type="button" class="btn btn-outline-primary btn-rounded">Kirim</button>
                            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary btn-rounded">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsbawah')

<!-- This Page JS -->
<script src="{{ asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/pages/mask/mask.init.js') }}"></script>
<script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('assets/libs/toastr/build/toastr.min.js') }}"></script>
<script>
        $(function(){
            // Success Type
            $('#ts-success').on('click', function() {
                toastr.success('Have fun storming the castle!', 'Miracle Max Says');
            });

            // Success Type
            $('#ts-info').on('click', function() {
                toastr.info('We do have the Kapua suite available.', 'Turtle Bay Resort');
            });

            // Success Type
            $('#ts-warning').on('click', function() {
                toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
            });

            // Success Type
            $('#ts-error').on('click', function() {
                toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');
            });
        });
    </script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {
    //
    // Dear reader, it's actually very easy to initialize MiniColors. For example:
    //
    //  $(selector).minicolors();
    //
    // The way I've done it below is just for the demo, so don't get confused
    // by it. Also, data- attributes aren't supported at this time...they're
    // only used for this demo.
    //
    $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datepicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        format:'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

</script>
@endsection
