<?php
  require_once('login_check.php');
  login_check();
?>
<?php
  $head="category";
  $head_span="add category to your blog";
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
          include("items/categories.php");
          ?>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </body>
</html>
