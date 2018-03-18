<?php
require_once "../base/connection.php"; //putanja namenjena stranici reservation.php

$data= $_POST['calendar'];

if(!empty($data))
{
	$query = "SELECT `ap_id` FROM `apartments` WHERE `ap_name` = '$data'";
	$statement=$pdo->prepare($query);
	$statement->execute(array(
	'ap_name' => $data
	));

	$count = $statement->rowCount();

	if($count > 0)
	{
		$result = $statement->fetch(PDO::FETCH_ASSOC);

		$data = $result['ap_id']; // 	IZVUCEN ID APARTMANA	


		$query_day = "SELECT `date_in`, `date_out` FROM `reservations` WHERE `ap_id` = '$data' and `status` = 0 ";
		$st=$pdo->prepare($query_day);
		$st->execute(array(
		'ap_id' => $data,
		'status' => 0
		));

		$count_cal = $st->rowCount();
	

		$re = $st->fetchAll(PDO::FETCH_ASSOC);

	//	var_dump($re);

		foreach ($re as $day) 
		{
//		echo $firstDay= $day['date_in']. " " . $secondDay =$day['date_out']. " | ";
			$begin = new DateTime($day['date_in']);
			$end = new DateTime($day['date_out']);

			$interval = new DateInterval('P1D');

		//	$interval = DateInterval::createFromDateString('1 day');
			$period = new DatePeriod( $begin, $interval,$end);

			$range=[];
			
			foreach ($period as $key => $dt) {
			echo	$range[] = $dt->format('Y-m-d');
			}
		


			/*foreach($period as $dt)
			{			
			echo $data = $dt->format('Y-m-d'); // samo datumi
	// $range[] = $dt->format('Y-m-d');			
	//	header('Content-Type: application/json');
//$json =	json_encode($data);
	



		     $range[] = "'".$dt->format('Y-m-d'). "', ";
		
			}*/

		

			
		} 

	}
}


?>