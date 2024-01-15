<?php
    if(isset($_GET['id'])){
        
        $id = intval($_GET['id']);
        include_once('database.php');
        $i = $db->query("SELECT img_id, img_type, img_blob FROM images WHERE img_id = ".$id);
        $i->execute();
        $im = $i->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

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