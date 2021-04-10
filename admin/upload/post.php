<?php
  require_once('../inc/db.php');
  $image_file=$_FILES['image_file'];
  $title=$_POST['title'];
  $description=$_POST['description'];
  $status=$_POST['status'];
  echo $type=$_POST['type'];
  $vdo_url=$_POST['vdo_url'];

  if (!empty($image_file)) {
    include('image_loop.php');
    $image_name=image_upload($image_file);
  }
  else{
    $image_name='';
  }
  $sql="INSERT into posts (title, image, text, status, type, vdo_url) values ('$title','$image_name','$description', '$status', '$type', '$vdo_url')";
  $result = mysqli_query($link, $sql);

  //redirect
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $backid=$row['id'];

    header("location: ../view.php?type=post&id=$backid");
?>
