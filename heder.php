

<div class="container-fluid"> 

    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
        <a class="navbar-toggle" data-toggle="collapse"
        data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        
        </div>
        <div class="navbar-collapse collapse">
          
                  <div class="navigation" class="text1"><a href="index.php"> Vila Lux</a></div>         
                  <div class="navigation"><a href="#home">Home</a></div>
                  <div class="navigation"><a href="#about">About us</a></div>
                  <div class="navigation"><a href="#gallery">Gallery</a></div>
                  <div class="navigation"><a href="#contact">Contact as</a></div>
                  <div class="navigation"><a href="reservation.php">Book it</a></div>
                  <div class="navigation" id='sign_up'>
                 
 <?php 

      if(isset($_SESSION['email']))
      {
       echo $_SESSION['name'];
      }
      else 
      {
      echo "Sign up";
      }

      ?>

                  </div>

          <div id="login">
            
                  <?php 

      if(isset($_SESSION['email']))
      {
        include "lib/base/logout.php";
  
      }
      else 
      {
        include "lib/login_form.php";
       
      }

      ?>
          </div>
        </div>

    </div>
</div>  <!-- /container -->



