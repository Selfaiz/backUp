<header class="header" id="header">
    <nav class="nav container">
        <a href="/" class="nav__logo">
            Maalam Lik <!-- Logo here -->
        </a>

        {{-- <div class="nav__menu"  id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/':'#home'}}" class="nav__link active-link">
                        <i class="bx bx-home-alt-2"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/':'#client'}}" class="nav__link ">
                        <i class="bx bx-award"></i>
                        <span>Client & Partenaire</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/':'#popular'}}" class="nav__link">
                        <i class="bx bx-home"></i>
                        <span>categorie</span>
                    </a>
                </li>
                <!-- <li class="nav__item">
                    <a href="#value" class="nav__link">
                        <i class="bx bxs-home-heart"></i>
                        <span>Qui Somme-nous ?</span>
                    </a>
                </li> -->
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/':'#value'}}" class="nav__link">
                        <i class="bx bx-home-circle"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/':'#contact'}}" class="nav__link">
                        <i class="bx bx-conversation"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div> --}}

        <!-- dark mode  -->
        <div>
            <i class="bx bx-moon dark-mode" id="switch-button"></i>
            @guest
            <a href="login" class="button nav__button">
                Login
            </a>
            @endguest
        </div>
    </nav>
</header>
