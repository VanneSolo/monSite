<?php
    include_once 'database.php';
    $import = $db->prepare("SELECT img_nom,img_id,img_blob FROM images ORDER BY img_nom");
    //$import->bindParam("i", $_GET['image_id']);
    $import->execute();
    while ($row = $import->fetch(PDO::FETCH_ASSOC)){
        echo $row['img_nom'];
        echo '<img src = "data:image/png;base64,' . base64_encode($row['img_blob']) . '" width = "80px" height = "80px"/>';
    }
?>