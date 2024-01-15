<?php        
    //session_start();      
?>

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
        <?php include_once 'header.php'?>
        
        <!-- Contenu de la page -->
        <h2>Déconnexion</h2>
        <?php 
            //session_destroy sert à detruire la session  
            session_destroy();  
            echo "<p>"."Vous êtes  déconnecté"."</p>";
        ?>

        <!-- Pied de la page -->
        <?php include_once 'footer.php'; ?>
    </body>
</html>