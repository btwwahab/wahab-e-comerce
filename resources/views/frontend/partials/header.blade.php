<!--=============== HEADER ===============-->
<header class="header">
    {{-- <div class="header__top">
        <div class="header__container container">
            <div class="header__contact">
                <span>(+01) - 2345 - 6789</span>
                <span>Our location</span>
            </div>
            <p class="header__alert-news">
                Super Values Deals - Save more coupons
            </p>
            <a href="login-register.html" class="header__top-action">
                Log In / Sign Up
            </a>
        </div>
    </div> --}}

    <nav class="nav container">
        <a href="index.html" class="nav__logo">
            <img class="nav__logo-img" src="{{ asset('assets/img/logo.svg') }}" alt="website logo" />
        </a>
        <div class="nav__menu" id="nav-menu">
            <div class="nav__menu-top">
                <a href="index.html" class="nav__menu-logo">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="">
                </a>
                <div class="nav__close" id="nav-close">
                    <i class="fi fi-rs-cross-small"></i>
                </div>
            </div>
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{route('home')}}" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="{{route('shop')}}" class="nav__link">Shop</a>
                </li>
                <li class="nav__item">
                    <a href="{{route('account')}}" class="nav__link">My Account</a>
                </li>
                <li class="nav__item">
                    <a href="{{route('compare')}}" class="nav__link">Compare</a>
                </li>
                <li class="nav__item">
                    <a href="{{route('login-signup')}}" class="nav__link">Login</a>
                </li>
            </ul>
            <div class="header__search">
                <input type="text" placeholder="Search For Items..." class="form__input" />
                <button class="search__btn">
                    <img src="{{ asset('assets/img/search.png') }}" alt="search icon" />
                </button>
            </div>
        </div>
        <div class="header__user-actions">
            <a href="{{route('wishlist')}}" class="header__action-btn" title="Wishlist">
                <img src="{{ asset('assets/img/icon-heart.svg') }}" alt="" />
                <span class="count">3</span>
            </a>
            <a href="{{route('cart')}}" class="header__action-btn" title="Cart">
                <img src="{{ asset('assets/img/icon-cart.svg') }}" alt="" />
                <span class="count">3</span>
            </a>
            <div class="header__action-btn nav__toggle" id="nav-toggle">
                <img src="{{ asset('assets/img/menu-burger.svg') }}" alt="">
            </div>
        </div>
    </nav>
</header>



