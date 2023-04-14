@extends('layouts.master')
@section('title','MAALAM LIK - All Categories')
@section('style') 
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/styleDASH.css')}}"> --}}
    {{-- <style>
        .section{
            height: 65vh;
        } 
    </style> --}}
@endsection
@section('content')
<section class="popular section " id="home">
    @if (session('Ajouter_Demande'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       <ul>
           <li class="text-center">Votre Demande a ete ajouter avec Success</li>
       </ul>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
    @endif
    <div class="conatiner__demande">
    </div>
</section>
@endsection

@section('script') 
    <!--=============== MAIN JS ===============-->
    <script defer src="{{asset('assets/js/script.js')}}"></script> 
@endsection