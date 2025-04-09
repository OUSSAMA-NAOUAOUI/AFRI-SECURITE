<?php
  // Vérifier si le fichier JSON existe
    $json_file = 'data/products.json';
    if (!file_exists($json_file)) {
        die("Le fichier products.json n'existe pas dans le dossier data");
    }

    // Lire le fichier JSON
    $json_data = file_get_contents($json_file);
    $products = json_decode($json_data, true);

    // Vérifier si le décodage a réussi
    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Erreur dans le format du fichier JSON: " . json_last_error_msg());
    }
?>

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
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link"></span>Shop</li>
        </ul>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section--lg container">
        <p class="total__products">We found <span><?php echo count($products); ?></span> items for you!</p>

        <div class="products__container grid">
          <?php foreach ($products as $product): ?>
          <div class="product__item">
            <div class="product__banner">
              <a href="details.php?id=<?php echo $product['id']; ?>" class="product__images">
                <img src="<?php echo $product['images'][0]; ?>" alt="" 
                class="product__img default">

                <img src="<?php echo $product['images'][0]; ?>" alt="" 
                class="product__img hover">
              </a>
   
            </div>

            <div class="product__content">
              <span class="product__category"><?php echo $product['brand']; ?></span>
              <a href="details.php?id=<?php echo $product['id']; ?>">
                <h3 class="product__title"><?php echo $product['title']; ?></h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price"><?php echo $product['price']; ?><?php echo $product['Currency']; ?></span>
              </div>

              <a href="#" 
              class="action__btn cart__btn" 
              aria-label="Add To Cart"
              >
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <ul class="pagination">
          <li><a href="#" class="pagination__link active">01</a></li>
          <li><a href="#" class="pagination__link">02</a></li>
          <li><a href="#" class="pagination__link">03</a></li>
          <li><a href="#" class="pagination__link">...</a></li>
          <li><a href="#" class="pagination__link">16</a></li>
          <li>
            <a href="#" class="pagination__link icon">
              <i class="fi-rs-angle-double-small-right"></i>
            </a>
          </li>
        </ul>
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
