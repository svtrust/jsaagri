<?php

include"db.php";

$usertable="";

$uname = $_POST['uname'];
$upass = $_POST['upass'];

$sql="select * from ".$usertable." where name = '".$uname."' and password = '".$upass."'";

$result = $conn->query($sql);

 if ($result -> fetch_array()) {
 	$_SESSION['staffadmin'] = $uname;
 }
 else
 {
 	echo "Please provide proper login details";
 }

?>