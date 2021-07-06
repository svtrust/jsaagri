<?php

include"db.php";
session_start();

$usertable="";

$uname = $_POST['uname'];
$upass = $_POST['upass'];

$sql="select * from ".$usertable." where name = '".$uname."' and password = '".$upass."'";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
            print_r($row);
     }

/*// exit(0);

 if ($result -> fetch_array()) {
	if(!session_id())
		{
		session_start();
		}
	else{
		session_destroy();
		session_start();
	}
 	$_SESSION['staffadmin'] = $uname;
 }
 else
 {
 	echo "Please provide proper login details";
 }*/

 echo "end";

?>