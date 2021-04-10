<?php
  require_once('../inc/db.php');
  $image_file=$_FILES['image_file'];  $caption=$_POST['name'];  $description=$_POST['des'];  $image_cat=$_POST['cat'];  $event_date=$_POST['event_date'];
  include('image_loop.php');

    $image_name=image_upload($image_file);    if (!empty($image_name)) {       $sql="INSERT into media (cat, caption, text, image, event_date) values ('$image_cat','$caption','$description', '$image_name','$event_date')";      $result = mysqli_query($link, $sql);    }

  header("location:../media.php?type=add");
?>