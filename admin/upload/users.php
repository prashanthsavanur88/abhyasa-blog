<?php
	require_once('../inc/db.php');

	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$aboutuser=$_POST['aboutuser'];
	$avatar=$_FILES['avatar'];

	include_once('image_loop.php');
	$final_image=image_upload($avatar);

	if (isset($_GET['update'])) {
		$update_id=$_GET['update'];
		$sql="SELECT image from authors where id='$update_id'";
		$result=mysqli_query($link,$sql);
		$row=mysqli_fetch_assoc($result);
		$al_image=$row['image'];
		if ($final_image==='') {
			$final_image=$al_image;
		}
		$sql="UPDATE authors set name='$name', contact='$contact', email='$email', aboutuser='$aboutuser', image='$final_image' where id='$update_id'";
		$result=mysqli_query($link,$sql);
	}
	else {
		$sql="INSERT INTO authors (name, contact, email, aboutuser, image) VALUES ('$name', '$contact', '$email', '$aboutuser', '$final_image')";
		$result=mysqli_query($link,$sql);

		$sql="SELECT id from authors order by id desc limit 1";
		$result=mysqli_query($link,$sql);
		$row=mysqli_fetch_assoc($result);
		$update_id=$row['id'];
	}

	header("location: ../user_view.php?id=$update_id");
?>
