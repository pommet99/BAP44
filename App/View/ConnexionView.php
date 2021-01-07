<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCPE SIMONE VEIL</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="mainLandingPage">
        <section class="connexionForm">
            <article>
                <h1>Portail de connexion</h1>
                <form action="#" method="#">
                    <input type="text" name="" id="" placeholder="identifiant">
                    <input type="password" name="" id="" placeholder="mot de passe">
                    <input type="submit" value="Se Connecter">
                </form>
            </article>
        </section>
        <section class="landingImg">
            <button id="help" onclick="modalHelp()">Besoin d'aide ?</button>
        </section> 
        <section class="modalHelp" id="modalHelp">
            <div>
                <h2>HELP TEST</h2>
                <span onclick="closeModalHelp()">X</span>
            </div>
        </section>
    </main> 
    <script src="js/ConnexionScript.js"></script>
</body>
</html>