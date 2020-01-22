<?php

  //Connection between localhost or hosted server
  if ($_SERVER["SERVER_NAME"] == "localhost" ) {
    $con = mysqli_connect("localhost","root","mysql","ictportal");
  } elseif ($_SERVER["SERVER_NAME"] == "s8.sonnyluu.nl" ) {
    $con = mysqli_connect("localhost","root","","ictportal");
  }

  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
    //echo "Connected to MySQL"; 
    }
  
?>