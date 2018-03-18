<?php 
session_start();
require_once "lib/reserve/send_reservation.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Vila Draga</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myjs/heder.js"></script>
	<script src="js/aos/dist/aos.js"></script>
	<script src="lib/reserve/js/ap_option.js"></script>
	<script src="js/myjs/reservation_validation.js"></script>
	<script src="js/jquery-ui.js"></script>

	<link rel="stylesheet" type="text/css" href="js/jquery-ui.css"/> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="js/datepicker.css"/>

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
		</div>
		<div class="container">
			<br/><br/><br/><br/><br/><br/><br/><br/>
	<center><h3 id="book_it_info">Book an apartment now</h3></center><br/>

	<form id="dp" method="POST">  <!-- POCETAK FORME  -->




			<div class="col-sm-4">  <!-- ODABIR APARTMANA -->
					
					<div class="form-group">
    					<label>Choose an apartment
    					</label>
    				 					
    					<?php
    					include '/lib/reserve/db_apartment.php'; 
    					 ?>		
 <!--   <div style="width: 300px; height: 100px; background-color: red; color: black;">
    	<input type="text" id="lock_days"/></div> -->
 			</div> 
	
 							<!-- DATUMI -  DOLAZAK -->

			</div>
			<div class="col-sm-4">
				
				<div class="col-sm-6">
					<div class="form-group"> 
            		<div class="input-append date">
					<label>Day of arrival</label><br/>
					<input type="text" class="form-control" name="date1" id="dp1" readonly
					style="cursor: pointer; background-color: white;" 
					placeholder="choose day" />	
	
					</div>
					</div>

								<!-- DATUMI - ODLAZAK  -->
				</div>
				<div class="col-sm-6">
					<div class="form-group">
            		<div class="input-append date">
		    		<label>Departure day</label><br/>
					<input type="text" id="dp2" class="form-control" name="date2" readonly
					style="cursor: pointer; background-color: white;" 
					data-date-format="yyyy-mm-dd" placeholder="choose day" />

					</div>
					</div>
				</div>
				
         	</div>

         						<!-- CENA = BROJ DANA PUTA CENA PO DANU -->

			<div class="col-sm-4"> 
					<div class="col-sm-6">
					<label>Price per day €</label><br/>
					<input type="text" name="price" id="price" class="price"
					 placeholder="€" readonly />
					</div>
					<div class="col-sm-6">
				<b style="color: red;">	<?php echo $info; ?> </b>
					<br/>

					<button type="submit" class="book_it" id="book_it" name="book_it">
						<center>BOOK IT!</center>
						</button>
					</div>

			</div>
				
	</form>	


	<div class="container"><br/><br/><br/>




	<br/><br/><br/>
	<center>
	<h3 style="color: #191970">Look at our apartments</h3> <!-- GALERIJA APARTMANA -->
	</center><br/><br/>

	<div class="row">
		<div class="col-sm-4"> <center><h3 style="color: #191970">Apartment Luxury</h3></center>

		<div class="hovereffect">
        	<img class="img-responsive" src="images/apartments/ap1.jpg" alt="">
        	<div class="overlay">
           
           <a class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has </a>
        </div>
    </div>

	</div>

		<div class="col-sm-4"> <center><h3 style="color: #191970">Apartment Family</h3></center>
		<div class="hovereffect">
        	<img class="img-responsive" src="images/apartments/ap2.jpg" alt="">
        	<div class="overlay">
           	
           <a class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has </a>
        </div>
    </div>

	</div>

		<div class="col-sm-4"> <center><h3 style="color: #191970">Apartment Business</h3></center>		
		<div class="hovereffect">
        	<img class="img-responsive" src="images/apartments/ap3.jpg" alt="">
        	<div class="overlay">
           	
           <a class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has </a>
        </div>
    </div>
	</div>	

	</div>

	<br/><br/><br/>
		<div class="row">

		<div class="col-sm-4"> <center><h3 style="color: #191970">Apartment Economical</h3></center>
		<div class="hovereffect">
        	<img class="img-responsive" src="images/apartments/ap4.jpg" alt="">
        	<div class="overlay">
       
           <a class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has </a>
        </div>
    </div>
	</div>
				
		<div class="col-sm-4"> <center><h3 style="color: #191970">Apartment Couple</h3></center>
		<div class="hovereffect">
        	<img class="img-responsive" src="images/apartments/ap5.jpg" alt="">
        	<div class="overlay">
          
           <a class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has </a>
        </div>
    </div>
	</div>

		<div class="col-sm-4"> <center><h3 style="color: #191970">Apartment View</h3></center>
		<div class="hovereffect">
        	<img class="img-responsive" src="images/apartments/ap6.jpg" alt="">
        	<div class="overlay">
       
           <a class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has </a>
        </div>
    </div>
	</div>	

	</div>


</div>

<script type="text/javascript">
	AOS.init();






</script>

</body>
</html>