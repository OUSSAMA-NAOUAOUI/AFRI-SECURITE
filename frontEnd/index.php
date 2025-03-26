<!DOCTYPE html>
<html lang="en">

<?php include 'components/head.php'; ?>


  <body>
    <!-- progressbar -->
     <div class="progressbar"></div>
    <!--=============== HEADER ===============-->
    <?php include 'components/header.php'; ?>
    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section--lg containe" style=" background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.6)), url('assets/images/slider-main/image3.jpg') no-repeat center center/cover; ">
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
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
      <!-- <section class="deals section">
        <div class="deals__container container grid">
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Ramadan Kareem</h3>
              <span class="category">Linited quantities.</span>
            </div>


            <h4 class="deals__title">Summer Collection New Morden Design</h4>

      
            <div class="deals__price flex">
              <span class="new__price">$139.00</span>
                <span class="old__price">$160.99</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry Up! offer End In: </p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown">
                  <div class="countdown__amount">
                    <p class="countdown__period">22</p>
                    <span class="unit">Hours</span>
                  </div>
                  <div class="countdown">
                    <div class="countdown__amount">
                      <p class="countdown__period">57</p>
                      <span class="unit">Mins</span>
                    </div>
                    <div class="countdown">
                      <div class="countdown__amount">
                        <p class="countdown__period">24</p>
                        <span class="unit">Sec</span>
                      </div>
              </div>
            </div>
                </div>
              </div>
              
              
          </div>
          
          <div class="deals__btn">
            <a href="details.php" class="btn btn--md">Shop New</a>
          </div>
          </div>

          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Women sécurité incendie</h3>
              <span class="category">Suirt & Bag</span>
            </div>
            <h4 class="deals__title"> Try something new on vacation</h4>

      
            <div class="deals__price flex">
              <span class="new__price">$178.00</span>
                <span class="old__price">$256.99</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry Up! offer End In: </p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown">
                  <div class="countdown__amount">
                    <p class="countdown__period">22</p>
                    <span class="unit">Hours</span>
                  </div>
                  <div class="countdown">
                    <div class="countdown__amount">
                      <p class="countdown__period">57</p>
                      <span class="unit">Mins</span>
                    </div>
                    <div class="countdown">
                      <div class="countdown__amount">
                        <p class="countdown__period">24</p>
                        <span class="unit">Sec</span>
                      </div>
              </div>
            </div>
                </div>
              </div>
              
              
          </div>
          <div class="deals__btn">
            <a href="details.php" class="btn btn--md">Shop New</a>
          </div>
          </div>
        </div>
      </section> -->

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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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
                  <span class="new__price">$238.85</span>
                  <span class="old__price">$245.8</span>
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