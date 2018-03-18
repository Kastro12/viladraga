<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="../../../js/jquery-3.3.1.min.js"></script>
	<script src="../../../js/fancybox/jquery.fancybox.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
	<script src="../gallery.js"></script>
	<link rel="stylesheet" type="text/css" href="../../../js/fancybox/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="../../../js/fancybox/jquery.fancybox.min.css"/>
		<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css"/>
	<link href="../gallery.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="../../../images/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="../../../js/aos/dist/aos.css" />

</head>
<body>
<div class="all">
<div class="menu"> 

<div class="navigation" style="color: blue; font-size: 20pt;"> <a href="../../../index.php">
 Vila Lux</a></div>
<div class="navigation">Home</div>
<div class="navigation">About</div>
<div class="navigation">Gallery</div>
<div class="navigation">Contact</div>
<div class="navigation">Book it</div>
<div class="navigation">Login</div>
</div>
 <br/><br/><br/><br/><br/><br/>
<center>
<div id="myBtnContainer">
 <button class="btn" onclick="location.href='?category=vila'" value="vila">Villa Lux
</button>
 <button class="btn" onclick="location.href='?category=ap'" value="ap">Apartments</button>
 <button class="btn" onclick="location.href='?category=trsteno'" value="trsteno"> Trsteno beach</button>
 <button class="btn" onclick="location.href='?category=ploce'" value="ploce">Ploce beach</button>
 <button class="btn" onclick="location.href='?category=jaz'" value="jaz">Jaz beach</button>
</div>
</center>
<?php $category = $_GET['category'];?>
<input type="hidden" id="hidden" value="<?php echo $category; ?>" />


<br/>
<div class="container">
  
<?php
include 'db_image.php';
?>
</div>
</div>
</body>
</html>
