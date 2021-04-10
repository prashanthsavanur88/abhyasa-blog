<?php
  require_once('../inc/db.php');
  require_once('../functions.php');
  $title=$_POST['title'];
  $description=$_POST['description'];
  $cat=$_POST['type'];
  $post_id=$_GET['id'];
  $status=$_POST['status'];
  $date=$_POST['date'];
  $vdo_url=$_POST['vdo_url'];
  $category=$_POST['category'];
  $excerpt=$_POST['excerpt'];
  $author=$_POST['author'];

  $image_file=$_FILES['image_file'];
  $image_file_addon=$_FILES['image_file_addon'];

  include('image_loop.php');
  $image_name=image_upload($image_file);
    if (!empty($image_name)) {
      $sql="SELECT * FROM posts where id='$post_id'";
      $result=mysqli_query($link,$sql);
      $row=mysqli_fetch_assoc($result);
      $old_image=$row['image'];
      if (!empty($old_image)) {
        unlink('../uploads/'.$old_image);
      }

      $sql="UPDATE posts set image='$image_name' where id='$post_id'";
      data_update($sql);
    }
  $image_addon_name=image_upload($image_file_addon);
  if (!empty($image_addon_name)) {
    $sql="INSERT into media (cat,image_name,project_id) values ('addon','$image_addon_name','$post_id')";
    mysqli_query($link,$sql);
  }

   $sql="UPDATE posts SET title='$title',cat='$category', excerpt='$excerpt', text='$description', date='$date',vdo_url='$vdo_url', status='$status', type='$cat', parent='$author' where id='$post_id'";
  $result = mysqli_query($link, $sql);

 header("location: ../view.php?type=post&id=$post_id");
?>
