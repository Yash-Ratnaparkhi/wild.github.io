<?php

$Name=$_POST['name'];
$Email=$_POST['email'];
$Password=$_POST['pwd'];
$serverhost="localhost:3306";
$username= "root";
$password="root";
$database="mydb1";
$con= new mysqli($serverhost,$username,$password,$database);
	

	$sql= "INSERT INTO `wild` VALUES ('$Name','$Email','$Password')";
	if ($con->query($sql)===TRUE) {
		echo "inserted";
		header("Location: webpage1.php");
	}
	else
	{
		echo "connection error";
	}
	

?>