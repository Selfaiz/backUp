@extends('layouts.master')
@section('title','MAALAM LIK - All Categories')
@section('style') 
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/styleDASH.css')}}">
@endsection
@section('content')
@dd('chp')
@endsection

@section('script') 
    <!--=============== MAIN JS ===============-->
    <script defer src="{{asset('assets/js/script.js')}}"></script> 
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset('assets/js/feather.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

    <script src="{{asset('assets/js/scriptDash.js')}}"></script>

@endsection