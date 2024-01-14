<h3>Envoi d'une image</h3>
<form enctype="multipart/form-data" action="#" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
    <input type="file" name="fic" size=50 />
    <input type="submit" value="Envoyer">
</form>

<?php
    function transfert(){
        $ret = false;
        $img_blob = '';
        $img_taille = 0;
        $img_type = '';
        $img_nom = '';
        $taille_max = 500000;
        $ret = is_uploaded_file($_FILES['fic']['tmp_name']);

        if(!$ret){
            echo "Problème de transfert!";
            return false;
        }else{
            $img_taille = $_FILES['fic']['size'];

            if($img_taille > $taille_max){
                echo "Fichier trop gros!";
                return false;
            }

            $img_type = $_FILES['fic']['type'];
            $img_nom = $_FILES['fic']['name'];
            include_once 'database.php';
            $img_blob = file_get_contents($_FILES['fic']['tmp_name']);

            $req = $db->prepare("INSERT INTO images(img_nom,img_taille,img_type,img_blob) VALUES(:img_nom,:img_taille,:img_type,:img_blob)");
            $req->execute([
                    'img_nom'=>$img_nom,
                    'img_taille'=>$img_taille,
                    'img_type'=>$img_type,
                    'img_blob'=>$img_blob
                ]);
            return true;
        }
    }
?>

<!-- script à remettre dans index.php pour envoyer d'autres images dans la bdd. -->
