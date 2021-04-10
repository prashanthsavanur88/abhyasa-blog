<?php
  require_once('login_check.php');
  login_check();
?>
<?php
  $head="Dashboard";
  $head_span="information about your website";
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
          ?>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </body>
</html>
