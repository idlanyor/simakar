@extends('layouts.inner')
@section('title', 'Login')
@section('cssbawah')
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div id="loginform">
                <div class="text-center p-t-20 p-b-20">
                    <span class="db"><img style="margin-bottom: 5px" src="{{ asset('assets/images/makar.png') }}"
                            width="80px" alt="logo" /></span>
                    <p class="text-center text-success">Login Pendaftar,Siswa, dan Guru</p>
                </div>
                <!-- Form -->
                @if (session('status'))
                    <div class="mb-4 font-medium text-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Form -->
                <form class="form-horizontal m-t-20" id="loginform" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row p-b-30">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                            class="ti-user"></i></span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                            class="ti-lock"></i></span>
                                </div>
                                <input type="password" class="form-control form-control-lg" name="password"
                                    placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="p-t-20">
                                    <button class="btn btn-block btn-lg btn-success" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsbawah')
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
        $('#to-login').click(function() {

            $("#recoverform").hide();
            $("#loginform").fadeIn();
        });

    </script>
@endsection
