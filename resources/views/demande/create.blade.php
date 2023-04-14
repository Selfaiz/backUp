@extends('layouts.master')
@section('title','MAALAM LIK | Demande ')
@section('style') 
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
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
        @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show   card" role="alert">
                    <ul>
                        <li>Vous avez quel que error Correct it</li>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif
        {{-- Alert D'ajoute --}}
        @if (session('Ajouter_Demande'))
        <div class="alert alert-sucess alert-dismissible fade show   card" role="alert">
            <ul>
                <li>{{sesion('Ajouter_Demande')}}</li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- Alert D'ajoute --}}
        @if (session('Error_create-demande'))
        <div class="alert alert-warning alert-dismissible fade show   card" role="alert">
            <ul>
                <li>{{sesion('Error_create-demande')}}</li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        {{-- Fin Alert D'ajoute --}}

        <form method="POST" action="{{route('demandes.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Nommeé Votre demande </label>
                                <input type="text" placeholder="Saisir le nom de votre demande" value="{{old('title')}}" name="title">
                                @error('title')
                                    <p style="color: red">
                                        {{$message}} 
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Ville <span class="Obligatoire">*</span></label>
                                <select class="select" name="Ville_adresse">
                                    <option disabled selected>Choisir Votre Ville</option>
                                    {{-- @foreach ($categies as $categorie)
                                    <option value="{{$categorie->id}}" {{ (old("categorie") == $categorie->id ? "selected":"") }}>{{$categorie->nom_categorie}}</option>
                                    @endforeach --}}
                                    <option>Tamessna</option>
                                    <option>Rabat</option>
                                    <option>Temara</option>
                                    <option>Zhailiga</option>
                                </select>
                                @error('Ville_adresse')
                                    <p style="color: red">
                                        {{$message}} 
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Votre Adresse  Complet <span class="Obligatoire">*</span></label>
                                <input type="text"  placeholder="Saisir Votre address ..." value="{{old('address')}}" name="address">
                                @error('address')
                                    <p style="color: red">
                                        {{$message}} 
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Choisir La Categorie <span class="Obligatoire">*</span></label>
                                <select class="select" name="categorie">
                                    <option  disabled selected >Choisir Categorie Ex: Plombier</option>
                                    <option value="1">BNAY</option>
                                    {{-- @foreach ($categies as $categorie)
                                    <option value="{{$categorie->id}}" {{ (old("categorie") == $categorie->id ? "selected":"") }}>{{$categorie->nom_categorie}}</option>
                                    @endforeach --}}
                                    <option value="2">GZAR</option>
                                    <option>SBA4</option>
                                    <option>7awfar</option>
                                </select>
                                @error('categorie')
                                    <p style="color: red">
                                        {{$message}} 
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Type De realisation de Travail <span class="Obligatoire">*</span></label> {{-- Ex: FUll time , mn l3chiya l3chiya lweekend--}}
                                <select class="select" name="Type_Travail">
                                    <option disabled selected >Choisir Le Type ...</option>
                                    {{-- @foreach ($categies as $categorie)
                                    <option value="{{$categorie->id}}" {{ (old("categorie") == $categorie->id ? "selected":"") }}>{{$categorie->nom_categorie}}</option>
                                    @endforeach --}}
                                    <option>LWA9t Kaml </option>
                                    <option>Lweekend</option>
                                    <option>les Nuit</option>
                                </select>
                                @error('Type_Travail')
                                    <p style="color: red">
                                        {{$message}} 
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description <span class="Obligatoire">*</span></label>
                                <textarea class="form-control"  placeholder="Donner une description de vous besoins" name="Description">{{old('Description')}}</textarea>
                                @error('Description')
                                    <p style="color: red">
                                        {{$message}} 
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                    <label> Image <span class="Optionnel">(Optionnel)</span></label>
                                    <div class="image-upload">
                                        <input type="file"  accept=".png, .jpg, .jpeg"  name="image_url" enctype="multipart/form-data">
                                        <div class="image-uploads">
                                            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Ajouter Images Pour Plus De Description <span class="Optionnel">(Optionnel)</span>  <span>Max: 3 MO</span> </h4>
                                        </div>
                                    </div>
                                    @error('image_url')
                                        <p style="color: red">
                                            {{$message}} 
                                        </p>
                                    @enderror
                                    

                                {{-- </form> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                    <label> other Images <span class="Optionnel">(Optionnel)</span></label>
                                    <div class="image-upload">
                                        <input type="file"  accept=".png, .jpg, .jpeg"  name="image_url2" enctype="multipart/form-data">
                                        <div class="image-uploads">
                                            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                                            <h4>Ajouter other Images <span class="Optionnel">(Optionnel)</span> <span>Max: 3 MO</span></h4>
                                            
                                        </div>
                                    </div>
                                    @error('image_url2')
                                            <p style="color: red">
                                                {{$message}} 
                                            </p>
                                        @enderror

                                {{-- </form> --}}
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit"  class="btn btn-success">Demander</button>
                            <a href="{{route('demandes.index')}}" id="Annuler">
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

    {{-- <script src="{{asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script> --}}

    <script src="{{asset('assets/js/scriptDash.js')}}"></script>
    <script>

    </script>
@endsection