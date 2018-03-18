<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="admin_pages/adminServer/users/db_users.js"></script>
</head>
<body>



<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<h1 class="page-header">Users</h1>
<br/><br/><br/>

<form method="POST" action="" name="user_form" id="user_form">
 <button class="btn btn-primary" name="bt1">Users who booked it</button>&nbsp;&nbsp;
 <button class="btn btn-primary" name="bt2">Users who confirmed booking</button>&nbsp;&nbsp;
 <button type="submit" class="btn btn-primary" name="bt5" id="bt5">All registered</button>&nbsp;&nbsp;
</form>

<br/>

<h2 class="sub-header" id="info_users"><?php info_user(); ?></h2>


<?php 
require_once "adminServer/users/db_users.php";



 function info_user(){
  if(isset($_POST['bt5'])){
    echo "All registered.";
  }
  else if(isset($_POST['bt2'])){
    echo "Users who confirmed booking.";
      }
  else if(isset($_POST['bt1'])){
    echo "Users who booked it.";
  }
else {
  echo "Select list";
  }
}
?>




</div>
</body>
</html>