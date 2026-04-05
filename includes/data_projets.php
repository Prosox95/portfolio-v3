<?php
// Ta base de données de projets (Tableau associatif)
$mes_projets = [
    'immogagnant' => [
        'titre' => 'ImmoGagnant',
        'statut' => 'En développement',
        'date' => 'Été 2026',
        'techs' => ['Laravel', 'Python', 'IA API', 'Tailwind CSS', 'MySQL'],
        'intro' => 'Plateforme SaaS conçue pour les chasseurs immobiliers...',
        'description_longue' => 'Ici, tu vas pouvoir expliquer en détail ton rôle de fondateur, comment tu as intégré l\'IA, l\'architecture de ta base de données, et les défis techniques que tu as surmontés avec le scraping Python.',
        'lien_site' => '#',
        'lien_github' => '#'
    ],
    'cnrs' => [
        'titre' => 'HPC Server Access Tool',
        'statut' => 'Délivré',
        'date' => 'Février 2026',
        'techs' => ['PHP', 'JavaScript', 'Bootstrap'],
        'intro' => 'Outil ergonomique développé pour les chercheurs du CNRS...',
        'description_longue' => 'Développement d\'une interface web générant des scripts Slurm et des fichiers batch à la volée. Cela a permis de diviser par 10 le temps de configuration pour les chercheurs.',
        'lien_site' => '#',
        'lien_github' => '#'
    ]
    // Tu ajouteras tes autres projets (kinepso, eatsmart...) sur ce même modèle !
];
?>