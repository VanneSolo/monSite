<body>
    <div class="container">

    <header>
        <h1 class="titre"><a href="index.php">Le titre de mon site.</a></h1>
        <nav class="main-menu">
            <ul>
                <li class="main-menu-item"><a href="index.php">Accueil</a></li>
                <li class="main-menu-item"><a href="pourTous.php">Pour tous</a></li>
                <li class="main-menu-item"><a href="restricted.php">Zone premium</a></li>
                

                <?php
                    if(isset($_SESSION['pseudo']) && isset($_SESSION['premium'])){
                        $username = $_SESSION['pseudo'];
                        ?>
                        <li class="main-menu-item" id="deco"><a href="logout.php"><input type="submit" name="logout" id="logout" value="Se déconnecter"></a></li>
                        <?php
                    }else{
                        ?>
                        <li class="main-menu-item" id="co"><a href="connexion.php"><input type="submit" name="signinLogin" id="signinLogin" value="Créer un compte ou se connecter"></a></li>
                        <?php
                    }
                ?>
            </ul>
        </nav>
    </header>


