<?php
  require_once('login_check.php');
  require_once('inc/db.php');
  require_once('functions.php');
  login_check();
?>
<?php
    $head="All Messages";
    $head_span="list of all messages and query from your website";
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
            include("items/list_messages.php");
          ?>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </body>
</html>
