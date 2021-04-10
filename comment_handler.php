<?php
	require_once('admin/inc/db.php');

	$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$stmt = $conn->prepare("INSERT INTO comments (name, email, comment, blog_id) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $name, $email, $comment, $blog_id);

	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$blog_id=$_GET['blog'];

	$stmt->execute();

	header("location: blog_details.php?id=$blog_id#comments");
?>
