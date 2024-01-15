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
        <h2>Vous voilà dans l'élite.</h2>

        <?php
            if(isset($_SESSION['pseudo']) && isset($_SESSION['premium'])){
                $username = $_SESSION['pseudo'];
                ?>
                <p>Bienvenue chez les riches, <?php echo $_SESSION['pseudo']; ?>.</p>
                
                <div id="camion"> 
                    <img src="img/renault_premium.jpg" id="vroum"/>
                </div>
                <?php
            }else{
                echo "<p>"."Veuillez vous connecter à votre compte!"."</p>";
            }
        ?>

        <!-- Pied de la page -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>