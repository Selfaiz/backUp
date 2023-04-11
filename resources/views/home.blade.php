@extends('layouts.master')
@section('title','MAALAM LIK')
@section('style')
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
@endsection
@section('content')
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__title">
                    Discover <br> Most Suitable <br> Property
                </h1>
                <p class="home__description">
                    Find a variety of properties that suit you very easily, 
                    forget all difficulties in finding a residence for you
                </p>
                <form action="/gogle" method="post" class="home__search">
                    <i class="bx bxs-map"></i>
                    <input type="search" name="search" id="search" placeholder="Search by location...." class="home__search-input">
                    <button class="button"> Search</button> 
                </form>
                <div class="home__value">
                    <div>
                        <h1 class="home__value-number">
                            9K <span>+</span>
                        </h1>
                        <span class="home__value-description">
                            Premium <br> Product
                        </span>
                    </div>
                    <div>
                        <h1 class="home__value-number">
                            2K <span>+</span>
                        </h1>
                        <span class="home__value-description">
                            Happy <br> Customer
                        </span>
                    </div>
                    <div>
                        <h1 class="home__value-number">
                            28K <span>+</span>
                        </h1>
                        <span class="home__value-description">
                            Awards <br> Winning
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="home__images">
                <div class="home__orbe"></div>
                <div class="home__img">
                    <img src="assets/img/home.jpg" alt="home image">
                </div>
            </div>
        </div>

    </section>

    <!--==================== LOGOS ====================-->
    <section class="logos section" id="client">
    <div class="logos__container container grid">
        <div class="logos__img">
            <img src="assets/img/logo1.png" alt="">
        </div>
        <div class="logos__img">
            <img src="assets/img/logo2.png" alt="">
        </div>
        <div class="logos__img">
            <img src="assets/img/logo3.png" alt="">
        </div>
        <div class="logos__img">
            <img src="assets/img/logo4.png" alt="">
        </div>
    </div>    
    </section>

    <!--==================== POPULAR ====================-->
    <section class="popular section " id="popular">
        <div class="container">
            <div class="popular__titles">
                <span class="section__subtitle">
                    Our Categories
                </span>
                <h2 class="section__title">
                    Popular Metier
                </h2>
            </div>
            <div class="popular__container swiper">
                <div class="popular__flex swiper-wrapper">
                    <article class="popular__card swiper-slide">
                        <img src="assets/img/popular1.jpg" alt="" class="popular__img">
                        <div class="popular__data">
                            <h2 class="popular__price">
                                <span>$</span>66,356
                            </h2>
                            <h3 class="popular__title">
                                Garden City Assat
                            </h3>
                            <p class="popular__description">                               
                                Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876
                            </p>
                        </div>
                    </article>
                    <article class="popular__card swiper-slide">
                        <img src="assets/img/popular3.jpg" alt="" class="popular__img">
                        
                        <div class="popular__data">
                            <h2 class="popular__price">
                                <span>$</span>66,356
                            </h2>
                            <h3 class="popular__title">
                                Garden City Assat
                            </h3>
                            <p class="popular__description">                               
                                Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876
                            </p>
                        </div>
                    </article>
                    <article class="popular__card swiper-slide">
                        <img src="assets/img/popular2.jpg" alt="" class="popular__img">
                        
                        <div class="popular__data">
                            <h2 class="popular__price">
                                <span>$</span>66,356
                            </h2>
                            <h3 class="popular__title">
                                Garden City Assat
                            </h3>
                            <p class="popular__description">                               
                                Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876
                            </p>
                        </div>
                    </article>
                    <article class="popular__card swiper-slide">
                        <img src="assets/img/popular4.jpg" alt="" class="popular__img">
                        
                        <div class="popular__data">
                            <h2 class="popular__price">
                                <span>$</span>66,356
                            </h2>
                            <h3 class="popular__title">
                                Garden City Assat
                            </h3>
                            <p class="popular__description">                               
                                Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876
                            </p>
                        </div>
                    </article>
                    <article class="popular__card swiper-slide">
                        <img src="assets/img/popular5.jpg" alt="" class="popular__img">
                        
                        <div class="popular__data">
                            <h2 class="popular__price">
                                <span>$</span>66,356
                            </h2>
                            <h3 class="popular__title">
                                Garden City Assat
                            </h3>
                            <p class="popular__description">                               
                                Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876
                            </p>
                        </div>

                    </article>
                </div>

                <div class="swiper-button-next">
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="bx bx-chevron-left"></i>
                </div>
                
            </div>
        </div>
    </section>

    <!--==================== VALUE ====================-->
    <section class="value section" id="value">
        <div class="value__container container grid">
            <div class="value__images">
                <div class="value__orbe">

                </div>
                <div class="value__img">
                    <img src="assets/img/value.jpg" alt="">
                </div>
            </div>
            <div class="value__content">
                <div class="value__data">
                    <span class="section__subtitle">
                        Our values
                    </span>
                    <h2 class="section__title">
                        Value we Give To You<Span>.</Span>
                    </h2>
                    <p class="value__description">
                        We always ready to help by providing the best service for you. 
                        We believe a good place to live can make your life better.
                    </p>
                </div>

                <!-- Accordion -->

                <div class="value__accordion">
                    <div class="value__accordion__item">
                        <header class="value__accordion-header">
                            <i class="bx bx-shield-x value__accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Best interest rates on the market
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bx-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Price we provides is the best for you, 
                                we guarantee no price changes on your property due 
                                to various unexpected costs that may come.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion__item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-x-square value__accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Prevent unstable prices
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bx-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Price we provides is the best for you, 
                                we guarantee no price changes on your property due 
                                to various unexpected costs that may come.
                            </p>
                        </div>
                    </div>

                    

                    <div class="value__accordion__item">
                        <header class="value__accordion-header">
                            <i class="bx bx-bar-chart-square value__accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Best prices on the market 
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bx-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Price we provides is the best for you, 
                                we guarantee no price changes on your property due 
                                to various unexpected costs that may come.
                            </p>
                        </div>
                    </div>


                    <div class="value__accordion__item">
                        <header class="value__accordion-header">
                            <i class="bx bx-check-square value__accordion-icon"></i>
                            <h3 class="value__accordion-title">
                                Security of your data
                            </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bx-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Price we provides is the best for you, 
                                we guarantee no price changes on your property due 
                                to various unexpected costs that may come.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== CONTACT ====================-->
    
    <section class="contact section" id="contact">
        <div class="contact__container container grid">
            <div class="contact__images">
                <div class="contact__orbe"></div>

                <div class="contact__img">
                    <img src="assets/img/contact.png" alt="">
                </div>
            </div>
            <div class="contact__content">
                <div class="contact__data">
                    <span class="section__subtitle">
                        Contact Us
                    </span>
                    <h2 class="section__title">
                        Easy to Contact us <span>.</span>
                    </h2>
                    <p class="contact__description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Eum modi exercitationem laboriosam Eum modi exercitationem laboriosam
                        Eum modi exercitationem laboriosam 
                    </p>
                </div>
                <div class="contact__card">

                    <div class="contact__card-box">
                        <div class="contact__card-info">
                            <i class="bx bxs-phone-call"></i>
                            <div>
                                <h3 class="contact__card-title">
                                    Call
                                </h3>
                                <p class="contact__card-description">
                                    022.321.165.19                                        </p>
                            </div>
                        </div>
                        <button class="button contact__card-button">
                            Call Now
                        </button>
                    </div>

                    <div class="contact__card-box">
                        <div class="contact__card-info">
                            <i class="bx bxs-message-rounded-dots"></i>
                            <div>
                                <h3 class="contact__card-title">
                                    Chat 
                                </h3>
                                <p class="contact__card-description">
                                    022.321.165.19                                       </p>
                            </div>
                        </div>
                        <button class="button contact__card-button">
                            Chat Now
                        </button>
                    </div>
 
                </div>
            </div>
        </div>
    </section>
     <!--========== SCROLL UP ==========-->
       <x-scroll-up/>

@endsection
@section('script')
    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script defer src="assets/js/script.js"></script>

@endsection