<!DOCTYPE html>
<html lang="en">

<?php include 'components/head.php'; ?>


<style>
        .slider {
            width: 100%;
            /* height: 100vh; */
            background: 
                linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6)),
                url('assets/images/slider-main/image1.jpg') no-repeat center center / cover;
            animation: changeBackground 16s infinite;
        }

        @keyframes changeBackground {
            0%, 20% {
                background: 
                    linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6)),
                    url('assets/images/slider-main/image1.jpg') no-repeat center center / cover;
            }
            25%, 45% {
                background: 
                    linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6)),
                    url('assets/images/slider-main/image2.jpg') no-repeat center center / cover;
            }
            50%, 70% {
                background: 
                    linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6)),
                    url('assets/images/slider-main/image3.jpg') no-repeat center center / cover;
            }
            75%, 95% {
                background: 
                    linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6)),
                    url('assets/images/slider-main/image4.jpg') no-repeat center center / cover;
            }
            100% {
                background: 
                    linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6)),
                    url('assets/images/slider-main/image1.jpg') no-repeat center center / cover;
            }
        }
    </style>


  <body>
    <!-- progressbar -->
     <div class="progressbar"></div>
    <!--=============== HEADER ===============-->
    <header class="header">
    <div class="header__top">
      <div class="header__container container">
        <div class="header__contact">
          <span><a class="phone-number" style="color:white;" href="tel:+212661096881">(+212) 06.61.09.68.81</a><br>
                <a class="phone-number" style="color:white;" href="tel:+212661525399">(+212) 06.61.52.53.99 </a><br>
                <a class="phone-number" style="color:white;" href="tel:+212521000259">(+212) 05.21.00.02.59 </a><br>
                </span>

              </div>
        <p class="header__alert-news">
          BUSINESS CENTER Central Park Immeuble A 5ème Etage <br>
          Bureau N°37 BD Abdelmoumen MOHAMMEDIA 20650
        </p>
        <a href="login-register.php" class="header__top-action">
          Log In / Sign Up
        </a>
        
      </div>
    </div>

    <nav class="nav container">
      <a href="./index.php" class="nav__logo">
        <img src="assets/img/logo-afri.png" alt="" class="nav__logo-img">
      </a>

      <div class="nav__menu" id="nav-menu">
        <div class="nav__menu-top">
          <a href="index.php" class="nav__menu-logo">
            <img src="assets/images/favicon/favicon.ico" alt="">
          </a>

          <div class="nav__close" id="nav-close">
            <i class="fi fi-rs-cross-small"></i>
            </div>
        </div>

        <ul class="nav__list">
          <li class="nav__item">
            <a href="index.php" class="nav__link active-link">Accueil</a>
          </li>

          <li class="nav__item dropdown">
            <a href="#" class="nav__link">La Société</a>
            <button class="arrow-nav-s">
            <img src="assets/img/down-arrow.png" alt="">
           </button>
            <ul class="dropdown-menu">
              <li><a href="societe/historique.php">Historique</a></li>
              <li><a href="societe/presentation.php">Presentation de la Société </a></li>
              <li><a href="societe/Temoignages.php">Temoignages</a></li>
            </ul>
          </li>

          <li class="nav__item dropdown">
            <a href="shop.php" class="nav__link">Produits</a>
            <button class="arrow-nav">
            <img src="assets/img/down-arrow.png" alt="">
           </button>
          <ul class="dropdown-menu">
              <li><a href="#">Catégorie Téte</a></li>
              <li><a href="#">Catégorie Mains</a></li>
              <li><a href="#">Catégorie corps</a></li>
              <li><a href="#">Catégorie pieds</a></li>
              <li><a href="#">Catégorie d'intervention</a></li>
              <li><a href="#">Catégorie l'incendie</a></li>
              <li><a href="#">Catégorie Sapeurs-Pompiers</a></li>
            </ul>
          </li>

          <li class="nav__item dropdown">
            <a href="#" class="nav__link">Services</a>
            <button class="arrow-nav">
            <img src="assets/img/down-arrow.png" alt="">
           </button>
            <ul class="dropdown-menu">
              <li><a href="services/Formation.php">Formation en securite insendie</a></li>
              <li><a href="#">Consultation en securite insendie</a></li>
              <li><a href="shop.php">Produits de securite insendie</a></li>
            </ul>
          </li>

          <li class="nav__item">
            <a href="blog.php" class="nav__link">Blog</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">Contact</a>
          </li>
        </ul>

        <div class="header__search">
          <input type="text" placeholder="Search for items..."
           class="form__input"/>

           <button class="search__btn">
            <img src="assets/img/search.png" alt="">
           </button>
           
        </div>
      </div>

      <div class="header__user-actions">
        <a href="cart.php" class="header__action-btn">
          <img src="assets/img/icon-cart.svg" alt="">
          <span class="count">3</span>
        </a>

        <div class="header__action-btn nav__toggle" id="nav-toggle">
          <img src="assets/img/menu-burger.svg" alt="">
          </div>
      </div>
    </nav>
  </header>
    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section--lg containe slider">
        <div class="home__container container grid">
          <div class="home__container" >
            <!-- <span class="home__subtitle">Expert en gestion des risques industriels</span> -->
            <h2 class="home__title">
              BIENVENUE SUR LE SITE DE <span>L'EXPERT</span> EN GESTION DES <span> RISQUES INDUSTRIELS </span>
            </h2>
            <p class="home__description">
              Des solutions professionnelles pour la gestion des risques industriels
            </p>
            <!-- <a href="shop.php" class="btn">Découvrez nos Produits</a> -->
          </div>
          <!-- <img src="assets/images/slider-main/image1.jpg" alt="" class="home__img" /> -->
        </div>
        
      </section>
    
      <!--=============== CATEGORIES ===============-->
      <section class="categories container section ">
        <h3 class="section__title"> <span>All</span> Categories</h3>

        <div class="categories__container swiper">
          <div class="swiper-wrapper">
            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/shos.png" alt="" 
              class="category__img">

            <h3 class="category__title">ince</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/xf2.jpg" alt="" 
              class="category__img">

            <h3 class="category__title">Bags</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/b.jpg" alt="" 
              class="category__img">

            <h3 class="category__title">Véhicule Incendie</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/tete.jpg" alt="" 
              class="category__img">

            <h3 class="category__title">Scarf Cap</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/b.jpg" alt="" 
              class="category__img">

            <h3 class="category__title">Shoes</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/a.jpg" alt="" 
              class="category__img">

            <h3 class="category__title">Pillowcase</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/a.jpg" alt="" 
              class="category__img">

            <h3 class="category__title">Jumpsuit</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="assets/img/a.jpg" alt="" 
              class="category__img">

            <h3 class="category__title">Hats</h3>
            </a>
          </div>

          <div class="swiper-button-next">
            <i class="fi fi-rs-angle-right"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
        </div>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section container">
        <div class="tab__btns">
          <span class="tab__btn active-tab" data-target="#featured" 
          >Featured</span>
          <!-- <span class="tab__btn" data-target="#popular">Popular</span> -->
          <span class="tab__btn" data-target="#new-added">New added</span>
        </div>

        <div class="tab__items">
          <div class="tab__item active-tab" content id="featured">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/a.jpg" alt="" 
                    class="product__img default">

                    <img src="assets/img/a.jpg" alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/download.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/download.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>
 
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/b.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/b.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/tete.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/tete.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/xf2.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/xf2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/tete.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/tete.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/images/parka-removebg-preview.png"
                     alt="" 
                    class="product__img default">

                    <img src="assets/images/parka-removebg-preview.png"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/xf2.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-8-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>


            </div>
          </div>

          <div class="tab__item" content id="popular">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-9-1.jpg" alt="" 
                    class="product__img default">

                    <img src="assets/img/product-9-2.jpg" alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-2-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-2-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/download.png"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-3-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-10-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-10-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-5-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-5-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-11-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-11-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-7-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-7-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/xf2.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-8-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              
            </div>
          </div>

          <div class="tab__item" content id="new-added">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-1-1.jpg" alt="" 
                    class="product__img default">

                    <img src="assets/img/product-1-2.jpg" alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-12-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-12-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/download.png"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-3-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-13-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-13-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-10-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-10-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-6-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-6-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/product-9-1.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-9-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="assets/img/xf2.jpg"
                     alt="" 
                    class="product__img default">

                    <img src="assets/img/product-8-2.jpg"
                     alt="" 
                    class="product__img hover">
                  </a>

                  
                  
                  
                </div>

                <div class="product__content">
                  <span class="product__category">sécurité incendie</span>
                  <a href="details.php">
                    <h3 class="product__title">Véhicule Incendie Mousse</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <!-- <span class="new__price">$238.85</span> -->
                    <!-- <span class="old__price">$245.8</span> -->
                  </div>

                  <a href="#" 
                  class="action__btn cart__btn" 
                  aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              
            </div>
          </div>
        </div>
      </section>

      <!--=============== DEALS ===============-->
      

      <?php include 'components/newsletter.php'; ?>
      

      <!--=============== NEW ARRIVALS ===============-->
      <section class="new__arrivals container section">
        <h3 class="section__title"> <span>New</span> Arrivals</h3>

        <div class="new__container swiper">
          <div class="swiper-wrapper">
            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/img/a.jpg" alt="" 
                  class="product__img default">

                  <img src="assets/img/a.jpg" alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/img/b.jpg"
                   alt="" 
                  class="product__img default">

                  <img src="assets/img/b.jpg"
                   alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/img/tete.jpg"
                   alt="" 
                  class="product__img default">

                  <img src="assets/img/tete.jpg"
                   alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/images/service/detecteur.jpg"
                   alt="" 
                  class="product__img default">

                  <img src="assets/images/service/detecteur.jpg"
                   alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/img/product-10-1.jpg"
                   alt="" 
                  class="product__img default">

                  <img src="assets/img/product-10-2.jpg"
                   alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/img/product-6-1.jpg"
                   alt="" 
                  class="product__img default">

                  <img src="assets/img/product-6-2.jpg"
                   alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/img/product-9-1.jpg"
                   alt="" 
                  class="product__img default">

                  <img src="assets/img/product-9-2.jpg"
                   alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="assets/img/xf2.jpg"
                   alt="" 
                  class="product__img default">

                  <img src="assets/img/product-8-2.jpg"
                   alt="" 
                  class="product__img hover">
                </a>

                
                
                
              </div>

              <div class="product__content">
                <span class="product__category">sécurité incendie</span>
                <a href="details.php">
                  <h3 class="product__title">Véhicule Incendie Mousse</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                  <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>

                <a href="#" 
                class="action__btn cart__btn" 
                aria-label="Add To Cart"
                >
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-button-next">
            <i class="fi fi-rs-angle-right"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
        </div>
      </section>

      <!--=============== SHOWCASE ===============-->
      <section class="showcase section">
        <div class="showcase__container container grid">
          <div class="showcase__wrapper">
            <h3 class="section__title">Détecteur de fumée</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/b.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                    Floral Print Casual Cotton Dress
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/b.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Fireman's Axe
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/b.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Fire Hose Nozzle - Adjustable
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Tuyau d'incendie résistant</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/b.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Fire Sprinkler System
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/a.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                    vintage Floral print Dreas
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/xf2.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Portable Fire Escape Ladder
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Fire Extinguisher</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/tete.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Water Fire Extinguisher
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/shos.png" alt=""
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  CO2 Fire Extinguisher
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/a.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  ABC Fire Extinguisher
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>
          </div>

          <div class="showcase__wrapper">
            <h3 class="section__title">Fire Blanket</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/b.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Fire Blanket - 1x1m
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/b.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Fire Hose Reel - 30m
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img src="assets/img/b.jpg" alt="" 
                class="showcase__img">
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">
                  Smoke Detector - Wireless
                  </h4>
                </a>

                <div class="showcase__price flex">
                  <!-- <span class="new__price">$238.85</span> -->
                  <!-- <span class="old__price">$245.8</span> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <?php include 'components/newsletter2.php'; ?>
    </main>

    <!--=============== FOOTER ===============-->
    <?php include 'components/footer.php'; ?>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>