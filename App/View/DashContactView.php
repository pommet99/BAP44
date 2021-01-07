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
            <h1>Demandes de contact</h1>
            <table id="table-dashCtct">
                <thead>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Classe</th>
                    <th>Mail</th>
                    <th>Telephone</th>
                    <th colspan="2">Action sur la demande</th>
                </thead>
                <tbody>
                    <?php foreach($demandesCtct as $demandeCtct) :?>
                    <tr>
                        <td><?= $demandeCtct->contact_nom ?></td>
                        <td><?= $demandeCtct->contact_prenom ?></td>
                        <td><?= $demandeCtct->contact_classe ?></td>
                        <td><?= $demandeCtct->contact_mail ?></td>
                        <td>+33<?= $demandeCtct->contact_tel ?></td>
                        <td><a class="see-ctct" title="Voir la demande" href="?ad=demande&nb=<?= $demandeCtct->contact_id ?>">Voir la demande</a></td>
                        <td><a class="delete-ctct" title="Supprimer la demande" href="?ad=ctct&delete=<?= $demandeCtct->contact_id ?>">Supprimer la demande</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>