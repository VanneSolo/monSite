<?php include_once('session.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>mon site</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
        <!-- Haut de page / Menu de navigation -->
        <?php include_once 'header.php'?>
        
        <!-- Contenu de la page -->
        <h2>De jolis dessins.</h2>
        <p class="un">Disponibles pour tout le monde.</p>

        <!-- Inclure ici le script pour charger de nouvelles images dans la bdd si besoin. -->

        <?php include_once 'includes/display.php'; ?>
        
        <?php
            if(isset($_SESSION['pseudo']) && isset($_SESSION['premium'])){
                $username = $_SESSION['pseudo'];
                ?>
                <p>Bonjour, <?php echo $_SESSION['pseudo']; ?>. Compte premium: <?php echo $_SESSION['premium']; ?></p>
                <?php
            }else{
                echo "<p>"."Bonjour, invité. Si vous êtes déjà déjà membre vous pouvez vous connecter. Sinon vous pouvez créer un compte pour profiter de la zone premium"."<p>";
            }
        ?>

        <!-- Pied de la page -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>