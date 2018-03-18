<?php
//session_start();

try{
		$pdo = new PDO('mysql:host=localhost; dbname=vila_lux', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
echo $e->getMessage();
die();
}


/*
 $pdo = new \PDO("mysql:host=localhost;dbname=vila_lux;charset=utf8","root", "",[ PDO::ATTR_EMULATE_PREPARES => false,
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]); 
*/

?>







