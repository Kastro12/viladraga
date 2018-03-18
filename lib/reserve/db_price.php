


<?php
require "../base/connection.php";



$data= $_POST['data'];

if(!empty($data))
{
	$query = "SELECT `price` FROM `apartments` WHERE `ap_name` = '$data'";

	$st= $pdo->prepare($query);
	$st->execute(array(
	'ap_name' => $_POST['data']
	));

	$count=$st->rowCount();

	if($count > 0)
	{
		$result = $st->fetch(PDO::FETCH_ASSOC);

		 $data = $result['price'];
		 echo $data;
	}

	else
	{
		echo $data ='/';
	}

}


?>
