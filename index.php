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
            <h2>Présentation</h2>
            <p>Bonjour, vous trouverez dans la partie "Pour tous" quelques uns de mes dessins. Il y a aussi une partie premium.</p>

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