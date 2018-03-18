<?php
require "../lib/base/connection.php";

$query = "SELECT * FROM `images` ORDER BY `category` asc";
$list=$pdo->prepare($query);
$list->execute();
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Category</th>
            <th>Image name</th>
            <th>Uploaded day</th>
            <th>Delete</th>
        </tr>
    </thead>   
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $list->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['img_name']; ?></td>
            <td><?php echo $row['uploaded_on']; ?></td>
            <td><button class="btn btn-danger btn-xs" id="delete_img" 
                value="<?php echo $row['img_name']; ?>" type="button" data-toggle="modal">X</a></button></td>
        </tr>
        <?php } ?>

 </tbody>
         
</table>



