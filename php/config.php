<?php
  $hostname = "localhost";
  $username = "root";
  $password = "varunjain247Code";     // for production
  // $password = "";    // for localhost
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
