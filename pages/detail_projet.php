<?php
// 1. On charge la base de données
include 'includes/data_projets.php';

// 2. On récupère l'ID dans l'URL (ex: 'cnrs' ou 'immogagnant')
$id_projet = isset($_GET['id']) ? $_GET['id'] : '';

// 3. Sécurité : Si le projet n'existe pas, on dégage le mec vers la liste des projets
if (!array_key_exists($id_projet, $mes_projets)) {
    echo "<script>window.location.href='/PORTFOLIO-GEMINI/projets';</script>";
    exit;
}

// 4. On isole les données du bon projet
$projet = $mes_projets[$id_projet];
?>

<a href="/PORTFOLIO-GEMINI/projets" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--primary-gold); text-decoration: none; font-weight: 700; margin-bottom: 2rem;">
    <i class="fa-solid fa-arrow-left"></i> Retour aux projets
</a>

<h2 class="section-title"><i class="fa-solid fa-layer-group"></i> <?php echo $projet['titre']; ?></h2>

<div class="project-card" style="margin-bottom: 2rem;">
    <div class="project-header">
        <span class="project-status <?php echo ($projet['statut'] == 'Délivré') ? 'status-delivered' : 'status-progress'; ?>">
            <?php echo $projet['statut']; ?>
        </span>
        <span class="project-date"><i class="fa-regular fa-calendar"></i> <?php echo $projet['date']; ?></span>
    </div>
    
    <div class="project-body">
        <div class="project-techs">
            <?php foreach($projet['techs'] as $tech): ?>
                <span class="p-badge"><?php echo $tech; ?></span>
            <?php endforeach; ?>
        </div>
        
        <h3 style="margin-top: 1rem; margin-bottom: 0.5rem; color: var(--primary-gold);">Contexte</h3>
        <p class="project-desc"><?php echo $projet['intro']; ?></p>

        <h3 style="margin-top: 1rem; margin-bottom: 0.5rem; color: var(--primary-gold);">Détails Techniques</h3>
        <p class="project-desc"><?php echo $projet['description_longue']; ?></p>
        
        <div style="display: flex; gap: 1rem; margin-top: 1rem;">
            <a href="<?php echo $projet['lien_github']; ?>" class="btn-project" target="_blank"><i class="fa-brands fa-github"></i> Code Source</a>
            <a href="<?php echo $projet['lien_site']; ?>" class="btn-project" target="_blank"><i class="fa-solid fa-globe"></i> Visiter le site</a>
        </div>
    </div>
</div>