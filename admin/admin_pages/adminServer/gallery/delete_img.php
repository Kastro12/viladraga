<?php
require "../../../../lib/base/connection.php";

$data=$_GET['image'];


if(isset($data))

{
 echo $data;


	$queryImg = "DELETE FROM `images` WHERE `img_name` = '$data'";
	$del=$pdo->prepare($queryImg);
	$del->bindParam('$data', $data);
	$del->execute();
	
}

?>