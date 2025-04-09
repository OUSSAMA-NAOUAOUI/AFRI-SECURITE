<?php
    // Définir la catégorie cible
    $category = 'categorieGants';

    // Vérifier si le fichier JSON existe
    $json_file = '../data/products.json';
    if (!file_exists($json_file)) {
        die("Le fichier products.json n'existe pas dans le dossier data");
    }

    // Lire le fichier JSON
    $json_data = file_get_contents($json_file);
    $data = json_decode($json_data, true);

    // Vérifier si le décodage a réussi
    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Erreur dans le format du fichier JSON: " . json_last_error_msg());
    }

    // Vérifier si la catégorie existe dans les données
    if (!isset($data['categories'][$category])) {
        die("Catégorie '$category' non trouvée dans le fichier JSON.");
    }

    // Récupérer les produits de la catégorie spécifiée
    $filtered_products = $data['categories'][$category];

    // Ajout d'un log pour debug
    error_log("Nombre de produits trouvés: " . count($filtered_products));
?>


<!DOCTYPE html>
<html lang="en">

  <?php include '../components/head.php'; ?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <title>AFRI-SECURITE</title>
    <link rel="website icon" type="png" href="../../assets/images/favicon/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</head>

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
        <!-- <a href="login-register.php" class="header__top-action">
          Log In / Sign Up
        </a> -->

      </div>
    </div>

    <nav class="nav container">
      <a href="./index.php" class="nav__logo">
        <img src="../assets/img/logo-afri.png" alt="" class="nav__logo-img">
      </a>

      <div class="nav__menu" id="nav-menu">
        <div class="nav__menu-top">
          <a href="index.php" class="nav__menu-logo">
            <img src="../assets/images/favicon/favicon.ico" alt="">
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
            <img src="../assets/img/down-arrow.png" alt="">
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
            <img src="../assets/img/down-arrow.png" alt="">
           </button>
          <ul class="dropdown-menu">
              <li><a href="categories/casque.php">Catégorie Casque</a></li>
              <li><a href="categories/mains.php">Catégorie Mains</a></li>
              <li><a href="categories/corps.php">Catégorie corps</a></li>
              <li><a href="categories/pieds.php">Catégorie pieds</a></li>
              <li><a href="categories/intervention.php">Catégorie d'intervention</a></li>
              <li><a href="categories/incendie.php">Catégorie l'incendie</a></li>
              <li><a href="categories/sapeurs-pompiers.php">Catégorie Sapeurs-Pompiers</a></li>
            </ul>
            </li>

          <li class="nav__item dropdown">
            <a href="#" class="nav__link">Services</a>
            <button class="arrow-nav">
            <img src="../assets/img/down-arrow.png" alt="">
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
            <a href="contact.php" class="nav__link">Contact</a>
          </li>
        </ul>

        <div class="header__search">
          <input type="text" placeholder="Search for items..."
           class="form__input"/>

           <button class="search__btn">
            <img src="../assets/img/search.png" alt="">
           </button>

          </div>
      </div>

      <div class="header__user-actions">
        <a href="cart.php" class="header__action-btn">
          <img src="../assets/img/icon-cart.svg" alt="">
          <span class="count">3</span>
        </a>

        <div class="header__action-btn nav__toggle" id="nav-toggle">
          <img src="../assets/img/menu-burger.svg" alt="">
          </div>
      </div>
    </nav>
</header>


    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="../index.php" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link"></span>Shop</li>
        </ul>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section--lg container">
            <!-- Afficher le nom de la catégorie -->
            <h1>
                <?php 
                echo ucfirst(str_replace("categorie", "", $category)); // Affiche "Casques" ou "Gants"
                ?>
            </h1>

            <p class="total__products">
                <?php echo count($filtered_products); ?> produits disponibles
            </p>

            <div class="products__container grid">
                <?php foreach ($filtered_products as $product): ?>
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
                        <h3 class="product__title"><?php echo $product['title']; ?></h3>
                        <div class="product__price">
                            <span class="new__price"><?php echo $product['price']; ?> <?php echo $product['Currency']; ?></span>
                        </div>
                        <!-- Bouton "Ajouter au panier" -->
                        <button class="action__btn cart__btn">
                            <i class="fi fi-rs-shopping-bag-add"></i>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

      <!--=============== NEWSLETTER ===============-->

      <!--=============== NEWSLETTER-2 ===============-->

<section class="newsletter section home__newsletter">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="../assets/img/icon-email.svg" alt="" class="newsletter__icon"/>
            Sign up 
          </h3>

          <p class="newsletter__description">
          Découvrez nos articles et conseils pour mieux vous protéger
          </p>

          <div action="" class="newsletter__form">
            <a href="#" class="newsletter__btn">contactez nous</a>
          </div>
        </div>
</section>


    </main>

    <!--=============== FOOTER ===============-->


    <footer class="footer container">
    <div class="footer__container grid">
      <div class="footer__content">
        <a href="index.php" class="footer__logo">
          <img src="../assets/images/favicon/favicon.ico" alt="" class="footer__logo-img">
        </a>

        <h4 class="footer__subtitle">Contact</h4>

        <p class="footer__description">
          <span>Address:</span> BUSINESS CENTER Central Park Immeuble A 5ème Etage
          Bureau N°37 BD Abdelmoumen MOHAMMEDIA 20650
        </p>

        <p class="footer__description">
          <span>Phone:</span> (+212) 06.61.09.68.81 /
          (+212) 06.61.52.53.99 /
          (+212) 05.21.00.02.59
        </p>

        <div class="footer__social">
          <h4 class="footer__subtitle">Follow Me</h4>

          <div class="footer__social-links flex">
            <a href="">
              <img src="assets/images/favicon/icon-facebook.svg" alt="" class="footer__social-icon"/>
            </a>

            <a href="">
              <img src="assets/images/favicon/icon-twitter.svg" alt="" class="footer__social-icon"/>
            </a>

            <a href="">
              <img src="assets/images/favicon/icon-instagram.svg" alt="" class="footer__social-icon"/>
            </a>

            <a href="">
              <img src="assets/images/favicon/icon-pinterest.svg" alt="" class="footer__social-icon"/>
            </a>

            <a href="">
              <img src="assets/images/favicon/icon-youtube.svg" alt="" class="footer__social-icon"/>
            </a>
          </div>
        </div>
      </div>

      <div class="footer__content">
        <h3 class="footer__title">Address</h3>

        <ul class="footer__links">
          <li><a href="" class="footer__link">About us</a></li>
          <li><a href="" class="footer__link">Delivery Information</a></li>
          <li><a href="" class="footer__link">Privacy Policy</a></li>
          <li><a href="" class="footer__link">Terms & Conditions</a></li>
          <li><a href="" class="footer__link">Contact Us</a></li>
          <li><a href="" class="footer__link">Support Center</a></li>
        </ul>
      </div>

      <div class="footer__content">
        <h3 class="footer__title">My Account</h3>

        <ul class="footer__links">
          <li><a href="" class="footer__link">Sign In</a></li>
          <li><a href="" class="footer__link">View Cart</a></li>
          <li><a href="" class="footer__link">Help</a></li>
          <li><a href="" class="footer__link">Order</a></li>
        </ul>
      </div>

      <div class="footer__content">
        <h3 class="footer__title">Inscription à la newsletter</h3>

        <!-- <p>
        Soyez les premiers informés de nos offres promotionnelles exclusives !
         Vous pouvez vous désinscrire à tout moment. 
         Consultez nos conditions d'utilisation pour accéder à nos informations de contact.
        </p> <br> -->
        <form action="" class="newsletter__form">
              <input type="text" placeholder="Enter your email" class="newsletter__input"/>
              <button type="submit" class="newsletter__btn-f">Subscribe</button>
            </form>
      </div>

    </div>

    <div class="footer__bottom">
      <p class="copyright">&copy; 2025 <strong>AFRI-SECURITE</strong>. All rights reserved</p>
      <span class="designer">Designed and created by &copy; <strong>NAOUAOUI-OUSSAMA</strong></span>
    </div>
  </footer>
  



    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
