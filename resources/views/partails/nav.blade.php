<header class="header" id="header">
    <nav class="nav container">
        <a href="/" class="nav__logo">
            Maalam Lik <!-- Logo here -->
        </a>

        {{-- @isset($aa) --}}
        <div class="nav__menu"  id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/#home':'#home'}}" class="nav__link active-link">
                        <i class="bx bx-home-alt-2"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/#client':'#client'}}" class="nav__link ">
                        <i class="bx bx-award"></i>
                        <span>Client & Partenaire</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/#popular':'#popular'}}" class="nav__link">
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
                    <a href="{{Route::current()->getName()?'/#value':'#value'}}" class="nav__link">
                        <i class="bx bx-home-circle"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{Route::current()->getName()?'/#contact':'#contact'}}" class="nav__link">
                        <i class="bx bx-conversation"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- dark mode  -->
        <i class="bx bx-moon dark-mode" id="switch-button"></i>
        {{-- @endisset --}}
        <a href="{{ route('login.index') }}" class="button nav__button">
            Login
        </a>

    </nav>
</header>
