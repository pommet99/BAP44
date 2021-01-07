<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include("inc/header.php") ?>

    <main>
        <section class="container">
            <section class="sectionContactExp"> 
                <h2>Explications</h2> 
            </section>
            <section class="sectionContactForm">
                <h2>Formulaire de contact</h2>
                <form id="formContact" method="POST">
                    <section class="identiteContact">    
                        <label for="">Identité : </label>
                            <div>
                                <input type="text" placeholder="Nom" name="nom">
                                <input type="text" placeholder="Prenom" name="prenom">
                            </div> 
                    </section>
                    <section class="infosContact">
                        <label for="">Adresse Mail : </label>  
                        <div>
                            <input type="email" name="email" placeholder="email" required> 
                        </div>
                    </section>
                    <section class="infosContact">
                        <label for="">Téléphone : </label>                        
                        <div>
                            <input type="tel" name="numTel" placeholder="telephone +33" pattern="[0-9]{10}" required>
                        </div>
                    </section>
                    <section class="infosContact">
                        <label for="">Classe enfant: </label>                        
                        <div>
                           <select name="classe" id="">
                               <option value="">-- CHOISIR UNE CLASSE --</option>
                               <option value="Petite Section">Petite Section</option>
                               <option value="Moyenne Section">Moyenne Section</option>
                               <option value="Grande Section">Grande Section</option>
                           </select>
                        </div>
                    </section>
                    <section>
                        <label for="">Message : </label>
                        <div class="demandeContact">
                            <textarea name="message" id="" cols="30" rows="10"></textarea>
                        </div>
                    </section>
                    <section>
                        <label for=""></label>
                        <div>
                            <input type="submit" value="ENVOYER" name="valider-demande">
                        </div>
                    </section>
                </form>
            </section>
        </section>
    </main>

    <?php include("inc/footer.php") ?>
</body>
</html>