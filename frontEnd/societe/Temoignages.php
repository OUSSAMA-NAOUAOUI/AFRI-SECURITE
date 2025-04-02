
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
            --primary: #b22222;
            --secondary: #ffcc00;
            --dark: #333;
            --light: #f4f4f4;
            --gray: #e0e0e0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        /* Animation classes */
        .section {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Hero Header */
        .hero-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 6rem 0;
            text-align: center;
            position: relative;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        h1, h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Stats Section with Animations */
        .stats-section {
            background-color: var(--primary);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .stat-item {
            padding: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }
        
        .stat-item.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: var(--secondary);
        }
        
        .stat-label {
            font-size: 1.1rem;
        }
        
        /* Testimonials Section with Infinite Scroll */
        .testimonials {
            padding: 4rem 0;
            position: relative;
        }
        
        .testimonials-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary);
        }
        
        .testimonials-container {
            height: 600px;
            overflow-y: auto;
            position: relative;
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar */
        .testimonials-container::-webkit-scrollbar {
            width: 8px;
        }
        
        .testimonials-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .testimonials-container::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            padding-bottom: 2rem;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            position: relative;
            transition: transform 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease-out;
        }
        
        .testimonial-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px) !important;
        }
        
        .quote-icon {
            color: var(--primary);
            font-size: 2rem;
            opacity: 0.3;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .client-info {
            display: flex;
            align-items: center;
        }
        
        .client-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
            border: 3px solid var(--secondary);
        }
        
        .client-name {
            font-weight: bold;
            color: var(--primary);
        }
        
        .client-position {
            font-size: 0.9rem;
            color: #666;
        }
        
        .rating {
            color: var(--secondary);
            margin-top: 0.3rem;
        }
        
        /* Loading Bar */
        .loading-bar {
            height: 4px;
            background-color: var(--secondary);
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: width 0.3s ease;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
            
            h1, h2 {
                font-size: 2rem;
            }
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
    </style>
</head>
<body>
    <!-- Loading Bar -->
    <div class="loading-bar" id="loadingBar"></div>
    
    <!-- Hero Header -->
    <header class="hero-header section">
        <div class="container">
            <h1  style="color:white">Témoignages de nos clients</h1>
            <!-- <p class="subtitle">Découvrez ce que nos clients marocains disent de nos services de sécurité incendie et de protection civile</p> -->
            <ul class="breadcrumb-historique">
                <li><a href="../index.php">Accueil</a></li>
                <li>Témoignages</li>
            </ul>
        </div>
    </header>
    
    <!-- Stats Section -->
    <section class="stats-section section" id="statsSection">
        <div class="container">
            <h2 style="color:white">Notre impact en chiffres</h2>
            <div class="stats-grid">
                <div class="stat-item" id="stat1">
                    <div class="stat-number" id="counter1">0</div>
                    <div class="stat-label">Entreprises protégées</div>
                </div>
                <div class="stat-item" id="stat2">
                    <div class="stat-number" id="counter2">0</div>
                    <div class="stat-label">Satisfaction clients</div>
                </div>
                <div class="stat-item" id="stat3">
                    <div class="stat-number" id="counter3">0</div>
                    <div class="stat-label">Ans d'expérience</div>
                </div>
                <div class="stat-item" id="stat4">
                    <div class="stat-number" id="counter4">0</div>
                    <div class="stat-label">Personnes formées</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="testimonials section">
        <div class="container">
            <h2 class="testimonials-title" >Ce que disent nos clients</h2>
            <div class="testimonials-container" id="testimonialsContainer">
                <div class="testimonials-grid" id="testimonialsGrid">
                    <!-- Témoignages chargés par JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <script>
        // Données des témoignages (simule une base de données)
        const allTestimonials = [
            {
                id: 1,
                text: "Grâce aux formations de Sécurité Incendie Maroc, notre entreprise a pu éviter un grave incident l'année dernière. Leur expertise est incomparable et leur approche très professionnelle.",
                name: "Mohamed El Filali",
                position: "Directeur d'usine, Casablanca",
                img: "https://randomuser.me/api/portraits/men/32.jpg",
                rating: 5
            },
            {
                id: 2,
                text: "L'audit de sécurité réalisé par leur équipe a identifié des risques que nous n'avions même pas envisagés. Nous dormons beaucoup plus tranquilles depuis leur intervention.",
                name: "Fatima Zahra Bennani",
                position: "Gérante d'hôtel, Marrakech",
                img: "https://randomuser.me/api/portraits/women/44.jpg",
                rating: 4.5
            },
            {
                id: 3,
                text: "Le plan d'évacuation qu'ils ont conçu pour notre école est clair et efficace. Les exercices de simulation ont permis à tout le personnel de savoir exactement quoi faire en cas d'urgence.",
                name: "Karim Benjelloun",
                position: "Directeur d'école, Rabat",
                img: "https://randomuser.me/api/portraits/men/75.jpg",
                rating: 5
            },
            {
                id: 4,
                text: "Service rapide et professionnel. Leur équipe a installé notre système d'alarme incendie en un temps record sans perturber nos activités.",
                name: "Youssef Chraibi",
                position: "Responsable sécurité, Tanger",
                img: "https://randomuser.me/api/portraits/men/68.jpg",
                rating: 4
            },
            {
                id: 5,
                text: "Formation très pratique avec des mises en situation réalistes. Nos employés sont maintenant bien préparés à réagir en cas d'incendie.",
                name: "Leila El Fassi",
                position: "DRH, Agadir",
                img: "https://randomuser.me/api/portraits/women/63.jpg",
                rating: 5
            },
            {
                id: 6,
                text: "Leur réactivité en cas d'urgence est impressionnante. Quand nous avons eu un début d'incendie, leur équipe était sur place en moins de 20 minutes.",
                name: "Hassan Berrada",
                position: "Directeur d'usine, Fès",
                img: "https://randomuser.me/api/portraits/men/22.jpg",
                rating: 5
            },
            {
                id: 7,
                text: "Les exercices pratiques étaient si bien conçus que même nos employés les plus réticents ont fini par participer activement. Excellente pédagogie!",
                name: "Amine Kettani",
                position: "Directeur administratif, Meknès",
                img: "https://randomuser.me/api/portraits/men/45.jpg",
                rating: 5
            },
            {
                id: 8,
                text: "Nous avons comparé plusieurs prestataires et Sécurité Incendie Maroc s'est distingué par son professionnalisme et ses tarifs compétitifs.",
                name: "Nadia Bennis",
                position: "Directrice d'hôpital, Oujda",
                img: "https://randomuser.me/api/portraits/women/28.jpg",
                rating: 4.5
            }
        ];

        // Variables pour le scroll infini
        let visibleTestimonials = 4;
        let isLoading = false;
        const loadingBar = document.getElementById('loadingBar');

        // Fonction pour générer les étoiles de notation
        function generateRatingStars(rating) {
            let stars = '';
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;
            
            for (let i = 0; i < fullStars; i++) {
                stars += '<i class="fas fa-star"></i>';
            }
            
            if (hasHalfStar) {
                stars += '<i class="fas fa-star-half-alt"></i>';
            }
            
            const emptyStars = 5 - Math.ceil(rating);
            for (let i = 0; i < emptyStars; i++) {
                stars += '<i class="far fa-star"></i>';
            }
            
            return stars;
        }

        // Fonction pour afficher les témoignages
        function displayTestimonials() {
            const grid = document.getElementById('testimonialsGrid');
            
            // Affiche seulement le nombre visible de témoignages
            const testimonialsToShow = allTestimonials.slice(0, visibleTestimonials);
            
            grid.innerHTML = '';
            
            testimonialsToShow.forEach((testimonial, index) => {
                const card = document.createElement('div');
                card.className = 'testimonial-card';
                card.innerHTML = `
                    <i class="fas fa-quote-right quote-icon"></i>
                    <p class="testimonial-text">"${testimonial.text}"</p>
                    <div class="client-info">
                        <img src="${testimonial.img}" alt="${testimonial.name}" class="client-img">
                        <div>
                            <div class="client-name">${testimonial.name}</div>
                            <div class="client-position">${testimonial.position}</div>
                            <div class="rating">
                                ${generateRatingStars(testimonial.rating)}
                            </div>
                        </div>
                    </div>
                `;
                grid.appendChild(card);
                
                // Animation delay pour chaque carte
                setTimeout(() => {
                    card.classList.add('visible');
                }, 150 * index);
            });
        }

        // Fonction pour charger plus de témoignages
        function loadMoreTestimonials() {
            if (isLoading || visibleTestimonials >= allTestimonials.length) return;
            
            isLoading = true;
            loadingBar.style.width = '70%';
            
            // Simule un chargement asynchrone
            setTimeout(() => {
                visibleTestimonials += 2;
                displayTestimonials();
                loadingBar.style.width = '100%';
                
                setTimeout(() => {
                    loadingBar.style.width = '0';
                    isLoading = false;
                }, 300);
            }, 1000);
        }

        // Animation des chiffres
        function animateCounters() {
            const stat1 = document.getElementById('stat1');
            const stat2 = document.getElementById('stat2');
            const stat3 = document.getElementById('stat3');
            const stat4 = document.getElementById('stat4');
            
            stat1.classList.add('animated');
            animateValue('counter1', 0, 250, 1500);
            
            setTimeout(() => {
                stat2.classList.add('animated');
                animateValue('counter2', 0, 98, 1500);
            }, 200);
            
            setTimeout(() => {
                stat3.classList.add('animated');
                animateValue('counter3', 0, 15, 1500);
            }, 400);
            
            setTimeout(() => {
                stat4.classList.add('animated');
                animateValue('counter4', 0, 5000, 1500);
            }, 600);
        }
        
        function animateValue(id, start, end, duration) {
            const obj = document.getElementById(id);
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                
                if (id === 'counter2') {
                    obj.innerHTML = value + '%';
                } else if (id === 'counter4' && value > 1000) {
                    obj.innerHTML = value.toLocaleString() + '+';
                } else {
                    obj.innerHTML = value + (id === 'counter4' ? '+' : '');
                }
                
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Intersection Observer pour les animations de section
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    if (entry.target.id === 'statsSection') {
                        animateCounters();
                    }
                }
            });
        }, { threshold: 0.1 });

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            // Observe toutes les sections
            document.querySelectorAll('.section').forEach(section => {
                observer.observe(section);
            });
            
            // Affiche les premiers témoignages
            displayTestimonials();
            
            // Scroll infini
            const container = document.getElementById('testimonialsContainer');
            container.addEventListener('scroll', function() {
                const { scrollTop, scrollHeight, clientHeight } = container;
                
                if (scrollTop + clientHeight >= scrollHeight - 100) {
                    loadMoreTestimonials();
                }
            });
        });
    </script>



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
</body>
</html>