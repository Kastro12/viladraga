<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="admin_pages/adminServer/gallery/db_gallery.js"></script>
</head>
<body>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<h1 class="page-header">Gallery</h1>
<br/><br/><br/>


<br/><br/>
<div class="col-sm-6">
 <h2 class="sub-header" id="info_users">List of all gallery images   </h2> 
</div>
<div class="col-sm-6">

<button class="btn btn-success btn-lg" data-toggle="modal" type="button" name="insert" id="insert" 
style="float: right;">
Insert new image
</button>
</div>


 <?php
 require_once "adminServer/gallery/db_gallery.php";

include "adminServer/gallery/insert_modal.php";
?>




</div>

</body>
</html>