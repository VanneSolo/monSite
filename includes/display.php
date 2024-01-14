<?php
    include_once 'database.php';
    $import = $db->prepare("SELECT img_nom,img_id FROM images ORDER BY img_nom");
    $import->execute();
    //$images = $import->fetchAll();

    // foreach($images as $image){
    //     echo "<a href=\"apercu.php?id=".$image[1]."\">".$image[0]."</a><br/>";
    //     //var_dump($images);
    // }

    while($image = $import->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
        echo "<a href=\"apercu.php?id=".$image[1]."\">".$image[0]."</a><br/>";
    }
?>