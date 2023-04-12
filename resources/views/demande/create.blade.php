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
<div class="container-fluid">
    <div class="content">
        <div class="page-header ">
            <div class="page-title">
                <h4>Demande Ouvrier</h4>
                <h6>
                    <a href="{{Route('demandes.index')}}"> Demande </a>/Ajouter
                </h6>
            </div>
        </div>
        <form method="POST" action="{{route('demandes.store')}}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Nommeé Votre demande</label>
                                <input type="text" name="title">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Votre Adresse </label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Choisir La Categorie</label>
                                <select class="select">
                                    <option>Choose Country</option>
                                    <option>India</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Type De realisation de Travail</label> {{-- Ex: FUll time , mn l3chiya l3chiya lweekend--}}
                                <select class="select">
                                    <option disabled>Choisir Le Type ...</option>
                                    <option>LWA9t Kaml </option>
                                    <option>Lweekend</option>
                                    <option>les Nuit</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>City</label>
                                <select class="select">
                                    <option>Choose City</option>
                                    <option>City 1</option>
                                    <option>City 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Avatar</label>
                                <div class="image-upload">
                                    <input type="file">
                                    <div class="image-uploads">
                                        <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            {{-- <a href="{{route('demande.store')}}"  class="btn btn-submit me-2" >Submit</a>
                            <a href="" class="btn btn-cancel">Cancel</a> --}}
                            <button type="submit" class="btn btn-success">Demander</button>
                            <a href="" id="Annuler">
                                <button type="submit" class="btn btn-warning">Annuler</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</div>
<x-scroll-up>
</x-scroll-up>
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
    <script>

    </script>
@endsection