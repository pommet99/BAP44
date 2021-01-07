<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Question</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>

    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">
            <h1>Ajouter une question</h1>
            <form method="POST" class="dashQuestionForm">
                <section>
                    <input type="text" name="titreQuestion" id="" placeholder="question">
                </section>
                <textarea id="contenuArticle"  name="contenuQuestion"></textarea>
                <input type="submit" name="valid_qr" value="UPLOAD LA QUESTION">
            </form>
        </section>
    </main>

    <script>
        CKEDITOR.replace( 'contenuQuestion' );
    </script>
</body>
</html>