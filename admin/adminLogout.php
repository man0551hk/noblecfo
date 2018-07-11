<?PHP
session_start();
session_destroy();
unset($_COOKIE['adminID']);
setcookie("adminID", "", time()-3600);
?>
<meta http-equiv='refresh' content='0;url=login.php'>

