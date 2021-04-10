<?php
	require_once('../inc/db.php');

	$title=$_POST['title'];
	$tag=$_POST['tag'];

	$sql="INSERT INTO categories (category_name, tags) VALUES ('$title','$tag')";
	$result=mysqli_query($link,$sql);

	header('location: ../categories.php');
?>
