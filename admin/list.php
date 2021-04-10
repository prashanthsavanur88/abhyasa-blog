<?php
  require_once('login_check.php');
  require_once('inc/db.php');
  require_once('functions.php');
  login_check();
?>
<?php
  $type=$_GET['type'];
  if ($type=='media') {
    $head="All media";
    $head_span="list of all media";
  }
  elseif ($type=='posts') {
    $head="All posts";
    $head_span="list of all posts on website";
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
          if ($type=='media') {
            include("items/list_media.php");
          }
          elseif($type=='posts') {
            include("items/list_posts.php");
          }
          ?>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </body>
</html>
