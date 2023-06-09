@extends('layouts.master')
@section('title','MAALAM LIK - All Categories')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/showD.css')}}">

{{-- <link rel="stylesheet" href="{{asset('assets/css/showD.css')}}"> --}}


@endsection
@section('content')
<section class="popular section " id="home">  
  {{-- Alert D'ajoute --}}
  @if(session('Ajouter_Demande'))
  <div class="alert-parent">
    <div class="alert alert-sucess" role="alert">
      <ul>
        <li>{{session('Ajouter_Demande')}}</li>
      </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  @endif
  {{-- end alert --}}
  <div class="conatiner__demande">
    <div class='container_card'>
      {{-- Card Demande --}}
      @foreach ($demandes as $demande)
          
      <div class="card">
        @foreach ($CategoriesImages as $item)
            
        @endforeach
        <div class="image-container">
          <img
            src="{{asset('https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp')}}"
            alt="Image Description">
        </div>
        <div class="content">
          <h2 class="title">Title of Card</h2>
            <div class="data_con">
              <p>Address</p>
              <div class="date">Date</div>
            </div>
          <div class="description">
            <p>Description with three points for show three points for show three points for show more...</p>
          </div>
          <div class="btn-center">
            <button class="show-more-btn">Show More</button>
            <button class="show-more-btn">Edite</button>
            <button class="show-more-btn">Delete</button>
          </div>
        </div>
      </div>
      @endforeach
        {{-- End Card Demande --}}
        <div class="card">
          <div class="image-container">
            <img
              src="{{asset('https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp')}}"
              alt="Image Description">
          </div>
          <div class="content">
            <h2 class="title">Title of Card</h2>
              <div class="data_con">
                <p>Address</p>
                <div class="date">Date</div>
              </div>
            <div class="description">
              <p>Description with three points for show three points for show three points for show more...</p>
            </div>
            <div class="btn-center">
              <button class="show-more-btn">Show More</button>
              <button class="show-more-btn">Edite</button>
              <button class="show-more-btn">Delete</button>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<!--=============== MAIN JS ===============-->
<script defer src="{{asset('assets/js/script.js')}}"></script>


<script>

  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'
  var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoHeight: true,
    pagination: {
      el: '.blog-slider__pagination',
      clickable: true,
    }
  });
</script>
@endsection