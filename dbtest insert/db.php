<?php
$servername = "localhost";
$username = "dbusername";
$password = "GxPjjwUxxev-";
$dbname = "jsacollege";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>