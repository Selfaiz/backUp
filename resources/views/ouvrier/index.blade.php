@extends('layouts.master')
@section('title','MAALAM LIK - All Categories')
@section('style') 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

@endsection
@section('content')
<section class="home section" id="home"> 
        <div class="container">
            <div class="popular__titles">
                <span class="section__subtitle">
                    Our Ouvrier
                </span>
                <h2 class="section__title white">
                    All Ouvriers Benay
                </h2> 
        </div>
        <div class="popular__flex">
            @forelse ($ouvriers as $ouvrier)
            <div class="card p-3">

                <div class="d-flex align-items-center">
                    <div class="image">
                        @if ($ouvrier->profile_url)
                        <img src="{{ asset('assets/profiles/' . $ouvrier->profile_url) }}" class="rounded" width="155" >
                            
                        @else
                        <img src="{{ asset('assets/profiles/ouvrier.jpg') }}" class="rounded" width="155" >
                        @endif
                </div>

                <div class="ml-3 w-100">
                    
                <h4 class="mb-0 mt-0 text-dark text-min" >{{ $ouvrier->prenom . ' ' . $ouvrier->nom}}</h4>
                <span>{{ $ouvrier->ville }}</span>

                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                    <div class="d-flex flex-column">
                        <span class="articles">Orders</span>
                        <span class="number1">{{$ouvrier->orders->count()}}</span>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="followers">Posts</span>
                        <span class="number2">{{$ouvrier->posts->count()}}</span>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="rating">Rating</span>
                        <span class="number3">8.9</span>
                    </div>
                </div>
                <div class=" mt-2 d-flex flex-row align-items-center">
                    <button class="btn btn-sm btn-outline-primary w-100">Chat</button>
                    <a href="{{route('ouvrier.profile',$ouvrier->id)}}" class="btn btn-sm btn-primary w-100 ml-2">Voir</a>
                </div>
                </div>
                </div>
            </div>
            
            @empty
                <h1>Noo Ouvrier</h1>
            @endforelse 
        </div> 
</section>
@endsection

@section('script') 
    <!--=============== MAIN JS ===============-->
    <script defer src="{{asset('assets/js/script.js')}}"></script> 
    <script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
  ></script>
@endsection