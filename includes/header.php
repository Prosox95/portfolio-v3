<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre Burnier | Développeur Full-Stack, Étudiant & Passionné d'IA</title>
    <meta name="description" content="Portfolio de Pierre Burnier, étudiant en BTS SIO (SLAM) développeur Full-Stack (PHP, Laravel, Python, Flutter) et passionné par l'Intelligence Artificielle.">
    <meta name="author" content="Pierre Burnier">
    
    <link rel="icon" type="image/png" href="/assets/img/pierre-avatar-removebg.webp">

    <meta property="og:title" content="Pierre Burnier | Portfolio & Projets SaaS">
    <meta property="og:description" content="Découvrez mes projets SaaS, mon expertise en architecture logicielle (MVC, API REST) et ma vision du développement web.">
    <meta property="og:image" content="https://pierreburnier.dev/assets/img/og-preview.png">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<div class="layout-container">
    <aside class="sidebar">
        <div class="avatar-wrapper">
            <img src="/assets/img/pierre-avatar-removebg.webp" alt="Pierre Burnier" class="avatar">
        </div>
        
        <h1 class="sidebar-name">Pierre Burnier</h1>
        
        <div class="sidebar-title">
            <span>Étudiant BTS SIO - Option SLAM</span>
        </div>

        <div class="social-icons">
            <a href="https://www.linkedin.com/in/pierre-burnier-986002339/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://github.com/Prosox95" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://discord.com/users/721003897967345764" target="_blank"><i class="fa-brands fa-discord"></i></a>
        </div>

        <div class="contact-box">
            <div class="contact-item">
                <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                <a href="tel:+33781588255" class="contact-text" style="text-decoration: none; color: inherit;">+33 7 81 58 82 55</a>
            </div>

            <div class="contact-item">
                <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                <a href="mailto:pierreburnier07@gmail.com" class="contact-text" style="text-decoration: none; color: inherit;">pierreburnier07@gmail.com</a>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                <span class="contact-text">Marseille, France</span>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fa-solid fa-car"></i></div>
                <span class="contact-text">Permis B & Véhiculé</span>
            </div>
            <div class="contact-item no-border">
                <div class="contact-icon"><i class="fa-solid fa-calendar-days"></i></div>
                <span class="contact-text">7 Mars 2005</span>
            </div>
            <!-- <div class="languages-badges">
                <div class="lang-tag">
                    <span class="fi fi-fr lang-flag"></span>
                    <span>FR (Natif)</span>
                </div>
                <div class="lang-tag">
                    <span class="fi fi-gb lang-flag"></span>
                    <span>EN (Technique)</span>
                </div>
            </div> -->
        </div>

        <a href="/assets/pdf/cv-pierre-burnier.pdf" class="btn-download" download>Télécharger mon CV</a>
    </aside>

    <main class="content-rectangle">
        <?php 
        // On utilise la variable $page directement nettoyée par le routeur (index.php)
        // Fallback sur 'home' si jamais elle n'est pas définie
        $current_page = isset($page) ? $page : 'home'; 
        ?>
        <nav class="tabs-navigation">
            <a href="/home" class="<?= $current_page == 'home' ? 'active' : '' ?>">Accueil</a>
            <a href="/projets" class="<?= ($current_page == 'projets' || $current_page == 'detail_projet') ? 'active' : '' ?>">Projets</a>
            <a href="/competences" class="<?= $current_page == 'competences' ? 'active' : '' ?>">Compétences</a>
            <a href="/formation" class="<?= $current_page == 'formation' ? 'active' : '' ?>">Formations</a>
            <a href="/veille" class="<?= $current_page == 'veille' ? 'active' : '' ?>">Veille</a>
            <a href="/contact" class="<?= $current_page == 'contact' ? 'active' : '' ?>">Contact</a>
        </nav>
        <div class="page-content">