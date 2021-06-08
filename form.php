<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="post" action="forminsert.php">
    
Name:
		<input type="text" name="name" >
		<br>
		<br>
College:
        <select name="college">
	        <option value="select">Select</option>
		<option value="rjit">RJIT</option>
		<option value="mpct">mpct</option>
		<option value="itm">itm</option>
		<option value="jaincollege">jain college</option>
        </select>
			<br>
			<br>
Gender:
                <input type="radio" name="gender" value="male">Male
	        <input type="radio" name="gender" value="female">FeMale
	        <input type="radio" name="gender" value="other">other
               <br>
               <br>
Education:
        <input type="checkbox" name="education[]" value="mca">MCA
        <input type="checkbox" name="education[]" value="ca">CA      
        <input type="checkbox" name="education[]" value="ma">MA
        <input type="checkbox" name="education[]" value="bba">BBA
        <br>
        <br>
<input type="submit" name="a" value="Submit">
		


	</form>

</body>
</html>