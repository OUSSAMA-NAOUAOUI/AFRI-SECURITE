<?php
    // Lire le fichier JSON
    $json_data = file_get_contents('data/products.json');
    $data = json_decode($json_data, true);
    $products = $data['products'];

    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        $product = null;
        
        // Trouver le produit par ID
        foreach ($products as $p) {
            if ($p['id'] == $product_id) {
                $product = $p;
                break;
            }
        }
        
        if (!$product) {
            header("Location: shop.php");
            exit();
        }
    } else {
        header("Location: shop.php");
        exit();
    }
?>

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
          <li><span class="breadcrumb__link"></span><?= $product['name'] ?></li>
        </ul>
      </section>

      <!--=============== DETAILS ===============-->
      <section class="product-details section--lg container">
        <div class="product-details__container grid">
          <div class="product-details__images">
            <img src="<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>">
          </div>
          
          <div class="product-details__content">
            <h1 class="product-details__title"><?php echo $product['name']; ?></h1>
            <span class="product-details__category"><?php echo $product['category']; ?></span>
            
            <div class="product-details__description">
              <?php echo $product['description']; ?>
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
                 alt="<?= $product['name'] ?>" 
                class="product__img default">

                <img src="assets/img/product-12-2.jpg"
                 alt="<?= $product['name'] ?>" 
                class="product__img hover">
              </a>

            </div>

            <div class="product__content">
              <span class="product__category">sécurité incendie</span>
              <a href="details.php">
                <h3 class="product__title"><?= $product['name'] ?></h3>
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
                 alt="<?= $product['name'] ?>" 
                class="product__img default">

                <img src="assets/img/product-3-2.jpg"
                 alt="<?= $product['name'] ?>" 
                class="product__img hover">
              </a>

              
              
              
            </div>

            <div class="product__content">
              <span class="product__category">sécurité incendie</span>
              <a href="details.php">
                <h3 class="product__title"><?= $product['name'] ?></h3>
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
                 alt="<?= $product['name'] ?>" 
                class="product__img default">

                <img src="assets/img/product-10-2.jpg"
                 alt="<?= $product['name'] ?>" 
                class="product__img hover">
              </a>

              
              
              
            </div>

            <div class="product__content">
              <span class="product__category">sécurité incendie</span>
              <a href="details.php">
                <h3 class="product__title"><?= $product['name'] ?></h3>
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
                 alt="<?= $product['name'] ?>" 
                class="product__img default">

                <img src="assets/img/product-6-2.jpg"
                 alt="<?= $product['name'] ?>" 
                class="product__img hover">
              </a>

              
              
              
            </div>

            <div class="product__content">
              <span class="product__category">sécurité incendie</span>
              <a href="details.php">
                <h3 class="product__title"><?= $product['name'] ?></h3>
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
