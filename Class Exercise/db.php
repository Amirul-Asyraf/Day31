<?php
  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "mysejahteri";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  //MySQL Error
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully<br>";
?>