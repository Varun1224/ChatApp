<?php
  $hostname = "localhost";
  $username = "root";
  $password = "varunjain247Code"; // don't forget to give password here before pushing it to the machine
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
