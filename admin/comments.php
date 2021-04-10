<?php
  require_once('login_check.php');
  require_once('inc/db.php');
  require_once('functions.php');
  login_check();
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
			$head='comments';
			$head_span='comments on blog posts';
    ?>
    <div id="content">
      <div id="toggle_content" class="open">
        <div class="contents">
          <?php
	          include("inc/nav_top.php");
	          include("inc/banner.php");
	          include("items/comments.php");
          ?>
        </div>
      </div>
    </div>
    <?php
      include("inc/footer.php");
    ?>
  </body>
</html>
