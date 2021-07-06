<?php

include"db.php";
session_start();

$usertable="";

$uname = $_POST['uname'];
$upass = $_POST['upass'];

$sql="select * from ".$usertable." where name = '".$uname."' and password = '".$upass."'";

$result = $conn->query($sql);

print_r($result);

// exit(0);

 if ($result -> fetch_array()) {
	session_start();
 	$_SESSION['staffadmin'] = $uname;
 }
 else
 {
 	echo "Please provide proper login details";
 }

 echo "end";

?>