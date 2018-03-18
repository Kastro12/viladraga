<?php
require "../../../../lib/base/connection.php";

// WHEN CLICK ON REMOVE - button(CONFIRMED RESERVATION)

if(isset($_POST['data']))
{
	$data = $_POST['data'];

		$query = "UPDATE `reservations` SET `status`= 0 WHERE `id` = '$data'";
		$remove = $pdo->prepare($query);
		$remove->bindParam('i', $data);
		$remove->execute();
 
	//	echo $remove->rowCount(). "success";

}


//      WHEN YOU CLICK ON CONFIRM - button(MADE RESERVATIONS)

if(isset($_POST['confirm']))
{
	$confirm = $_POST['confirm'];

		$queryConfirm = "UPDATE `reservations` SET `status`= 1 WHERE `id` = '$confirm'";
		$conf = $pdo->prepare($queryConfirm);
		$conf->bindParam('i', $confirm);
		$conf->execute();
}




//      WHEN YOU CLICK ON DELETE - button(MADE RESERVATIONS)

if(isset($_POST['delete']))
{
	$delete = $_POST['delete'];

		$queryDel = "DELETE FROM `reservations` WHERE `id` = '$delete'";
		$d = $pdo->prepare($queryDel);
		$d->bindParam('i', $delete);
		$d->execute();
}



?>