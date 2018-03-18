<?php



require_once "lib/base/connection.php"; //ova putanja je namenjena za stranicu reservation.php

$query ="SELECT `ap_name` FROM `apartments`";
$st = $pdo->prepare($query);
$st -> execute();

$count = $st->rowCount();
if($count > 0)
{
	$result = $st->fetchAll(PDO::FETCH_ASSOC);

	echo "<select class='form-control' name='ap_option' id='ap_option' onchange='load_new_content()'>";
	echo "<option></option>";
	foreach($result as $option)
	{
		echo "<option value='".$option['ap_name']."'>Apartment ".$option['ap_name']."</option>";


	}
	echo "</select>";

}

?>