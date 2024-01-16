<?php
    if(isset($_POST['formlogin'])){
        extract($_POST);

        if(!empty($conpseudo) && !empty($conpassword)){
            $q = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
            $q->execute(['pseudo' => $conpseudo]);
            $p = $q->fetch();
            //var_dump($p);

            if($p == true){
                $hashpassword = $p['password'];
                $verify = password_verify($conpassword, $hashpassword);

                if(password_verify($conpassword, $p['password'])){
                //if($conpassword == $p['password']){
                    echo "Le mot de passe est bon, connecté.";
                    $_SESSION['pseudo'] = $p['pseudo'];
                    $_SESSION['premium'] = $p['estpremium'];
                }else{
                    echo "Le mot de passe ".$conpassword." ne correspond pas au mot de passe ".$p['password']."<br/>";
                    echo "hu: ".$verify;
                }
            }else{
                echo "Le compte portant le pseudo ".$conpseudo." n'existe pas.";
            }
        }else{
            echo "Veuillez compléter l'ensembler des champs.";
        }
    }
?>