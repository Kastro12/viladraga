<?php
require 'connection.php';



if(isset($_POST['login']) && $_POST['email_log'] && $_POST['password_log'])
{
	$emailLog = $_POST['email_log'];
	$passwordLog = $_POST['password_log'];

	// uporedjuejm uneti email sa email-om iz baze
	$query = "SELECT * FROM `users` WHERE `email`= '$emailLog'";
	$st = $pdo->prepare($query);
	$st->execute(array(
		'email' => $_POST['email_log']
	));

	$count= $st->rowCount();

	//ako se uneti email poklapa sa email iz baze izvrsi sledece
	if($count > 0)
	{
		//izvlacim sve podatke iz baze u promenljivo $row
 		$row = $st->fetch(PDO::FETCH_ASSOC);
 	

 		if(password_verify($passwordLog, $row['password']))
 		{
 			session_start();
 		
 			$_SESSION['name']=$row['first_name'];
 			$_SESSION['email']=$row['email'];
 			$_SESSION['user_id'] = $row['id'];
 			header("Location:index.php");
 		}
 		else
 		{
 			echo "nije dobra sifra";
 		}

	}
		
		
	



}


?>