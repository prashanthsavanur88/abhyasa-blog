<?php
  $sql = "SELECT * FROM posts where id='$post_id'";  $result = mysqli_query($link, $sql);  $row = mysqli_fetch_array($result);  $permalink=$row[0];  $sql2 = "SELECT * FROM package_details where id='$permalink'";  $result2 = mysqli_query($link, $sql2);  $row2 = mysqli_fetch_array($result);  $image=$row['image'];  if ($image=="") {    $image_final='assets/img/demopost.png';  }  else {    $image_final='uploads/'.$row['image'];}  if ($row['type']=='project') {    include('view_project.php');  }  else {    include('view_post.php');  }?>
<script src="http://cdn.ckeditor.com/4.5.4/standard/ckeditor.js"></script>
<script>    CKEDITOR.replace( 'description' );</script>
