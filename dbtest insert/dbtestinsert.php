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

$sql = "INSERT INTO `test` (`id`, `name`) VALUES (NULL, 'asdasd');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//INSERT INTO `test` (`id`, `name`) VALUES (NULL, 'sadfas');
$conn->close();
?>