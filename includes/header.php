<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre Burnier - Développeur Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/PORTFOLIO-GEMINI/css/style.css">
</head>
<body>

<div class="layout-container">
    <aside class="sidebar">
        <div class="avatar-wrapper">
            <img src="/PORTFOLIO-GEMINI/assets/img/pierre-avatar-removebg.png" alt="Pierre Burnier" class="avatar">
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
                <span class="contact-text">+33 7 81 58 82 55</span>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                <span class="contact-text">pierreburnier07@gmail.com</span>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                <span class="contact-text">Marseille, France</span>
            </div>
            <div class="contact-item no-border">
                <div class="contact-icon"><i class="fa-solid fa-calendar-days"></i></div>
                <span class="contact-text">7 Mars 2005</span>
            </div>
        </div>

        <a href="/PORTFOLIO-GEMINI/assets/pdf/cv-pierre-burnier.pdf" class="btn-download" download>Télécharger mon CV</a>
    </aside>

    <main class="content-rectangle">
        <?php 
        // On utilise la variable $page directement nettoyée par le routeur (index.php)
        // Fallback sur 'home' si jamais elle n'est pas définie
        $current_page = isset($page) ? $page : 'home'; 
        ?>
        <nav class="tabs-navigation">
            <a href="/PORTFOLIO-GEMINI/home" class="<?= $current_page == 'home' ? 'active' : '' ?>">Accueil</a>
            <a href="/PORTFOLIO-GEMINI/projets" class="<?= ($current_page == 'projets' || $current_page == 'detail_projet') ? 'active' : '' ?>">Projets</a>
            <a href="/PORTFOLIO-GEMINI/competences" class="<?= $current_page == 'competences' ? 'active' : '' ?>">Compétences</a>
            <a href="/PORTFOLIO-GEMINI/formation" class="<?= $current_page == 'formation' ? 'active' : '' ?>">Formations</a>
            <a href="/PORTFOLIO-GEMINI/veille" class="<?= $current_page == 'veille' ? 'active' : '' ?>">Veille</a>
            <a href="/PORTFOLIO-GEMINI/contact" class="<?= $current_page == 'contact' ? 'active' : '' ?>">Contact</a>
        </nav>
        <div class="page-content">