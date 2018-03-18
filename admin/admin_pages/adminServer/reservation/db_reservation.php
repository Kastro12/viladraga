<?php
require "../lib/base/connection.php";

// CLICK ON MADE RESERVATIONS
if(isset($_POST['r2']))
{

	$query = "SELECT reservations.id, `reservation_day`, `user_id`, users.email, apartments.ap_name,`date_in`,
	 `date_out`, `reservation_price` FROM ((
	 `reservations` INNER JOIN `users` ON reservations.user_id=users.id)
		INNER JOIN `apartments` ON reservations.ap_id=apartments.ap_id) WHERE `status`=0;";

		$reservation = $pdo->prepare($query);
		$reservation->execute();


?>
		<table class="table table-striped">
    <thead>
        <tr>
            <th>Date of reservation</th>
            <th>Reservation ID</th>
            <th>User Id</th>
            <th>Email</th>
            <th>Apartment</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Price €</th>
            <th>Confirm</th>
            <th>Delete</th>
            
        </tr>
    </thead>   
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $reservation->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['reservation_day']; ?></td>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['ap_name'] ?></td>
            <td><?php echo $row['date_in']; ?></td>
            <td><?php echo $row['date_out']; ?></td>
            <td><?php echo $row['reservation_price']; ?></td>
            <td><button class="btn btn-secondary btn-xs" id="confirm" value="<?php echo $row['id']; ?>" type="button" data-toggle="modal">✔</a></button></td>
            <td><button class="btn btn-danger btn-xs" id="delete" value="<?php echo $row['id']; ?>" type="button" data-toggle="modal">X</a></button></td>
        </tr>
        <?php } ?>
 </tbody>
</table>
		
<?php
}

// CLICK ON CONFIRMED RESERVATIONS

if(isset($_POST['r1']))
{

	$query = "SELECT reservations.id, `reservation_day`, `user_id`, users.email, apartments.ap_name,`date_in`,
	 `date_out`, `reservation_price` FROM ((
	 `reservations` INNER JOIN `users` ON reservations.user_id=users.id)
		INNER JOIN `apartments` ON reservations.ap_id=apartments.ap_id) WHERE `status`=1;";

		$reservation = $pdo->prepare($query);
		$reservation->execute();


?>
		<table class="table table-striped">
    <thead>
        <tr>
            <th>Date of reservation</th>
            <th>Reservation ID</th>
            <th>User Id</th>
            <th>Email</th>
            <th>Apartment</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Price €</th>
            <th>Remove</th>

            
        </tr>
    </thead>   
    <tbody>

        <?php while( $row = $reservation->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
 
            <td><?php echo $row['reservation_day']; ?></td>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['ap_name'] ?></td>
            <td><?php echo $row['date_in']; ?></td>
            <td><?php echo $row['date_out']; ?></td>
            <td><?php echo $row['reservation_price']; ?></td>
            <td><button class="btn btn-secondary btn-xs" id="remove" value="<?php echo $row['id']; ?>" type="button" data-toggle="modal">X</a></button></td>
        </tr>
        <?php } ?>
 </tbody>
</table>
		
<?php
}



?>