<?php
require_once("inc/db.php");
require_once("login/classes/Login.php");
function login_check(){
    if (version_compare(PHP_VERSION, '5.3.7', '<')) {
        exit("Sorry, this script cannot work on a PHP version smaller than 5.3.7 !");
    } else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
        require_once("libraries/password_compatibility_library.php");
    }
    $login = new Login();
    if ($login->isUserLoggedIn()!==true) {
        header("location:index.php");
        exit;
    }
  }
?>
