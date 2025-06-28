@extends('layouts.frontend')
@section('content')
<!-- header__topbar__start -->
       
        <!-- header__topbar__end -->
        
        
        <!-- header section start -->
        
            <!-- Mobile Menu Start Here -->
            <div class="mobile-off-canvas-active">
                <a class="mobile-aside-close"><i class="fa fa-close"></i></a>
                <div class="header-mobile-aside-wrap">
        
                    <div class="mobile__logo">
                        <a href="index.html">
                            <img src="{{asset('assets/frontend/img/logo/logo_1.png')}}" alt="Logo">
                        </a>
                    </div>
        
                    <div class="mobile-search">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search entire store…">
                            <button class="button-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap">
        
                        <div class="mobile-navigation">
        
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="index.html">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Fashion 1</a></li>
                                            <li><a href="home-2.html">Fashion 2</a></li>
                                            <li><a href="home-3.html">Fashion 3</a></li>
                                            <li><a href="home-4.html">Beauty</a></li>
                                            <li><a href="home-5.html">Jewelry</a></li>
                                            <li><a href="home-6.html">T-Shirt</a></li>
                                            <li><a href="home-7.html">Electronics</a></li>
                                            <li><a href="home-8.html">Single Product</a></li>
                                            <li><a href="home-9-dark.html">Home Dark</a></li>
                                        </ul>
                                    </li>
        
                                    <li class="menu-item-has-children"><a href="shop.html">Shop</a>
        
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Women's Fashion</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Tops & Blouses</a></li>
                                                    <li><a href="#">Sweaters & Cardigans</a></li>
                                                    <li><a href="#">Jackets & Coats</a></li>
                                                    <li><a href="#">Pants & Jeans</a></li>
                                                    <li><a href="#">Skirts</a></li>
                                                    <li><a href="#">Active wear</a></li>
                                                    <li><a href="#">Lingerie & Sleepwear</a></li>
                                                </ul>
                                            </li>
        
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Men's Fashion</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Shirts</a></li>
                                                    <li>
                                                        <a href="#">T-Shirts & Polos
                                                            <span class="header__label hot__color">Hot</span>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">Sweaters & Hoodies</a></li>
                                                    <li><a href="#">Jackets & Blazers</a></li>
                                                    <li><a href="#">Pants & Chinos</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Suits & Formal wear</a></li>
                                                    <li><a href="#">Active wear</a></li>
                                                </ul>
                                            </li>
        
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Accessories</a>
                                                <ul class="dropdown">
        
                                                    <li><a href="#">Bags & Purses</a></li>
                                                    <li><a href="#">Hats & Caps</a></li>
                                                    <li><a href="#">Scarves & Shawls</a></li>
                                                    <li><a href="#">Belts & Suspenders</a></li>
                                                    <li>
                                                        <a href="#">Sunglasses
                                                            <span class="header__label">New</span>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">Jewelry</a></li>
                                                    <li><a href="#">Watches</a></li>
                                                    <li><a href="#">Mobile</a></li>
        
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Footwear</a>
                                                <ul class="dropdown">
        
                                                    <li><a href="#">Flats & Loafers</a></li>
                                                    <li><a href="#">Heels & Pumps</a></li>
                                                    <li><a href="#">Sneakers & Athletic</a></li>
                                                    <li><a href="#">Dress Shoes</a></li>
                                                    <li><a href="#">Casual Shoes</a></li>
                                                    <li><a href="#">Boots & Chukkas</a></li>
                                                    <li><a href="#">Sandals & Slides</a></li>
                                                    <li><a href="#">Pumps & Slides</a></li>
        
                                                </ul>
                                            </li>
        
                                        </ul>
        
        
                                    </li>
        
                                    <li class="menu-item-has-children"><a href="categories.html">Categories</a>
                                        <ul class="dropdown">
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Featured Product</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__1.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">New Arrivals</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__2.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Summer Styles</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__3.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Winter Fashion</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__4.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Accessories</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__5.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Footwear</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__6.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Men</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__7.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
                                            <li class="menu-item-has-children">
                                                <a class="menu__title" href="categories.html">Women</a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href="categories.html">
                                                            <img class="img-fluid" src="{{asset('assets/frontend/img/collection/collection__8.png')}}"
                                                                alt="Collection">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
        
        
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a>
                                    </li>
        
                                    <li class="menu-item-has-children"><a href="blog.html">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="service.html">Service</a></li>
<li><a href="faq.html">FAQ</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="categories.html">Categories</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="https://themeforest.net/user/marino-themes">Purchase Now</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
        
                        </div>
        
        
                    </div>
                    <div class="mobile-curr-lang-wrap">
                        <div class="single-mobile-curr-lang">
                            <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English (US)</a></li>
                                    <li><a href="#">English (UK)</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
        
                        <div class="single-mobile-curr-lang">
                            <a class="mobile-account-active" href="#">My Account <i class="fa fa-angle-down"></i></a>
                            <div class="lang-curr-dropdown account-dropdown-active">
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Creat Account</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-social-wrap">
                        <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="google" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end Here -->
        
            <!-- setting__wrap__list__start -->
            <div class="setting__wrap__list">
                <button class="setting__wrap__close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <title>Close</title>
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M368 368L144 144M368 144L144 368"></path>
                    </svg></button>
        
                <div class="setting__wrap__heading">
                    <h6>
                        <a href="#">Account</a>
                    </h6>
                </div>
                <div class="setting__wrap__list__inner">
                    <ul>
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="cart.html">Cart</a>
                        </li>
                        <li>
                            <a href="wishlist.html">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- setting__wrap__list__end -->
        
            <!-- header__search -->
            <div class="headersearch__active">
                <div class="headersearch__active__icon">
                    <button class="headersearch__active__close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <title>Close</title>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                        </svg></button>
                </div>
                <div class="headersearch__active__input">
                    <form action="/search" method="get" role="search" style="position: relative;">
                        <div class="header__form__search">
                            <input type="search" name="q" value="" placeholder="Search our store" class="input-text"
                                autocomplete="off">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- header__search -->
                
            <!-- minicart__section__start -->
            <section class="minicart">
                <div class="minicart__inner">
                    <div class="minicart__wraper">
                        <div class="minicart__close__icon">
                            <div class="minicart__cart__text ">
                                <strong>Cart</strong>
                            </div>
                            <button class="minicart__close__btn">
                                <i class="fa fa-close"></i>
                            </button>
        
                        </div>
        
                        <div class="minicart__single__wraper">
                            <div class="minicart__single">
        
                                <div class="minicart__single__img">
                                    <a href="single-product.html">
                                        <img src="{{asset('assets/frontend/img/grid/grid_1.png')}}" alt="product">
                                    </a>
                                    <div class="minicart__single__close">
                                        <button title="Remove"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="minicart__single__content">
                                    <h4><a href="single-product.html">E. Casual Comforts T-shirt</a></h4>
                                    <span>1 x <span class="money">$5,.00 USD</span></span>
        
                                </div>
        
                            </div>
        
                            <div class="minicart__single">
        
                                <div class="minicart__single__img">
                                    <a href="single-product.html">
                                        <img src="{{asset('assets/frontend/img/grid/grid_2.png')}}" alt="product">
                                    </a>
                                    <div class="minicart__single__close">
                                        <button title="Remove"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="minicart__single__content">
                                    <h4><a href="single-product.html">M. Denim Clothing Jacket</a></h4>
                                    <span>1 x <span class="money">$4,.00 USD</span></span>
        
                                </div>
        
                            </div>
                        </div>
        
                        <div class="minicart__footer">
                            <div class="minicart__subtotal">
                                <span class="subtotal__title">Subtotal:</span>
                                <span class="subtotal__amount">$9.00 USD</span>
                            </div>
                            <div class="minicart__button">
                                <a href="cart.html" class="default__button">View Cart</a>
                                <a href="checkout.html" class="default__button">Checkout</a>
                            </div>
                            <div class="cart__note__text">
                                <p>Free Shipping on All Orders Over $100!</p>
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </section>
            <!-- minicart__section__end -->
        
        </header>
        <!-- header section end -->






        <!-- breadcrumb__start -->
        <div class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__title">
                            <h1>About Us</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="color__blue">
                                    About Us
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- breadcrumb__end -->

        <!-- about__section__start -->
            <div class="about sp__top__80 sp__bottom__80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                            <div class="about__text">
                                <h2>Minimal<span class="primary__color">in</span> E-Commerce</h2>
                                <p>Minimalin E-Commerce is a dynamic and innovative online retail platform that offers a wide range of products to customers worldwide. Established in 1191, our company has rapidly grown to become a prominent player in the eCommerce industry. Our mission is to provide customers with a seamless and convenient shopping experience while offering a diverse selection of high-quality products.</p>
                                <p>Minimalin E-Commerce is dedicated to setting new standards in the eCommerce landscape, providing convenience, choice, and quality to our valued customers.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                            <div class="about__img">
                                <img src="{{asset('assets/frontend/img/about/about__1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- about__section__end -->

        <!-- video__banner__section -->
            <div class="video sp__bottom__80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="video__img">
                                <img src="{{asset('assets/frontend/img/about/video-banner__1.jpg')}}" alt="">
                                <div class="video__icon">
                                    <a class="video-btn" href="https://www.youtube.com/watch?v=JQpk-DoMn3I"> <i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- video__banner__section -->

       <!-- testimonial__section__start -->
       <div class="testimonial sp__bottom__80">
        <div class="container testimonial__color testimonial__color__5">
            <div class="row testimonial__slider__active slider__default__arrow slider__default__dot slider__default__dot--2">
                <div class="col-xl-12">
                    <div class="testimonial__inner testimonial__padding text-center">
                        <div class="testimonial__img">
                            <i class="fa fa-quote-right"></i>
                          </div>

                          <div class="testimonial__info">
                            <p>Writing has never been my strong suit, but ChatGPT has changed the game for me. Whether it's crafting compelling emails, creative stories, or engaging social media posts.</p>
                            <h4>Michael Chen</h4>
                          </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="testimonial__inner testimonial__padding text-center">
                        <div class="testimonial__img">
                            <i class="fa fa-quote-right"></i>
                          </div>

                          <div class="testimonial__info">
                            <p>Writing has never been my strong suit, but ChatGPT has changed the game for me. Whether it's crafting compelling emails, creative stories, or engaging social media posts.</p>
                            <h4>Michael Chen</h4>
                          </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="testimonial__inner testimonial__padding text-center">
                        <div class="testimonial__img">
                            <i class="fa fa-quote-right"></i>
                          </div>

                          <div class="testimonial__info">
                            <p>Writing has never been my strong suit, but ChatGPT has changed the game for me. Whether it's crafting compelling emails, creative stories, or engaging social media posts.</p>
                            <h4>Michael Chen</h4>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial__section__start -->

        <!-- brant__section__start -->
            <div class="brand sp__bottom__80">
                <div class="container">
                    <div class="brand__wraper brand__slider__active">
                        <div class="brand__single">
                            <div class="brand__img">
                                <img src="{{asset('assets/frontend/img/brand/brand-logo-1.png')}}" alt="">
                            </div>
                        </div>

                        <div class="brand__single">
                            <div class="brand__img">
                                <img src="{{asset('assets/frontend/img/brand/brand-logo-2.png')}}" alt="">
                            </div>
                        </div>

                        <div class="brand__single">
                            <div class="brand__img">
                                <img src="{{asset('assets/frontend/img/brand/brand-logo-3.png')}}" alt="">
                            </div>
                        </div>

                        <div class="brand__single">
                            <div class="brand__img">
                                <img src="{{asset('assets/frontend/img/brand/brand-logo-4.png')}}" alt="">
                            </div>
                        </div>

                        <div class="brand__single">
                            <div class="brand__img">
                                <img src="{{asset('assets/frontend/img/brand/brand-logo-5.png')}}" alt="">
                            </div>
                        </div>

                        <div class="brand__single">
                            <div class="brand__img">
                                <img src="{{asset('assets/frontend/img/brand/brand-logo-6.png')}}" alt="">
                            </div>
                        </div>

                        <div class="brand__single">
                            <div class="brand__img">
                                <img src="{{asset('assets/frontend/img/brand/brand-logo-7.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- brant__section__end -->

        @endsection