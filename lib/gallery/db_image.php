

<?php 

require "../base/connection.php";
if(isset($_GET['category'])){

$img = $_GET['category'];

//uporedjujem unetu kategoriju sa kategorijom iz baze

$query = "SELECT * FROM `images` WHERE `category` = '$img' ";
$statement = $pdo->prepare($query);
$statement ->execute(array(
	'category' => $_GET['category']
));

$count = $statement->rowCount();

if($count > 0){


while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

$imgUrl = "/lib/gallery/image/".$row['img_name'];


?>

<a href="<?php echo $imgUrl ?>" data-fancybox='group' data-caption="<?php echo $row['title']; ?>">
	<div class="col-sm-4">
	<div class="fancybox">
	<img src="<?php echo $imgUrl; ?>" class="img-responsive"/>
</div>
</div>
</a>




<?php
}
}
}
?>

