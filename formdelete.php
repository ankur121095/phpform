<?php 

include "dbcon.php";

$id = $_GET['i'];
$q = "delete from form1 where id = $id";
 mysqli_query($con,$q);

 header('location:formdisplay.php');



?>