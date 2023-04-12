 
<a href="{{route('categories.ouvrier',$categorie->id)}}" class="popular__card swiper-slide">
    <img src="assets/img/categories/{{$categorie->image_url}}" alt="" class="popular__img">
    <div class="popular__data">
        {{-- <h2 class="popular__price">
            <span>$</span>66,356
        </h2> --}}
        <h3 class="popular__title">
            {{$categorie->nom_categorie}}
        </h3>
        <p class="popular__description">                               
            {{$categorie->info_categorie}}
        </p> 
    </div>
</a>