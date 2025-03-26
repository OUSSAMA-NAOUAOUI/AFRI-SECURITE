<!DOCTYPE html>
<html lang="en">

  <?php include 'components/head.php'; ?>

  <body>
    <!--=============== HEADER ===============-->
    <?php include 'components/header.php' ?>

<!-- progressbar -->
<div class="progressbar"></div>
    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link"></span>incendie</li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link"></span>Véhicule Incendie Mousse</li>
        </ul>
      </section>

      <!--=============== DETAILS ===============-->
      <section class="details section--lg">
        <div class="details__container container grid">
          <div class="details__group">
            <img src="assets/images/h-380.jpg" alt="" class="details__img"/>

            <div class="details__small-images grid">
              <img src="assets/images/h-380.jpg" alt="" class="details__small-img">
              <img src="assets/images/fire-monitor.png" alt="" class="details__small-img">
              <img src="assets/images/rosenbauer_monitor_RB6-.jpg" alt="" class="details__small-img">
            </div>
          </div>

          <div class="details__group">
            <h3 class="details__title">Véhicule Incendie Mousse</h3>
            <p class="details__brand">Brands: <span>AFRI-SECURITE</span></p>

            <div class="details__price flex">
              <span class="new__price">$116</span>
              <!-- <span class="old__price">$200</span>
              <span class="save__price">$25% off</span> -->
            </div>

            <p class="short__description">
             Fire Monitor – La solution idéale pour une protection incendie efficace ! <br>
             Conçu pour projeter de l'eau ou de la mousse à haute pression, il assure une extinction rapide et ciblée,
             <br> idéal pour les sites industriels, les raffineries et les entrepôts.

            </p>
            <ul class="product__list">

              <li class="list__item flex">
                <i class="fi-rs-refresh"></i> 3 Day Return Policy
              </li>

              <li class="list__item flex">
                <i class="fi-rs-credit-card"></i> Cash On Delivery Available
              </li>
            </ul>

            <div class="details__action">
              <input type="number" class="quantity" value="3"/>

              <a href="#" class="btn btn--sm">Add to Cart</a>

              <a href="#" class="details__action-btn">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>

            <ul class="details__meta">
              <li class="meta__list flex">
              <span>SKU:</span> FIRE-MONITOR-001  
              </li>
              <li class="meta__list flex">
                <span>Tags:</span> Fire Safety, Water Cannon, Firefighting  
              </li>
              <li class="meta__list flex">
                <span>Availabilty:</span> Disponible
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!--=============== DETAILS TAB ===============-->
      <section class="details__tab container">
        <div class="detail__tabs">
          <span class="detail__tab active-tab" data-target="#info">
            Additional Info
          </span>
          <span class="detail__tab" data-target="#reviews">Reviews(3)</span>
        </div>

        <div class="details__tabs-content">
          <div class="details__tab-content active-tab" content id="info">
          <table class="info__table">
            <tr>
              <th>Type</th>
              <td>Manuel / Automatique</td>
            </tr>

            <tr>
              <th>Débit</th>
              <td>1000 - 4000 L/min</td>
            </tr>

            <tr>
              <th>Portée</th>
              <td>50 - 70 mètres</td>
            </tr>

            <tr>
              <th>Matériau</th>
              <td>Aluminium / Acier inoxydable</td>
            </tr>

            <tr>
              <th>Poids</th>
              <td>15 - 30 kg</td>
            </tr>

            <tr>
              <th>Pression de Service</th>
              <td>7 - 10 bars</td>
            </tr>

            <tr>
              <th>Couleur</th>
              <td>Rouge</td>
            </tr>

            <tr>
              <th>Dimensions</th>
              <td>Variable selon le modèle</td>
            </tr>
          </table>
          </div>

          <div class="details__tab-content" content id="reviews">
            <div class="reviews__container grid">
              <div class="review__single">
                <div>
                  <img src="assets/img/avatar-1.jpg" alt="" class="review__img">
                  <h4 class="review__title">Rachid</h4>
                </div>

                <div class="review__data">
                  <div class="review__rating">
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>

                  <p class="review__description">
                  Thank you, AFRI-SECURITE, for the great prices and excellent work.
                  </p>

                  <span class="review__date">Mars 13, 2025 at 11:42 AM</span>
                </div>
              </div>

              <div class="review__single">
                <div>
                  <img src="assets/img/avatar-2.jpg" alt="" class="review__img">
                  <h4 class="review__title">Laila</h4>
                </div>

                <div class="review__data">
                  <div class="review__rating">
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>

                  <p class="review__description">
                  Thank you, AFRI-SECURITE, for the great prices and excellent work.
                  </p>

                  <span class="review__date">Mars 13, 2025 at 11:43 AM</span>
                </div>
              </div>

              <div class="review__single">
                <div>
                  <img src="assets/img/avatar-3.jpg" alt="" class="review__img">
                  <h4 class="review__title">Oussama</h4>
                </div>

                <div class="review__data">
                  <div class="review__rating">
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>

                  <p class="review__description">
                  AFRI-SECURITE is always the right choice.
                  </p>

                  <span class="review__date">Mars 13, 2025 at 11:44 AM</span>
                </div>
              </div>
            </div>

            <div class="review__form">
              <h4 class="review__form-title">Add a review</h4>

              <div class="rate__product">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
             </div>

             <form action="" class="form grid">
              <textarea class="form__input textarea" placeholder="Write Comment"></textarea>
              
              <div class="form__group grid">
                <input type="text" placeholder="Name" class="form__input" />

                <input type="email" placeholder="Email" class="form__input" />

              </div>

              <div class="form__btn">
                <button class="btn">Submit Review</button>
              </div>
             </form>
            </div>
          </div>
        </div>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products container section--lg">
        <h3 class="section__title"><span>Related</span> Products</h3>

        <div class="products__container grid">
          

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
                <img src="assets/img/product-3-1.jpg"
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
