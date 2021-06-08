<?php 

include "dbcon.php";

$id = $_POST['id'];
$name = $_POST['name'];
$college = $_POST['college'];
$gender = $_POST['gender'];
$education = $_POST['education'];


$a=implode(',',$education);

// echo "<pre>";
// print_r($a);


$u = "update form1 set name = '$name', college = '$college', gender = '$gender', education = '$a' where id = $id";

mysqli_query($con,$u);
header('location:formdisplay.php');


?>