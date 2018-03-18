
<?php
require "../../../../lib/base/connection.php";

// WHEN CLICK ON REMOVE - button(CONFIRMED RESERVATION)

if(isset($_POST['c']))
{
	$co = $_POST['c'];

		$query = "UPDATE `reservations` SET `paid`= 1 WHERE `id` = '$co'";
		$remove = $pdo->prepare($query);
		$remove->bindParam('i', $co);
		$remove->execute();
 
	//	echo $remove->rowCount(). "success";

}