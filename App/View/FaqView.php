<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include("inc/header.php") ?>

    <main>
        <section>
            <?php 
                foreach ($contenus as $contenu) 
                    echo 
                        '<article class="question">
                            <h2 class="titreQuestion">'.$contenu->qr_question.'</h2>
                            <div class="reponseQuestion">
                                '.$contenu->qr_reponse.'
                            </div>
                        </article>'
            ?> 
        </section>
    </main>
    
    <?php include("inc/footer.php") ?>

    <script src="js/FaqScript.js"></script>
</body>
</html>