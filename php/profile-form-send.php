<?php

  require_once("session.php");

  echo("test");
  
  $_SESSION['COUNTRY'] = $_POST['country'];

  echo $_SESSION['COUNTRY'];
  


?>