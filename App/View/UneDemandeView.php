<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact demande</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">
            <?php foreach($demandes as $demande) ?>
            <h1>Demande n°<?= $demande->contact_id ?></h1>
            <article>
                <h2>Coordonnées</h2>
                <ul>
                    <li>Nom : <?= $demande->contact_nom ?></li>
                    <li>Prenom : <?= $demande->contact_prenom ?></li>
                    <li>Tel : +33<?= $demande->contact_tel ?></li>
                    <li>Mail : <?= $demande->contact_mail ?></li>
                    <li>Classe : <?= $demande->contact_classe ?></li>
                </ul>
            </article>
            <article>      
            <h2>Message</h2>
            <p>
                <?= $demande->contact_message ?>
            </p>
            </article>
            <a href="?ad=ctct&delete=<?= $demande->contact_id ?>" title="Supprimer">Supprimer</a>
            <a href="?ad=ctct" title="Retour">Retour</a>
        </section>
    </main>
</body>
</html>