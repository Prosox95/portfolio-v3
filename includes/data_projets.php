<?php
$mes_projets = [
    'immogagnant' => [
        'titre' => 'ImmoGagnant (SaaS)',
        'statut' => 'En développement',
        'date' => 'Été 2026',
        'techs' => ['Laravel', 'Python', 'IA API', 'Tailwind CSS', 'MySQL'],
        'intro' => 'Plateforme SaaS de détection d\'immeubles de rapport à haut rendement pour investisseurs.',
        'description_longue' => 'C\'est mon projet le plus ambitieux. ImmoGagnant n\'est pas qu\'un site, c\'est une machine à cashflow. J\'ai développé des scripts de scraping en Python qui tournent 24h/24 pour extraire les annonces immobilières en temps réel. Ces données sont ensuite analysées par une IA pour calculer instantanément la rentabilité nette et le cashflow potentiel. Le back-end en Laravel gère les abonnements des utilisateurs (chasseurs immobiliers), et l\'interface en Tailwind CSS offre un dashboard d\'analyse ultra-rapide. Un vrai produit orienté Business et Data.',
        'images' => [],
        'lien_site' => '',
        'lien_github' => ''
    ],
    'liferpg' => [
        'titre' => 'Appli : Life RPG (Habit Tracker)',
        'statut' => 'En développement',
        'date' => 'Courant 2026',
        'techs' => ['Flutter', 'Dart', 'Supabase', 'Gamification'],
        'intro' => 'Application mobile de productivité gamifiée : transformez vos habitudes en quêtes de RPG.',
        'description_longue' => 'Life RPG est l\'application qui fusionne développement personnel et mécaniques de jeu vidéo. L\'objectif est de hacker la motivation humaine grâce au système de récompense. Les utilisateurs accomplissent des tâches réelles pour gagner de l\'XP, monter de niveau, débloquer des items virtuels et grimper dans un classement social. Techniquement, le front-end cross-platform (iOS/Android) est développé en Flutter/Dart pour garantir des animations fluides. L\'infrastructure back-end repose sur Supabase (PostgreSQL, Authentification, Realtime) pour gérer la base de données et les interactions sociales instantanées de la communauté.',
        'images' => [
            '/assets/img/life-rpg-1.webp',
        ],
        'lien_site' => '',
        'lien_github' => ''
    ],
    'cnrs' => [
        'titre' => 'Interface Web pour Serveurs HPC (Stage CNRS)',
        'statut' => 'Délivré',
        'date' => 'Février 2026',
        'techs' => ['PHP', 'Bash', 'Slurm', 'Conda', 'JavaScript', 'Bootstrap'],
        'intro' => 'Couche d\'abstraction logicielle démocratisant l\'accès à un cluster de 18 GPU NVIDIA pour la recherche scientifique.',
        'description_longue' => 'Lors de mon stage au Laboratoire de Chimie Bactérienne (LCB), j\'ai piloté une transition numérique majeure. L\'accès au serveur de calcul haute performance (équipé de 18 GPU NVIDIA A40) se faisait exclusivement via terminal SSH, constituant une barrière technique chronophage pour les biologistes. J\'ai conçu et développé une interface d\'abstraction logicielle qui traduit les besoins des chercheurs en fichiers de configuration interprétables par le serveur (Slurm, YAML, Bash). Le back-end PHP orchestre la création dynamique d\'environnements isolés sous Conda et automatise l\'exécution des pipelines de segmentation d\'images. Cet outil a radicalement optimisé le workflow du laboratoire, garantissant une autonomie totale aux équipes de recherche.',
        'images' => [
            '/assets/img/cnrs-1.webp',
            '/assets/img/cnrs-2.webp',
            '/assets/img/cnrs-3.webp'
        ],
        'lien_site' => '',
        'lien_github' => '',
        'lien_rapport' => '/assets/pdf/rapport_cnrs.pdf'
    ],
    'kinepso' => [
        'titre' => 'Kinepso : SaaS Collaboratif (Stage)',
        'statut' => 'Lancement imminent',
        'date' => 'Juin 2025',
        'techs' => ['PHP (MVC)', 'SpeedCSS', 'MySQL', 'Stripe', 'Docker', 'Git'],
        'intro' => 'Développement Fullstack d\'un logiciel SaaS de gestion de projets collaboratif inspiré de Trello.',
        'description_longue' => 'Lors de mon stage en full-remote au sein de la start-up Kinepso, j\'ai participé au développement complet d\'un SaaS collaboratif. Sur le front-end, j\'ai intégré une quinzaine de pages responsive depuis des maquettes Figma en utilisant SpeedCSS (librairie interne), avec un fort focus sur l\'UI/UX. Côté back-end, j\'ai travaillé avec Sloredia, un framework PHP MVC propriétaire. J\'ai implémenté des fonctionnalités critiques : CRUD utilisateurs, gestion des équipes, système de double authentification, et intégration complexe de l\'API Stripe pour la gestion des abonnements mensuels. Enfin, j\'ai consolidé l\'application via des audits de cybersécurité (prévention des injections SQL, failles XSS et tokens de session). Ce projet m\'a directement confronté aux exigences de production en équipe, nécessitant l\'usage rigoureux de Git et Docker.',
        'images' => [], // Volontairement vide pour cause d'accord de confidentialité (NDA).
        'lien_site' => 'https://kinepso.com/',
        'lien_github' => '',
        'lien_rapport' => '/assets/pdf/rapport_kinepso.pdf'
    ],
    'eatsmart' => [
        'titre' => 'EatSmart : Plateforme E-commerce & API',
        'statut' => 'En développement',
        'date' => 'Mai 2026',
        'techs' => ['PHP', 'API REST', 'MySQL', 'JavaScript', 'HTML/CSS'],
        'intro' => 'Application web de commande de repas reposant sur une architecture logicielle découplée (Frontend / Backend).',
        'description_longue' => 'EatSmart n\'est pas qu\'une simple interface, c\'est un véritable exercice d\'architecture logicielle. J\'ai modélisé l\'intégralité du système de données (MCD, MLD, MPD) avant de concevoir la logique métier. Le cœur du projet réside dans son architecture séparée : le back-end PHP agit comme un serveur autonome fournissant une API REST robuste. Cette API gère plus d\'une quinzaine d\'endpoints (méthodes GET, POST, PUT, DELETE) pour traiter le CRUD des articles, des catégories et des commandes. Le front-end vient ensuite consommer ces routes via JavaScript pour afficher le menu interactif, gérer le panier client et transmettre les commandes au tableau de bord des administrateurs en cuisine. Une preuve concrète de ma maîtrise des flux de données client-serveur.',
        'images' => [],
        'lien_site' => '',
        'lien_github' => 'https://github.com/Prosox95/eatsmart-pierre'
    ],
    'paysagiste' => [
        'titre' => 'Site Vitrine Paysagiste',
        'statut' => 'Livraison : Avril 2026',
        'date' => 'Avril 2026',
        'techs' => ['PHP', 'Tailwind CSS', 'SEO Local'],
        'intro' => 'Plateforme de conversion et d\'acquisition client pour un artisan marseillais.',
        'description_longue' => 'Un projet freelance de A à Z. L\'objectif n\'était pas juste de faire "un beau site", mais de générer du chiffre d\'affaires pour le client. J\'ai misé sur un design épuré en Tailwind CSS, un temps de chargement éclair, et surtout une architecture SEO Local agressive pour cibler les recherches sur Marseille. Le back-end PHP gère un formulaire de devis sécurisé relié directement au CRM de l\'artisan.',
        'images' => [
            '/assets/img/angelo-paysagiste-1.webp',
        ],
        'lien_site' => 'https://www.angelopaysagiste.fr/',
        'lien_github' => ''
    ],
    'mobilealpha' => [
        'titre' => 'Marketplace Mobile (Flutter)',
        'statut' => 'En développement',
        'date' => 'Mai 2026',
        'techs' => ['Flutter', 'Dart', 'Supabase/Firebase', 'GoRouter'],
        'intro' => 'Application hybride C2C (Consumer-to-Consumer) pour l\'achat et la vente d\'articles entre particuliers.',
        'description_longue' => 'Ce projet est un cas concret de développement e-commerce mobile. Le cœur de l\'application repose sur la consommation d\'API REST (via le package http ou Dio) pour générer dynamiquement les vues produits. J\'ai architecturé plusieurs fonctionnalités complexes : gestion d\'un panier avec simulation de validation de commande, sauvegarde persistante des favoris en local, et un système d\'authentification (login/signup) rendu obligatoire pour finaliser les achats. Côté back-end, le projet a évolué pour intégrer une véritable base de données (Supabase ou Firebase) modélisée en amont (MCD) afin de stocker les données utilisateurs, le panier et les images. La navigation est gérée proprement via BottomNavigationBar et des routes nommées (GoRouter). Enfin, le code est rigoureusement versionné sous Git et sécurisé par des tests.',
        'images' => [],
        'lien_site' => '',
        'lien_github' => 'https://github.com/Prosox95/projet-flutter'
    ],
];
?>