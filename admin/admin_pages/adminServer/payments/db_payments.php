<?php
require "../lib/base/connection.php";

if(isset($_POST['pt1'])){
	$query = "SELECT  reservations.id, `user_id`, users.email, apartments.ap_name, `reservation_price` 
	FROM ((
	 `reservations` INNER JOIN `users` ON reservations.user_id=users.id)
		INNER JOIN `apartments` ON reservations.ap_id=apartments.ap_id) WHERE `status`=1 and `paid` = 0;";
$list=$pdo->prepare($query);
$list->execute();
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Users ID</th>
            <th>Reservation ID</th>
            <th>Email</th>
            <th>Apartment</th>
            <th>Full price</th>
            <th>Confirm payment</th>
        </tr>
    </thead>   
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $list->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['user_id']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['ap_name']; ?></td>
        <td><?php echo $row['reservation_price']; ?></td>

        <td><center><button class="btn btn-success btn-xs" id="paid" 
        value="<?php echo $row['id']; ?>" type="button">confirm</a></button></center></td>
        </tr>
        <?php } ?>

 </tbody>
         
</table>
<?php
}


if(isset($_POST['pt2'])){
	$query = "SELECT  reservations.id, `user_id`, users.email, apartments.ap_name, `reservation_price` 
	FROM ((
	 `reservations` INNER JOIN `users` ON reservations.user_id=users.id)
		INNER JOIN `apartments` ON reservations.ap_id=apartments.ap_id) WHERE `status`=1 and `paid` = 1;";
$list=$pdo->prepare($query);
$list->execute();
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Users ID</th>
            <th>Reservation ID</th>
            <th>Email</th>
            <th>Apartment</th>
            <th>Full price</th>
            <th>Paid</th>
        </tr>
    </thead>   
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $list->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['user_id']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['ap_name']; ?></td>
        <td><?php echo $row['reservation_price']; ?></td>
        <td><center><b> ✔ </center></b></td>
        </tr>
        <?php } ?>

 </tbody>
         
</table>
<?php
}
?>
