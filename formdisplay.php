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
				<th>Action</th>
			</tr>
			<?php
			include "dbcon.php";
			$a = "select * from form1";
			$result = mysqli_query($con,$a);
			while ($f = mysqli_fetch_array($result)) {	 
			?>
			<tr>
				<td><?php echo $f['id'] ?></td>
				<td><?php echo $f['name'] ?></td>
				<td>
					<a href="formview.php?v=<?php echo $f['id'] ?>" class="btn btn-info">View</a>
					<a href="formedit.php?a=<?php echo $f['id'] ?>" class="btn btn-info">Edit</a>
					<a href="formdelete.php?i=<?php echo $f['id'] ?>" class="btn btn-info">Delete</a>
				</td>
			</tr>
            <?php 
            }
            ?>
		</table>
	</div>

</body>
</html>