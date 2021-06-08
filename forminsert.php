<?php 
include "dbcon.php";

$name = $_POST['name'];
$college = $_POST['college'];
$gender = $_POST['gender'];
$education = $_POST['education'];

// echo "<pre>";
// print_r($education);

$b =implode(',',$education);  //array to string conversion
// echo $b;
$a = "insert into form1(name,college,gender,education)value('$name','$college','$gender','$b')";

mysqli_query($con,$a);
?>