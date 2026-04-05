<?php
// 1. LA LISTE BLANCHE (Sécurité absolue)
// Seules ces pages ont le droit d'être chargées.
$pages_autorisees = ['home', 'projets', 'competences', 'formation', 'veille', 'contact', 'detail_projet'];

// 2. RÉCUPÉRATION DE LA PAGE DEMANDÉE DANS L'URL
// Si aucune page n'est demandée, on charge 'home' par défaut.
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 3. VÉRIFICATION DE SÉCURITÉ
// Si un petit malin essaie de bidouiller l'URL (ex: ?page=../../../etc/passwd), on le renvoie sur l'accueil.
if (!in_array($page, $pages_autorisees)) {
    $page = 'home';
}

// 4. ASSEMBLAGE DE LA PAGE (Le Vibe Code absolu)
include 'includes/header.php';
include 'pages/' . $page . '.php';
include 'includes/footer.php';
?>