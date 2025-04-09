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
              <li><a href="categories/categories.php?cat=Casque">Catégorie Casque</a></li>
              <li><a href="categories/categories.php?cat=Gants">Catégorie Gants</a></li>
              <li><a href="categories/categories.php?cat=corps">Catégorie corps</a></li>
              <li><a href="categories/categories.php?cat=pieds">Catégorie pieds</a></li>
              <li><a href="categories/categories.php?cat=intervention">Catégorie d'intervention</a></li>
              <li><a href="categories/categories.php?cat=incendie">Catégorie l'incendie</a></li>
              <li><a href="categories/categories.php?cat=Sapeurs-Pompiers">Catégorie Sapeurs-Pompiers</a></li>
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
            <a href="contact.php" class="nav__link">Contact</a>
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
