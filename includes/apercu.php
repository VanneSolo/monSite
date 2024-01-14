<?php
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        include_once('database.php');
        $i = $db->prepare("SELECT img_id, img_type, img_blob FROM images WHERE img_id = ".$id);
        $i->execute();
        $im = $i->fethcAll();

        if(!$im[0]){
            echo "ID d'image inconnu";
        }else{
            header("Content-type: ".$im[1]);
            echo $im[2];
        }
    }else{
        echo "Mauvais ID d'image!";
    }
?>