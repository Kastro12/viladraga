<?php 

require "/../base/connection.php";

$info="";

if(!isset($_SESSION['email']))
{
  $info = "*first sign up.";
	return false;
}


if(isset($_POST['book_it']) &&
		 $_POST['ap_option'] &&
		 $_POST['date1'] &&
		 $_POST['date2'] &&
		 $_POST['price'] ) 
{

$apName = $_POST['ap_option'];
$dateIn = $_POST['date1'];
$dateOut = $_POST['date2'];
$price = $_POST['price'];
$userId = $_SESSION['user_id'];




$query_ap = "SELECT `ap_id` FROM `apartments` WHERE `ap_name` = '$apName'";
$statement = $pdo->prepare($query_ap);
$statement->execute();

$row = $statement->fetch(PDO::FETCH_ASSOC);

// 	ID apartmana 
$apId = $row['ap_id']; 

        $timestamp1 = strtotime($dateIn);
        $timestamp2 = strtotime($dateOut);

        $num = $timestamp2-$timestamp1;
        $days = round($num / (60*60*24) );

echo $days;
	if($timestamp2 < $timestamp1)
    	{
    		return false;
    	}


        $price = $price*$days;

        $current_day = date('Y-m-d');



        $query_reserve = "INSERT INTO `reservations` 
         (date_in, date_out, reservation_day, user_id, ap_id, reservation_price) 
         VALUES (:dateIn, :dateOut, :current_day, :userId, :apId, :price)";


    	$reservation = $pdo->prepare($query_reserve);
        $reservation->bindParam(':dateIn', $dateIn);
        $reservation->bindParam(':dateOut', $dateOut);
        $reservation->bindParam(':current_day', $current_day);
        $reservation->bindParam(':userId', $userId);
        $reservation->bindParam(':apId', $apId);
        $reservation->bindParam(':price', $price);
    	$reservation->execute();



    
    	if(!$reservation)
    	{
    		echo "neuspesna registracija";
    		return false;
    	}
    	else
    	{
    		echo "uspesno reservisan apartman";

            
    	} 
        
}

?>