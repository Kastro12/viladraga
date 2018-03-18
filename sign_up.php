<?php session_start(); ?>
<?php require "lib/base/login.php"; ?> 

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Vila Draga</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/aos/dist/aos.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>


	<link href="css/style.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="/images/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="js/aos/dist/aos.css" />

</head>
<body>
<div class="all">

	
	<!--		<div class="menu"> 
				<?php
		//	include 'heder.php'; 
			?>
		</div> -->
	<div class="container"><br/><br/><br/><br/><br/>
			<h3>You must be logged in to book apartments</h3>
			<br/> 
			<br/>

	

		<?php include "lib/login_form.php"; ?>



	</div>  


</div>



</body>
</html> 