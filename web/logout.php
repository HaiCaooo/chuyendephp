<?php
/*session_start();
session_destroy();
header("location: login1.php");*/
 
session_start(); 
 
if (isset($_COOKIE['userid'])){
    setcookie("userid", "", time()-3600); // xóa session login
}
header("Location: login1.php");

?>