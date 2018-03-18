<?php
require 'connection.php';

$emailError='';
$regularChar = "/[^a-z]/";

if(isset($_POST['register']) && 
		 $_POST['first_name'] && 
		 $_POST['last_name'] && 
		 $_POST['email'] && 
		 $_POST['phone'] &&
		 $_POST['pass'])
{
	
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['pass']; 
$confirmPass = $_POST['confirm_pass'];
$phone = $_POST['phone'];





$emailQuery = "SELECT COUNT(*) FROM `users` WHERE `email` = '$email'";
$emailResult = $pdo ->prepare($emailQuery);
$emailResult->execute();
$numResult = $emailResult->fetchColumn();

if($numResult > 0)
{
echo "<script>alert('Warning: An account with this email already exists!');
</script>";
	return false;
	header('Location: registration.php');
}


$options =['cost'=>11, 'salt'=>mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];
$hashPass = password_hash($pass,  PASSWORD_BCRYPT, $options);


$query = "
INSERT INTO `users` SET 
`first_name` = :first_name,
`last_name` = :last_name,
`email` = :email,
`password` = :pass,
`phone` = :phone
";

$registration = $pdo->prepare($query);
$registration->execute(array(
':first_name' => $firstName,
':last_name' => $lastName,
':email' => $email,
':pass' => $hashPass,
':phone' => $phone
));

	if(!$registration)
	{
		echo "<script>alert('Registracija nije uspesna!');</script>";
		return false;
	} else {
		echo "<script>alert('Odlicno!');</script>";
		header('Location: sign_up.php');
	}
};


?>
