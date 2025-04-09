
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
    
<style>
        :root {
            --primary: #E30613;
            --secondary: #333;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --white: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--secondary);
            line-height: 1.6;
            background-color: var(--white);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Hero Section */
        .page-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/slider-main/image1.jpg') center/cover no-repeat;
            height: 300px;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
        }

        .page-hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #fff;
        }

        .breadcrumb-historique {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }

        .breadcrumb-historique li {
            margin: 0 10px;
            position: relative;
        }

        .breadcrumb-historique li a {
            color: var(--white);
            text-decoration: none;
        }

        .breadcrumb-historique li:not(:last-child):after {
            content: '/';
            margin-left: 10px;
            color: var(--white);
        }

        /* History Content */
        .history-section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            width: 2px;
            background-color: var(--primary);
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            background-color: var(--light);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            position: relative;
        }

        .timeline-content h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .timeline-item:nth-child(odd) .timeline-content::after {
            content: '';
            position: absolute;
            right: -10px;
            top: 20px;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 10px solid var(--light);
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            content: '';
            position: absolute;
            left: -10px;
            top: 20px;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid var(--light);
        }

        .timeline-year {
            position: absolute;
            width: 100px;
            height: 40px;
            background-color: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            font-weight: bold;
        }

        .timeline-item:nth-child(odd) .timeline-year {
            right: -120px;
            top: 20px;
        }

        .timeline-item:nth-child(even) .timeline-year {
            left: -120px;
            top: 20px;
        }

        /* Partners Section */
        .partners-section {
            padding: 40px 0;
            background-color: #ff00003d;
            margin: 40px 0;
        }

        .partners-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 20px 0;
        }

        .partners-track {
            display: flex;
            animation: scroll 20s linear infinite;
            width: calc(200px * 10);
        }

        .partner-logo {
            flex: 0 0 180px;
            height: 100px;
            margin: 0 20px;
            background: var(--white);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            padding: 15px;
        }

        .partner-logo img {
            max-width: 100%;
            max-height: 100%;
            /* object-fit: contain; */
            /* filter: grayscale(100%); */
            /* opacity: 0.7; */
            transition: all 0.3s ease;
        }

        .partner-logo:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-200px * 5)); }
        }

        /* Gallery */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .gallery-item {
            height: 200px;
            background-color: var(--light-gray);
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 10px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .timeline::before {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 91px;
                padding-right: 5px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-item:nth-child(odd) .timeline-year,
            .timeline-item:nth-child(even) .timeline-year {
                left: -11px;
                right: auto;
                top: 31px;
            }
            
            .timeline-item:nth-child(odd) .timeline-content::after,
            .timeline-item:nth-child(even) .timeline-content::after {
                left: -10px;
                right: auto;
                border-right: 10px solid var(--light);
                border-left: none;
            }
            
            .partner-logo {
                flex: 0 0 150px;
                height: 80px;
                margin: 0 15px;
            }
        }
    </style>

    <style>
        :root {
            --primary-color: #b22222;
            --secondary-color: #ffcc00;
            --dark-color: #333;
            --light-color: #f4f4f4;
            --card-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        .btn {
            background-color: white;
            color: var(--primary-color);
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .page-title {
            text-align: center;
            margin: 2rem 0;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 1rem;
        }
        
        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .blog-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            padding: 1rem 0;
        }
        
        .blog-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease ;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .card-image {
            height: 180px;
            overflow: hidden;
            position: relative;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }
        
        .blog-card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .blog-content {
            padding: 1.5rem;
        }
        
        .blog-content h3 {
            font-size: 1.2rem;
            margin: 0 0 0.8rem;
            color: var(--primary-color);
            min-height: 3rem;
        }
        
        .meta {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .meta i {
            color: var(--secondary-color);
        }
        
        .excerpt {
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            color: #555;
        }
        
        .read-more {
            display: inline-block;
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 600;
            transition: all 0.3s ease;
            border-bottom: 2px solid transparent;
        }
        
        .read-more:hover {
            color: var(--secondary-color);
            border-bottom-color: var(--secondary-color);
        }
        
        .read-more i {
            margin-left: 0.3rem;
            transition: all 0.3s ease;
        }
        
        .read-more:hover i {
            transform: translateX(3px);
        }
        

        
        @media (max-width: 768px) {
            .blog-container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            
        }
    </style>

  </head>
<body>
    <!-- progressbar -->
    <div class="progressbar"></div>
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container page-hero-content">
            <h1>Notre Histoire</h1>
            <ul class="breadcrumb-historique">
                <li><a href="../index.php">Accueil</a></li>
                <li>Historique</li>
            </ul>
        </div>
    </section>

    <!-- History Section -->
    <section class="history-section">
        <div class="container">
            <div class="section-title">
                <h2>L'Évolution d'Afri-Securite</h2>
                <p>Découvrez notre parcours depuis notre création jusqu'à aujourd'hui</p>
            </div>

            <div class="timeline">
                <!-- Timeline Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-year">2011</div>
                    <div class="timeline-content">
                        <h3>Fondation</h3>
                        <p>Création à Casablanca par Hassan LARAQUI, expert agréé du CNPP France et diplômé de l'Institut Supérieur de Sécurité & Incendie de l'Entreprise (France).</p>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-year">2012</div>
                    <div class="timeline-content">
                        <h3>Premières Formations</h3>
                        <p>Lancement des premières formations en sécurité incendie pour les entreprises marocaines.</p>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-year">2015</div>
                    <div class="timeline-content">
                        <h3>Expansion des Services</h3>
                        <p>Diversification de nos activités avec la vente d'équipements de protection individuelle et de systèmes de détection de gaz.</p>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-year">2018</div>
                    <div class="timeline-content">
                        <h3>Innovation Technologique</h3>
                        <p>Introduction de la simulation 3D des risques industriels et des systèmes d'extinction automatiques.</p>
                    </div>
                </div>

                <!-- Timeline Item 5 -->
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h3>Partenariats Stratégiques</h3>
                        <p>Collaboration renforcée avec le CNPP France et élargissement de notre gamme DCI (Défense Contre l'Incendie).</p>
                    </div>
                </div>

                <!-- Timeline Item 6 -->
                <div class="timeline-item">
                    <div class="timeline-year">2023</div>
                    <div class="timeline-content">
                        <h3>Leader du Secteur</h3>
                        <p>Afri-Securite s'impose comme référence au Maroc en sécurité industrielle avec plus de 500 professionnels formés annuellement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="section-title">
                <h2>Nos Partenaires</h2>
                <!-- <p>Nous collaborons avec les plus grandes institutions et entreprises</p> -->
            </div>
            
            <div class="partners-container">
                <div class="partners-track">
                    <!-- Partner logos - duplicate for infinite effect -->
                    <div class="partner-logo"><img src="../assets/images/partenaires/defibtech.png" alt="defibtech"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/desautel.png" alt="desautel"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/ledlenser.png" alt="ledlenser"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/martinas.png" alt="martinas"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/msa.png" alt="msa"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/profoam.png" alt="profoam"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/waterjel.png" alt="waterjel"></div>
                    <!-- Duplicate the same set -->
                    <div class="partner-logo"><img src="../assets/images/partenaires/defibtech.png" alt="defibtech"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/desautel.png" alt="desautel"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/ledlenser.png" alt="ledlenser"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/martinas.png" alt="martinas"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/msa.png" alt="msa"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/profoam.png" alt="profoam"></div>
                    <div class="partner-logo"><img src="../assets/images/partenaires/waterjel.png" alt="waterjel"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="history-section">
        <div class="container">
            <div class="section-title">
                <h2>Actualités</h2>
                <p>Quelques moments marquants de notre histoire</p>
            </div>
            
            <div class="blog-container">
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="../assets/images/catalogues/cat10.png" alt="Détecteurs de fumée">
                </div>
                <div class="blog-content">
                    <h3>LA BRUMATISATION ANTI-INCENDIE D'AFRI-SÉCURITÉ & DESAUTEL</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>2017</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Afri-securite et Desautel présentent leur nouveau système d'extinction par brumatisation au salon Preventica Maroc.

</p>
                    <!-- <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </article>
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="../assets/images/asec.jpg" alt="Exercices incendie">
                </div>
                <div class="blog-content">
                    <h3>NOUVEAUTÉ : SYSTÈME ANTI-FEU PAR BRUMATISATION À PREVENTICA</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>2019</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Afri-securite et Desautel présentent leur nouveau système d'extinction par brumatisation au salon Preventica Maroc..

</p>
                    <!-- <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </article>
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="../assets/images/asec1.jpg" alt="Risques chimiques">
                </div>
                <div class="blog-content">
                    <h3>Formation type GF 42</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>2019</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Afri-Sécurité propose des simulateurs d’incendie GF 42 pour une formation réaliste et sécurisée, renforçant les compétences en lutte contre l’incendie.

</p>
                    <!-- <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a> -->
                </div>
            </article>
        </div>
        </div>
    </section>

    
          <!--=============== NEWSLETTER ===============-->
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