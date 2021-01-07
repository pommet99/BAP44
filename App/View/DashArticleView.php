<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>

    <main class="main-dashboard">
        <?php include("inc/dashMenu.php") ?>
        <section class="page-dashboard">
            <h1>Publier un article</h1>
            <form action="" class="dashArticleForm" enctype="multipart/form-data">
                <section>
                    <input type="text" name="#" id="#" placeholder="titre de l'article">
                    <input type="file" name="" id="">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </section>
                <textarea id="contenuArticle"  name="contenuArticle"></textarea>
                <input type="submit" value="UPLOAD L'ARTICLE">
            </form>
        </section>
    </main>

    <script>
        CKEDITOR.replace( 'contenuArticle' );
    </script>
</body>
</html>