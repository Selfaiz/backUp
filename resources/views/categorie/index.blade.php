@extends('layouts.master')
@section('title','MAALAM LIK - All Categories')
@section('style') 
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection
@section('content')
<section class="home section" id="home">
    <div class="conatiner">
        <div class="container">
            <div class="popular__titles">
                <span class="section__subtitle">
                    Our Categories
                </span>
                <h2 class="section__title white">
                    All Categories Metier
                </h2> 
        </div>
        <div class="popular__flex">
            @foreach ($categories as $categorie)
            <x-article-categorie :categorie="$categorie"/>
        @endforeach
        </div>
    </div>
</section>
@endsection

@section('script') 
    <!--=============== MAIN JS ===============-->
    <script defer src="assets/js/script.js"></script> 

@endsection