<?php
require "../../../../lib/base/connection.php";

$data = $_POST['data'];

if(isset($data))
{
	$today = date("Y-m-d H:i:s");


	$query = "INSERT INTO `images` (img_name, uploaded_on, category, title )
	VALUES (:img_name, :uploaded_on, :category, :title)";

	$insert = $pdo->prepare($query);
	$insert->bindParam(':img_name', $data['img_name']);
	$insert->bindParam(':uploaded_on', $today);
	$insert->bindParam(':category', $data['category']);
	$insert->bindParam(':title', $data['title']);
	$insert->execute();

	if($insert)
	{
		echo "uspesno";
	}else {
		echo "podaci nisu poslati";
	}

}

?>