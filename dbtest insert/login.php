<?php

include"db.php";

$usertable="";

$uname = $_POST['uname'];
$upass = $_POST['upass'];

$sql="select * from ".$usertable." where name = '".$uname."' and password = '".$upass."'";

$result = mysql_query($sql);

 if (mysql_fetch_row($result)) {
 	// code...
 	$_SESSION['staffadmin'] = $uname;
 }
 else
 {
 	echo "Please provide proper login details";
 }

?>