<?php

require_once "lib/base/register.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Vila Draga</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myjs/custom.js"></script>
	<script src="js/myjs/validation.js"></script>
	<script src="js/aos/dist/aos.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	<link href="css/style.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="/images/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="js/aos/dist/aos.css" />

</head>
<body>
<div class="all">

						
		<div class="menu">
			<?php
			 include 'heder.php'; 

			?>
		</div><br/><br/>
	<div class="container"><br/><br/><br/>
			 <p id="info" class="info"> ACTIVATE YOUR ONLINE ACCOUNT.</p>
			<br/>

	<form method="POST" action="" name="reg_form" id="reg_form">
				
	<label class="col-form-label">First Name</label>
	<input type="text" class="form-control" onkeyup="lettersOnly(this)" 
	placeholder="First Name" name="first_name" id="first_name" >
	<br/>
	

	<label class="col-form-label">Last Name</label>
	<input type="text" class="form-control" onkeyup="lettersOnly(this)" 
	placeholder="Last Name" name="last_name" id="last_name">
	<br/>
	

	<label class="col-form-label">Email</label>
	<input type="email" class="form-control" placeholder="Email Address" name="email" onchange="" id="email_name" onkeyup="lettersOnlyEmail(this)" >
	<br/>
	
	<label class="col-form-label">Phone number</label>
	<input type="text" class="form-control" placeholder="Phone number" name="phone" id="phone" />
	<br/>

	<label class="col-form-label">Password</label>
	<input type="password" class="form-control" 
	placeholder="Password" name="pass" id="pass1">
	<br/>
	

	<label class="col-form-label">Confirm Password</label>
	<input type="password" class="form-control"
	placeholder="Password" name="confirm_pass" id="pass2" >
	<br/>
	

 <button type="submit" class="btn-lg btn-primary" name="register" id="sub">
	Register
</button>

	</form>

	</div>


</div>



</body>
</html>
<script type="text/javascript">

function lettersOnly(input){
	var l = /[^a-z]/gi;
	input.value = input.value.replace(l,"");
}
function lettersOnlyEmail(input){
	var e = /[^a-z.@]/gi;
	input.value = input.value.replace(e,"");
}
</script>