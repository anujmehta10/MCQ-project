<?php

$siteurl = "http://localhost/training/test/";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>



