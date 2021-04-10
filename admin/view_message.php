<?php
  require_once('login_check.php');
  login_check();
?>
<?php
$head="View Message";
$head_span="view queries or messages from your website";
$post_id=$_GET['id'];
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
          include_once('items/message_view.php');
          ?>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </body>
</html>
