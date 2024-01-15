<?php include_once('session.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>mon site</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- Haut de page / Menu de navigation -->
        <?php include_once 'header.php'; ?>
        
        <!-- Contenu de la page -->
        <?php include_once 'includes/database.php'; 
            global $db; 
        ?>

        <h2>Créer un compte.</h2>
        <div class="formulaire">
            <form method="post" id="creation">
                <input type="text" name="pseudo" id="pseudo" placeholder="votre pseudo" required><br/>
                <input type="email" name="email" id="email" placeholder="votre email" required><br/>
                <input type="password" name="password" id="password" placeholder="votre mot de passe" required><br/>
                <input type="password" name="cpassword" id="cpassword" placeholder="confirmer votre mot de passe" required><br/>
                <!-- <input type="text" name="estpremium" id="estpremium" placeholder="Premium: oui/non" required><br/> -->
                <label for="estpremium">Voulez-vous être premium?</label>
                <select name="estpremium" id="estpremium" form="creation" required>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
                <input type="submit" name="formsend" id="formsend" value="Créer le compte">
            </form>
        </div>

        <?php include_once 'includes/creecompte.php'; ?>
        
        <h2>Connexion.</h2>
        <div class="formulaire">
            <form method="post">
                <input type="text" name="conpseudo" id="conpseudo" placeholder="votre pseudo" required><br/>
                <input type="password" name="conpassword" id="conpassword" placeholder="votre mot de passe" required><br/>
                <input type="submit" name="formlogin" id="formlogin" value="Se connecter">
            </form>
        </div>

        <?php include_once 'includes/login.php'; ?>
        
        <!-- Pied de page -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>