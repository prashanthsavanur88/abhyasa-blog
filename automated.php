<pre>
<?php
	print_r($_POST);
	include('admin/inc/db.php');
	$sql="SELECT * from messages";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($result);
	print_r($row);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form class="" action="automated.php" method="post">
			<input type="text" name="name" value="">
			<br>
			<input type="text" name="contact" value="">
			<br>
			<input type="text" name="email" value="">
			<br>
			<input type="submit" name="" value="submit">
		</form>
	</body>
</html>
