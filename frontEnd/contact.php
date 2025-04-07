<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <title>AFRI-SECURITE - Contact</title>
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

        /* Contact Section */
        .contact-section {
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

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .contact-info {
            background-color: var(--light);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .contact-info h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary);
            margin-right: 15px;
            margin-top: 5px;
        }

        .contact-text h4 {
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .contact-text p, .contact-text a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-text a:hover {
            color: var(--primary);
        }

        /* Contact Form */
        .contact-form {
            background-color: var(--light);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #c00511;
        }

        /* Map Section */
        .map-section {
            margin: 40px 0;
        }

        .map-container {
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .map-container {
                height: 300px;
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
            <h1>Contactez-nous</h1>
            <ul class="breadcrumb-historique">
                <li><a href="../index.php">Accueil</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Nous contacter</h2>
                <p>Notre équipe est à votre disposition pour répondre à toutes vos questions</p>
            </div>

            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Informations de contact</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fi fi-rs-marker"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Adresse</h4>
                            <p>BUSINESS CENTER Central Park<br>Immeuble A 5ème Etage Bureau N°37<br>BD Abdelmoumen MOHAMMEDIA 20650</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fi fi-rs-phone-call"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Téléphone</h4>
                            <p>
                                <a href="tel:+2120661096881">(+212) 06.61.09.68.81</a><br>
                                <a href="tel:+2120661525399">(+212) 06.61.52.53.99</a><br>
                                <a href="tel:+2120521000259">(+212) 05.21.00.02.59</a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fi fi-rs-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p><a href="mailto:contact@afri-securite.com">contact@afri-securite.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fi fi-rs-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Heures d'ouverture</h4>
                            <p>Lundi - Vendredi: 8h30 - 18h30<br>Samedi: 9h00 - 13h00</p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form">
                    <h3>Envoyez-nous un message</h3>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="">Sélectionnez un sujet</option>
                                <option value="formation">Demande de formation</option>
                                <option value="equipement">Demande d'équipement</option>
                                <option value="devis">Demande de devis</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Envoyer le message</button>
                    </form>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="map-section">
                <h3 class="section-title">Nous trouver</h3>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.349347072058!2d-7.396999924171093!3d33.60059514280675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d6e7a1a4b0d%3A0x3b5a5a5a5a5a5a5a!2sBusiness%20Center%20Central%20Park!5e0!3m2!1sen!2sma!4v1620000000000!5m2!1sen!2sma" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
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

    <!-- Footer -->
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