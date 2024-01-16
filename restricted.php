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

        <?php
            if(isset($_SESSION['pseudo']) && isset($_SESSION['premium'])){
                if($_SESSION['premium'] == 'non'){
                    ?>
                    <h2>Vous auriez pu être dans l'élite.</h2>
                    <?php
                    echo "<p>"."Vous n'êtes pas premium!"."</p>";
                }else if($_SESSION['premium'] == 'oui'){
                ?>
                    <h2>Vous voilà dans l'élite.</h2>
                    <p>Bienvenue chez les riches, <?php echo $_SESSION['pseudo']; ?>.</p>
                    
                    <div id="camion"> 
                        <img src="img/renault_premium.jpg" id="vroum"/>
                    </div>
                <?php
                }
            }else{
                ?>
                <h2>Vous n'êtes qu'un simple manant.</h2>
                <?php
                echo "<p>"."Veuillez créer votre compte!"."</p>";
            }
        ?>

        <!-- Pied de la page -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>