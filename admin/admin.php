<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>Dashboard Template for Bootstrap</title>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/ie-emulation-modes-warning.js"></script>
    
<!--    <script src="admin_pages/adminServer/db_users.js"></script> -->


    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Villa Lux</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
           
            <li><a href="#"><select style="color: black;" onchange="location = this.value;">
              <option>Menu</option>
              <option value="admin.php?ad=1">Calendar</option>
              <option value="admin.php?ad=2">Reservations</option>
              <option value="admin.php?ad=3">Users</option>
              <option value="admin.php?ad=4">Gallery</option>
              <option value="admin.php?ad=5">Payments</option>
            </select></a></li>
             <li><a href="#">Profile</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

           
              <ul class="nav nav-sidebar"> 
                     
                <li><a href="admin.php?ad=1">Calendar</a></li>
                <li><a href="admin.php?ad=2">Reservations</a></li>
                <li><a href="admin.php?ad=3">Users</a></li>
                <li><a href="admin.php?ad=4">Gallery</a></li>
                <li><a href="admin.php?ad=5">Payments</a></li>
              </ul>
          
        
        </div>
        

              <?php 
              if(isset($_GET['ad']))
              {
                if($_GET['ad']==1)
                  include "admin_pages/calendar.php";
                if($_GET['ad']==2)
                  include "admin_pages/reservation.php";
                if($_GET['ad']==3)
                  include "admin_pages/users.php";
                if($_GET['ad']==4)
                  include "admin_pages/gallery.php";
                if($_GET['ad']==5)
                  include "admin_pages/payments.php";

              }
              ?> 


      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
