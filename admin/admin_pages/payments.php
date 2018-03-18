<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="admin_pages/adminServer/payments/db_payments.js"></script>
</head>
<body>



<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<h1 class="page-header">Payments</h1>
<br/><br/><br/>

<form method="POST" action="" name="user_form" id="user_form">
 <button class="btn btn-primary" name="pt1">Users who own</button>&nbsp;&nbsp;
 <button class="btn btn-primary" name="pt2">Users who paid</button>&nbsp;&nbsp;
</form>

<br/>

<h2 class="sub-header" id="info_users"><?php info_user(); ?></h2>

<br/><br/><br/>





<?php 

require_once "adminServer/payments/db_payments.php";

 function info_user(){
  if(isset($_POST['pt1'])){
    echo "Users who own.";
  }
  else if(isset($_POST['pt2'])){
    echo "Users who paid.";
      }
else {
  echo "Select list";
  }
}

?>




</div>
</body>
</html>