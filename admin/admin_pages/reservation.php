<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="admin_pages/adminServer/reservation/db_reservation.js"></script>
</head>
<body>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<h1 class="page-header">Reservations</h1>
<br/><br/><br/>

<form method="POST" action="" name="reservation_form" id="reservation_form">
 <button class="btn btn-primary" name="r1" id="r1">Confirmed reservations</button>&nbsp;&nbsp;
 <button class="btn btn-primary" name="r2" id="r2">Made reservations</button>&nbsp;&nbsp;
 </form>

<br/>

<h2 class="sub-header" id="info_users"><?php info_user(); ?></h2>

<?php

require_once "adminServer/reservation/db_reservation.php";


function info_user(){
  if(isset($_POST['r1'])){
    echo "Confirmed reservations.";
  }
  else if(isset($_POST['r2'])){
    echo "Made reservations.";
  }
else {
  echo "Select list";
  }
}
?>

</div>

</body>
</html>