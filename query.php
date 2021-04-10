<?php
	require_once('admin/inc/db.php');

	$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	$stmt = $conn->prepare("INSERT INTO messages (name, email, contact, subject, message) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $name, $email, $contact, $subject, $message);

	$name=$_POST['nicename'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$stmt->execute();

	header("location: index.php?t=1#contact");
?>
