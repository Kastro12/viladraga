<?php
require "../../../../lib/base/connection.php";

$data=$_GET['user'];
print_r($data);

if(isset($data))

{



	$query = "DELETE FROM `users` WHERE `email` = '$data'";
	$del=$pdo->prepare($query);
	$del->bindParam('$data', $data);
	$del->execute();


	
}

?>