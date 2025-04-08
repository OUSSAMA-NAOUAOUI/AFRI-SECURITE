<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation Professionnelle en Sécurité Incendie | Expert Certifié</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #E30613;
            --primary-light: rgba(227, 6, 19, 0.1);
            --secondary: #2C3E50;
            --light: #F8F9FA;
            --dark: #212529;
            --gray: #6C757D;
            --white: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Hero Section */
        /* Hero Section - Matching Historique Page */
        .page-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/images/slider-main/image3.jpg') center/cover no-repeat;
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

        
        @keyframes changeBackground {
            0%, 16% {
                background:
                    linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                    url('https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            }
            20%, 36% {
                background:
                    linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                    url('https://images.unsplash.com/photo-1581093196276-3d6b9f0b6e9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            }
            40%, 56% {
                background:
                    linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                    url('https://images.unsplash.com/photo-1581094271901-8022df4466f9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            }
            60%, 76% {
                background:
                    linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                    url('https://images.unsplash.com/photo-1581093057305-5e0a6d4e5b8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            }
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
            z-index: 2;
        }
        
        .hero-content h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            margin-bottom: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }
        
        
        
        .cta-button:hover {
            background-color: #c10510;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(227, 6, 19, 0.5);
        }
        
        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 5rem auto;
            padding: 0 2rem;
        }
        
        section {
            margin-bottom: 6rem;
            scroll-margin-top: 2rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            color: var(--secondary);
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            padding-bottom: 1rem;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--primary);
            border-radius: 3px;
        }
        
        .section-title p {
            color: var(--gray);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        h3 {
            color: var(--secondary);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        p {
            margin-bottom: 1.5rem;
            color: var(--gray);
            font-size: 1.1rem;
        }
        
        /* Formation Cards */
        .formation-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }
        
        .card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .card-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
        
        .card-content {
            padding: 2rem;
        }
        
        .card h3 {
            color: var(--secondary);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .card h3 i {
            margin-right: 0.8rem;
            color: var(--primary);
        }
        
        .card .duration {
            display: inline-block;
            background-color: var(--primary-light);
            color: var(--primary);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        /* Features Section */
        .features {
            background-color: white;
            border-radius: 12px;
            padding: 4rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-top: 4rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .feature-item {
            display: flex;
            gap: 1.5rem;
        }
        
        .feature-icon {
            background-color: var(--primary-light);
            color: var(--primary);
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        
        .feature-text h4 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: var(--secondary);
        }
        
        /* Stats Section */
        .stats {
            background-color: var(--secondary);
            color: white;
            padding: 5rem 2rem;
            border-radius: 12px;
            text-align: center;
            margin: 6rem 0;
            background-image: 
                linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)),
                url();
            background-size: cover;
            background-position: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .stat-item h3 {
            font-size: 3rem;
            color: white;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        
        .stat-item p {
            color: rgba(255,255,255,0.8);
            font-size: 1.1rem;
        }
        
        /* Testimonials */
        .testimonials {
            margin-top: 6rem;
        }
        
        .testimonial-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .testimonial {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            position: relative;
        }
        
        .testimonial::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 4rem;
            color: var(--primary-light);
            font-family: serif;
            line-height: 1;
        }
        
        .testimonial-content {
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .author-info h5 {
            font-size: 1.1rem;
            color: var(--secondary);
            margin-bottom: 0.2rem;
        }
        
        .author-info p {
            font-size: 0.9rem;
            color: var(--gray);
            margin: 0;
        }
        
        /* Newsletter */
        .newsletter {
            background-color: var(--primary-light);
            padding: 4rem 2rem;
            border-radius: 12px;
            text-align: center;
            margin: 4rem 0;
        }
        
        .newsletter h3 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .newsletter-form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            gap: 1rem;
        }
        
        .newsletter-input {
            flex: 1;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 50px;
            font-size: 1rem;
        }
        
        .newsletter-btn {
            background-color: var(--primary);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .newsletter-btn:hover {
            background-color: #c10510;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .training-hero {
                height: 400px;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .container {
                margin: 3rem auto;
            }
            
            section {
                margin-bottom: 4rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .features {
                padding: 2rem;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-btn {
                width: 100%;
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
                <li>Les Formation</li>
            </ul>
        </div>
    </section>

    <div class="container">
        <section id="about">
            <div class="section-title">
                <h2>Expertise en Prévention Incendie</h2>
                <p>Notre centre de formation agréé propose des programmes complets adaptés aux exigences légales et spécifiques à chaque secteur d'activité.</p>
            </div>
            
            <div class="features">
                <h3>Pourquoi choisir notre expertise ?</h3>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Certifications reconnues</h4>
                            <p>Attestations valables 3 ans conformes au Code du travail et normes NFPA</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-fire-extinguisher"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Matériel professionnel</h4>
                            <p>Plateaux techniques équipés des derniers systèmes d'extinction</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Formateurs spécialisés</h4>
                            <p>Anciens sapeurs-pompiers et experts en sécurité incendie</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="programmes">
            <div class="section-title">
                <h2>Nos Programmes de Formation</h2>
                <p>Des cursus modulables selon vos besoins spécifiques et le niveau de risque de votre établissement.</p>
            </div>
            
            <div class="formation-cards">
                <div class="card">
                    <img class="card-img" src="https://images.unsplash.com/photo-1581093057927-02a5cdba21eb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Formation EPI">
                    <div class="card-content">
                        <h3><i class="fas fa-fire"></i> Équipier Première Intervention</h3>
                        <span class="duration">Durée : 4 à 7 heures</span>
                        <p>Acquisition des réflexes essentiels : alerte, évacuation, utilisation des extincteurs et moyens de première intervention.</p>
                        <ul style="margin-left: 1.5rem; color: var(--gray);">
                            <li>Théorie du feu</li>
                            <li>Manipulation extincteurs</li>
                            <li>Exercices pratiques</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card">
                    <img class="card-img" src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Formation ESI">
                    <div class="card-content">
                        <h3><i class="fas fa-hard-hat"></i> Équipier Seconde Intervention</h3>
                        <span class="duration">Durée : 2 jours</span>
                        <p>Formation avancée pour les équipes sécurité : RIA, compartimentage, techniques d'évacuation complexes.</p>
                        <ul style="margin-left: 1.5rem; color: var(--gray);">
                            <li>Manipulation des RIA</li>
                            <li>Gestion des fumées</li>
                            <li>Scénarios réalistes</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card">
                    <img class="card-img" src="https://images.unsplash.com/photo-1581093057305-5e0a6d4e5b8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Formation Guide">
                    <div class="card-content">
                        <h3><i class="fas fa-people-carry"></i> Guide & Serre-file</h3>
                        <span class="duration">Durée : 1 journée</span>
                        <p>Spécialisation pour les responsables d'évacuation : organisation des flux, points de rassemblement, comptage.</p>
                        <ul style="margin-left: 1.5rem; color: var(--gray);">
                            <li>Rôle du guide/serre-file</li>
                            <li>Plan d'évacuation</li>
                            <li>Cas particuliers (PMR, etc.)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="stats">
            <div class="section-title" style="color: white;">
                <h2>Notre Impact en Chiffres</h2>
                <p>Des résultats concrets qui témoignent de notre expertise</p>
            </div>
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>250+</h3>
                    <p>Entreprises formées</p>
                </div>
                <div class="stat-item">
                    <h3>98%</h3>
                    <p>Satisfaction clients</p>
                </div>
                <div class="stat-item">
                    <h3>15</h3>
                    <p>Années d'expérience</p>
                </div>
                <div class="stat-item">
                    <h3>5000+</h3>
                    <p>Participants formés</p>
                </div>
            </div>
        </div>

        <section id="methodologie">
            <div class="section-title">
                <h2>Notre Méthodologie Unique</h2>
                <p>Une approche pédagogique éprouvée combinant savoir-faire technique et mises en situation réalistes.</p>
            </div>
            
            <div class="features-grid" style="margin-top: 3rem;">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Analyse Préalable</h4>
                        <p>Évaluation des risques spécifiques à votre établissement pour une formation sur mesure.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-vr-cardboard"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Réalité Virtuelle</h4>
                        <p>Simulateurs haute technologie pour des exercices en environnement à risque contrôlé.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Suivi Post-Formation</h4>
                        <p>Évaluation des acquis et recommandations pour maintenir les compétences.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="section-title">
                <h2>Témoignages</h2>
                <p>Ce que disent les professionnels de notre formation.</p>
            </div>
            
            <div class="testimonial-cards">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>La formation la plus complète que nous ayons suivie. Les mises en situation avec fumigènes ont particulièrement marqué nos équipes.</p>
                    </div>
                    <div class="testimonial-author">
                        <img class="author-img" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Directeur HSE">
                        <div class="author-info">
                            <h5>Karim El Amrani</h5>
                            <p>Directeur HSE, Groupe industriel</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>Approche très professionnelle. Nos agents de sécurité ont gagné en confiance et réactivité grâce aux exercices pratiques.</p>
                    </div>
                    <div class="testimonial-author">
                        <img class="author-img" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Responsable sécurité">
                        <div class="author-info">
                            <h5>Leila Benjelloun</h5>
                            <p>Responsable Sécurité, Centre commercial</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>Formation adaptée à notre secteur hospitalier avec des scénarios spécifiques. Très satisfait du sérieux des formateurs.</p>
                    </div>
                    <div class="testimonial-author">
                        <img class="author-img" src="https://randomuser.me/api/portraits/men/75.jpg" alt="Chef de service">
                        <div class="author-info">
                            <h5>Dr. Amine Kabbaj</h5>
                            <p>Chef de service, CHU</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="newsletter">
            <h3><i class="fas fa-envelope"></i> Restez informé</h3>
            <p>Abonnez-vous à notre newsletter pour recevoir nos dernières actualités et offres de formation.</p>
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Votre adresse email">
                <button type="submit" class="newsletter-btn">S'abonner</button>
            </form>
        </section>
    </div>
</body>
</html>