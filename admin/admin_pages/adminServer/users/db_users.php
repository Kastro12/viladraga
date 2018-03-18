

<?php
require "../lib/base/connection.php";


if(isset($_POST['bt5']))
{



$query5 = "SELECT * FROM `users` ORDER BY `first_name` asc";
$bt5 = $pdo ->prepare($query5);
$bt5->execute();

?>


<table class="table table-striped">
    <thead><p style="float: right; bottom: 0; right: 0; font-size: 10pt;">*If you can not delete the user, delete his reservation first.</p>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Delete</th>
        </tr>
    </thead>   
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row5 = $bt5->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row5['first_name']; ?></td>
            <td><?php echo $row5['last_name']; ?></td>
            <td><?php echo $row5['email']; ?></td>
            <td><?php echo $row5['phone'] ?></td>
            <td><button class="btn btn-danger btn-xs" id="delete_user" value="<?php echo $row5['email']; ?>" type="button" data-toggle="modal">X</a></button></td>
        </tr>
        <?php } ?>
 </tbody>
</table>


<?php
}
include "delete_modal.php";


?>


<?php



if(isset($_POST['bt1']))
{


    $query = "SELECT users.first_name, users.last_name, users.email, users.phone, apartments.ap_name,
    `date_in`, `date_out` FROM ((
     `reservations` INNER JOIN users ON reservations.user_id=users.id)
        INNER JOIN apartments ON reservations.ap_id=apartments.ap_id) WHERE `status`=0;";

        $reservation = $pdo->prepare($query);
        $reservation->execute();


?>
        <table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Apartment</th>
            <th>Check in</th>
            <th>Check out</th>    
        </tr>
    </thead>   
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $reservation->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['ap_name']; ?></td>
            <td><?php echo $row['date_in']; ?></td>
            <td><?php echo $row['date_out']; ?></td>
        </tr>
        <?php } ?>
 </tbody>
</table>
<?php
}
?>

<?php



if(isset($_POST['bt2']))
{


    $query = "SELECT users.first_name, users.last_name, users.email, users.phone, apartments.ap_name,
    `date_in`, `date_out` FROM ((
     `reservations` INNER JOIN users ON reservations.user_id=users.id)
        INNER JOIN apartments ON reservations.ap_id=apartments.ap_id) WHERE `status`=1;";

        $reservation = $pdo->prepare($query);
        $reservation->execute();


?>
        <table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Apartment</th>
            <th>Check in</th>
            <th>Check out</th>    
        </tr>
    </thead>   
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $reservation->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['ap_name']; ?></td>
            <td><?php echo $row['date_in']; ?></td>
            <td><?php echo $row['date_out']; ?></td>
        </tr>
        <?php } ?>
 </tbody>
</table>
<?php
}
?>
