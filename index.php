<?php include_once('session.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>mon site</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
            <!-- Haut de page / Menu de navigation -->
            <?php include_once 'header.php'; ?>

            <!-- Contenu de la page -->
            <h2>Un sous titre</h2>
            <p class="un">Accueil</p>

            <?php
                if(isset($_SESSION['pseudo']) && isset($_SESSION['premium'])){
                    $username = $_SESSION['pseudo'];
                    ?>
                    <p>Votre pseudo: <?php echo $_SESSION['pseudo']; ?></p>
                    <p>Compte premium: <?php echo $_SESSION['premium']; ?></p>
                    <?php
                }else{
                    echo "Veuillez vous connecter à votre compte!";
                }
            ?>
        
        <!-- Pied de la page -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>