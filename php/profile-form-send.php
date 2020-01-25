<?php

require_once("session.php");

echo("test");

$_SESSION['COUNTRY'] = $_POST['country'];

//echo $_SESSION['COUNTRY'];

$host  = $_SERVER['HTTP_HOST'];
//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$extra = 'profile.php';
header("Location: http://$host/ictgroup_portal/$extra");
exit;
  


?>