<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Sécurité Incendie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            
            .navbar {
                flex-direction: column;
                padding: 1rem;
            }
            
            .nav-links {
                margin-top: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <?php include 'components/head.php'; ?>
    <?php include 'components/header.php'; ?>
    <!-- progressbar -->
    <div class="progressbar"></div>
    <main>
        <h1 class="page-title">Catégorie : Sécurité Incendie</h1>
        
        <div class="blog-container">
            <article class="blog-card">
                <div class="card-image">
                    <img src="assets/images/catalogues/cat3.png" alt="Prévention des Incendies">
                </div>
                <div class="blog-content">
                    <h3>Prévention des incendies : les meilleures pratiques</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>24 mars 2025</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Découvrez les mesures essentielles pour prévenir les risques d'incendie dans votre entreprise ou domicile.</p>
                    <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="assets/images/catalogues/cat4.png" alt="Extincteurs">
                </div>
                <div class="blog-content">
                    <h3>Guide complet pour choisir et utiliser un extincteur</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>24 mars 2025</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Tout ce que vous devez savoir sur les différents types d'extincteurs et leur utilisation en situation d'urgence.</p>
                    <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="assets/images/catalogues/cat6.png" alt="Évacuation">
                </div>
                <div class="blog-content">
                    <h3>Plan d'évacuation : ce que vous devez savoir</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>24 mars 2025</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Comment créer et mettre en œuvre un plan d'évacuation efficace pour votre bâtiment.</p>
                    <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="assets/images/catalogues/cat10.png" alt="Détecteurs de fumée">
                </div>
                <div class="blog-content">
                    <h3>Les détecteurs de fumée : installation et entretien</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>24 mars 2025</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Guide pratique pour choisir, installer et entretenir vos détecteurs de fumée pour une sécurité optimale.</p>
                    <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="assets/images/catalogues/cat11.png" alt="Exercices incendie">
                </div>
                <div class="blog-content">
                    <h3>L'importance des exercices incendie réguliers</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>24 mars 2025</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Pourquoi et comment organiser des exercices incendie efficaces dans votre entreprise.</p>
                    <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <article class="blog-card">
                <div class="card-image">
                    <img src="assets/images/catalogues/cat14.png" alt="Risques chimiques">
                </div>
                <div class="blog-content">
                    <h3>Gestion des risques d'incendie chimique</h3>
                    <div class="meta">
                        <i class="far fa-calendar-alt"></i>
                        <span>24 mars 2025</span>
                        <!-- <i class="far fa-user"></i> -->
                    </div>
                    <p class="excerpt">Protocoles spécifiques pour prévenir et combattre les incendies impliquant des produits chimiques.</p>
                    <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
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
    </main>

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