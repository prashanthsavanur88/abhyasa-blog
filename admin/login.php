  <!DOCTYPE html>
  <html lang="en">
  <?php
include("inc/head.php");
?>
    <body>
      <div id="frontpage">
        <div class="overlay">
          <div class="container-fluid">
            <div class="row">
              <div class="brand">
              </div>
              <div class="login_form">
                <h1>Login</h1>
                <form id="form1" method="post" action="index.php" name="loginform" class="mat-form">
                  <input class="center_auto login_input btn_control" type="text" name="user_name" required />
                  <input class="center_auto login_input btn_control" type="password" name="user_password" autocomplete="off" required />
                  <div style="text-align:center;">
                    <input type="submit" class=" rounded_button ground"  name="login" value="Log in" />
                  </div>
                  <span class="login_errors">
                    <?php
                    // show potential errors / feedback (from login object)
                    if (isset($login)) {
                        if ($login->errors) {
                            foreach ($login->errors as $error) {
                                echo $error;
                            }
                        }
                        if ($login->messages) {
                            foreach ($login->messages as $message) {
                                echo $message;
                            }
                        }
                    }
                    ?>
                  </span>
                </form>
              </div>
            </div>
            <!---main row-->
          </div>
        </div>
      </div>
      <!---main container-->
      <!--scripts------------------------------>hp
      <script src="assets/jquery-1.9.1.min.js"></script>
      <script src="assets/bootstrap.min.js"></script>
    </body>
  </html>
