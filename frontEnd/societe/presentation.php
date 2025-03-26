
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
    <link rel="website icon" type="png" href="../assets/images/favicon/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #E30613;
            --primary-light: rgba(227, 6, 19, 0.1);
            --secondary: #2C3E50;
            --light: #F8F9FA;
            --dark: #212529;
            --gray: #6C757D;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--secondary);
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: var(--light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Hero Section - Matching Historique Page */
        .page-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/slider-main/image2.jpg') center/cover no-repeat;
            height: 400px;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            /* margin-top: 80px; */  /* Space for fixed header */
        }

        .page-hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
            color:white;
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            background: none;
        }

        .breadcrumb li {
            margin: 0 10px;
            position: relative;
        }

        .breadcrumb li a {
            color: white;
            text-decoration: none;
        }

        .breadcrumb li:not(:last-child):after {
            content: '/';
            margin-left: 10px;
            color: white;
        }

        /* Section Styling - Matching Timeline Style */
        .section {
            /* padding: 80px 0; */
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            padding-left: 20px;
            border-left: 5px solid var(--primary);
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        /* About Section - Enhanced Design */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-img {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            height: 400px;
        }

        .about-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .about-img:hover img {
            transform: scale(1.03);
        }

        .about-text {
            padding: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
            position: relative;
            padding-left: 20px;
        }

        .about-text p:before {
            content: '•';
            color: var(--primary);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* President Section - Matching Historique Cards */
        .president-section {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 60px auto;
            max-width: 1000px;
            border-top: 5px solid var(--primary);
        }

        .president-container {
            display: flex;
            gap: 40px;
        }

        .president-photo {
            flex: 0 0 300px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .president-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .president-message h2 {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .president-message p {
            margin-bottom: 20px;
            font-style: italic;
            position: relative;
            padding-left: 20px;
        }

        .president-message p:before {
            content: '"';
            font-size: 3rem;
            color: var(--primary-light);
            position: absolute;
            left: -10px;
            top: -15px;
        }

        .signature {
            font-family: 'Parisienne', cursive;
            font-size: 2rem;
            color: var(--primary);
            text-align: right;
            margin-top: 20px;
        }

        /* Interventions Section - Matching Historique Timeline */
        .interventions-section {
            background-color: var(--white);
            border-radius: 8px;
            padding: 60px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.1);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--light);
            border-radius: 8px;
            padding: 30px;
            border-left: 4px solid var(--primary);
            transition: all 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(227, 6, 19, 0.1);
        }

        .service-icon {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .service-card h3 {
            color: var(--secondary);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .about-content, .president-container {
                grid-template-columns: 1fr;
            }
            
            .president-photo {
                flex: 1;
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            .page-hero {
                height: 300px;
                margin-top: 70px;
            }
            
            .page-hero-content h1 {
                font-size: 2.2rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .interventions-section {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container page-hero-content">
            <h1>AFRI-SECURITE</h1>
            <ul class="breadcrumb">
                <li><a href="../index.php">Accueil</a></li>
                <li>Présentation</li>
            </ul>
        </div>
    </section>

    <!-- About Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>La Société</h2>
                <p>Notre histoire et notre expertise au service de votre sécurité</p>
            </div>
            
            <div class="about-content">
                <div class="about-text">
                    <p>Créée en 2011 à Casablanca par Hassan LARAQUI, expert agréé du CNPP France, AFRI-SECURITE s'est imposée comme un acteur majeur dans le domaine de la sécurité incendie et de la prévention des risques industriels au Maroc.</p>
                    <p>Notre entreprise allie expertise technique française et connaissance approfondie du marché local pour offrir des solutions sur mesure à nos clients.</p>
                    <p>De la formation à l'installation d'équipements, en passant par l'audit et la simulation 3D des risques, nous couvrons l'ensemble de la chaîne de valeur en matière de sécurité industrielle.</p>
                    <p>Notre équipe d'experts certifiés intervient sur l'ensemble du territoire marocain et en Afrique francophone.</p>
                </div>
                <div class="about-img">
                    <img src="../assets/images/asec1.jpg" alt="Équipe Afri-Securite">
                </div>
            </div>
        </div>
    </section>

    <!-- President Section -->
    <section class="container">
        <div class="president-section">
            <div class="president-container">
                <div class="president-photo">
                    <img src="../assets/images/laraquihassan@2x.webp" alt="Hassan LARAQUI - Président">
                </div>
                <div class="president-message">
                    <h2>Le Mot Du Président</h2>
                    <p>Depuis notre création, nous avons fait de l'excellence et de l'innovation notre marque de fabrique. Chaque intervention, chaque formation dispensée, chaque équipement installé répond aux normes les plus exigeantes.</p>
                    <p>Notre ambition est de faire d'AFRI-SECURITE le référent incontournable en matière de sécurité industrielle en Afrique francophone, tout en maintenant notre engagement envers la qualité et la satisfaction client.</p>
                    <div class="signature">Hassan LARAQUI</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interventions Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Nos Interventions</h2>
                <p>Une gamme complète de services pour répondre à tous vos besoins en sécurité industrielle</p>
            </div>
            
            <div class="interventions-section">
                <div class="services-grid">
                    <!-- Service 1 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-fire-extinguisher"></i>
                        </div>
                        <h3>Protection Incendie</h3>
                        <p>Installation et maintenance de systèmes de détection et extinction d'incendie selon les normes internationales.</p>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Formations</h3>
                        <p>Programmes certifiants adaptés à tous les secteurs d'activité.</p>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-gas-pump"></i>
                        </div>
                        <h3>Détection de Gaz</h3>
                        <p>Systèmes intelligents pour environnements à risques.</p>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-helmet-safety"></i>
                        </div>
                        <h3>Équipements EPI</h3>
                        <p>Matériel de protection individuelle haut de gamme.</p>
                    </div>
                    
                    <!-- Service 5 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Audits Sécurité</h3>
                        <p>Diagnostics complets avec rapports détaillés.</p>
                    </div>
                    
                    <!-- Service 6 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-vr-cardboard"></i>
                        </div>
                        <h3>Simulation 3D</h3>
                        <p>Modélisation avancée des risques industriels.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

              <!--=============== NEWSLETTER ===============-->
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

        <p class="footer__description" style= "color: var(--text-color-light);">
          <span>Address:</span> BUSINESS CENTER Central Park Immeuble A 5ème Etage
          Bureau N°37 BD Abdelmoumen MOHAMMEDIA 20650
        </p>

        <p class="footer__description" style= "color: var(--text-color-light);">
          <span>Phone:</span> (+212) 06.61.09.68.81 /
          (+212) 06.61.52.53.99 /
          (+212) 05.21.00.02.59
        </p>

        <div class="footer__social">
          <h4 class="footer__subtitle">Follow Us</h4>

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
              <img src="../assets/images/favicon/icon-pinterest.svg" alt="" class="footer__social-icon"/>
            </a>

            <a href="">
              <img src="../assets/images/favicon/icon-youtube.svg" alt="" class="footer__social-icon"/>
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
    <script src="../assets/js/main.js"></script>
</body>
</html>

</body>
</html>