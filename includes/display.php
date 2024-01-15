<?php
    include_once 'database.php';
    $import = $db->prepare("SELECT img_nom,img_id,img_blob FROM images ORDER BY img_nom");
    $import->execute();
    
    ?>
    <table id="img_table">
        <tr>
            <th>Image</th>
            <th>Nom de l'image</th>
        </tr>
        <?php
            while ($row = $import->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?php echo '<img src = "data:image/png;base64,' . base64_encode($row['img_blob']) . '" width = "100px" height = "100px"/>'; ?></td>
                <td><?php echo $row['img_nom']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php
?>