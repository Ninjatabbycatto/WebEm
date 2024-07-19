<?php
$connection = new mysqli("localhost", "root", "", "WebEM");
  // Check connection status
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    //echo "Connection established.";
}