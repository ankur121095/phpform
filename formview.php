<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Display</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<center><h1>Data Display</h1></center>
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>College</th>
				<th>Gender</th>
				<th>Education</th>
			</tr>
			<?php
			include "dbcon.php";
			$id = $_GET['v'];
			$a = "select * from form1 where id = $id";
			$result = mysqli_query($con,$a);
			$f = mysqli_fetch_array($result);	 
			?>
			<tr>
				<td><?php echo $f['id'] ?></td>
				<td><?php echo $f['name'] ?></td>
				<td><?php echo $f['college'] ?></td>
				<td><?php echo $f['gender'] ?></td>
				<td><?php echo $f['education'] ?></td>
			</tr>
		</table>
	</div>

</body>
</html>