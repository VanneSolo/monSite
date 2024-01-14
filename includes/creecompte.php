<?php
    if(isset($_POST["formsend"])){
        extract($_POST);

        if(!empty($pseudo) && !empty($email) && !empty($password) && !empty($cpassword) && !empty($estpremium)){
            //echo "Votre mot de passe: ".$password;
            if($password == $cpassword){
                $options = [
                    'cost' => 12,
                ];
                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                echo "test password: ".password_verify($password, $hashpass);
                
                $c = $db->prepare("SELECT pseudo FROM users WHERE pseudo = :pseudo");
                $c->execute(['pseudo'=>$pseudo]);
                $nbpseudo = $c->rowCount();

                $d = $db->prepare("SELECT email FROM users WHERE email = :email");
                $d->execute(['email'=>$email]);
                $nbemail = $d->rowCount();

                if($nbpseudo == 0 && $nbemail == 0){
                    $q = $db->prepare("INSERT INTO users(pseudo,email,password,estpremium) VALUES(:pseudo,:email,:password,:estpremium)");
                    $q->execute([
                        'pseudo'=>$pseudo,
                        'email'=>$email,
                        'password'=>$hashpass,
                        'estpremium'=>$estpremium
                    ]);
                    echo "Le compte a été crée.";
                }elseif($nbpseudo > 0){
                    echo "Ce pseudo est déjà utilisé.";
                }elseif($nbemail > 0){
                    echo "Cet email est déjà utilisé.";
                }
                
            }
        }else{
            echo "Les champs ne sont pas tous remplis!";
        }
    }
?>