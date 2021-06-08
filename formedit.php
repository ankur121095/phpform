<?php 

include "dbcon.php";

$id = $_GET['a'];
$q = "select * from form1 where id = $id";
$p = mysqli_query($con,$q);
$f = mysqli_fetch_array($p);


$a = $f['education'];
$b = explode(',', $a);
// echo "<pre>";
// print_r($b);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="post" action="formupdate.php">
Id:		
        <input type="text" name="id" value="<?php echo $f['id'] ?>">
        <br>
        <br>
    
Name:
		<input type="text" name="name" value="<?php echo $f['name'] ?>">
		<br>
		<br>
College:
        <select name="college">
	        <option value="select">Select</option>
		    <option value="rjit"
            <?php
            if ($f['college']=='rjit') {
             	echo "selected";
             } 

            ?>
		    >RJIT</option>
		    <option value="mpct"
		    <?php
		    if ($f['college']=='mpct') {
		     	echo "selected";
		     } 
		    ?>
		    >mpct</option>
		    <option value="itm"
		    <?php
		    if ($f['college']=='itm') {
		     	echo "selected";
		     } 
		    ?>
		    >itm</option>
		    <option value="jaincollege"
		    <?php
		    if ($f['college']=='jaincollege') {
		     	echo "selected";
		     } 
		    ?>
		    >jain college</option>
        </select>
			<br>
			<br>
Gender:
        <input type="radio" name="gender" value="male"
        <?php
        if ($f['gender']=='male') {
         	echo "checked";
         } 
        ?>
        >Male
	    <input type="radio" name="gender" value="female"
	    <?php
	    if ($f['gender']=='female') {
	     	echo "checked";
	     } 
	    ?>
	    >FeMale
	    <input type="radio" name="gender" value="other"
	    <?php
	    if ($f['gender']=='others') {
	     	echo "checked";
	     } 
	    ?>
	    >other
               <br>
               <br>
Education:
        <input type="checkbox" name="education[]" value="mca"
        <?php
        if (in_array('mca', $b)) {
         	echo "checked";
         } 
        ?>
        >MCA
        <input type="checkbox" name="education[]" value="ca"
        <?php
        if (in_array('ca',$b)) {
         	echo "checked";
         } 
        ?>
        >CA      
        <input type="checkbox" name="education[]" value="ma"
        <?php
        if (in_array('ma',$b)) {
         	echo "checked";
         } 
        ?>
        >MA
        <input type="checkbox" name="education[]" value="bba"
        <?php
        if (in_array('bba',$b)) {
         	echo "checked";
         } 
        ?>
        >BBA
        <br>
        <br>
<input type="submit" name="a" value="Submit">
		


	</form>

</body>
</html>