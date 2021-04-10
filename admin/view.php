<?php
  require_once('login_check.php');
  login_check();
?>
<?php
  $post_id=$_GET['id'];
  $sql="select * from posts where id='$post_id'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  $type=$row['type'];
  $head="view media";
  $head_span="view or edit media";
  if ($type=='post') {
    $head="View post";
    $head_span="view or edit post";
  }
  elseif ($type=='package') {
    $head="View Package";
    $head_span="view or edit package";
  }
  elseif ($type=='page') {
    $head="View page";
    $head_span="view or edit page";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("inc/head.php");
    ?>
  </head>
  <body>
    <?php
      include("inc/nav.php");
    ?>
    <div id="content">
      <div id="toggle_content" class="open">
        <div class="contents">
          <?php
          include("inc/nav_top.php");
          include("inc/banner.php");
          include_once('items/post_view.php');
          ?>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </body>
</html>
