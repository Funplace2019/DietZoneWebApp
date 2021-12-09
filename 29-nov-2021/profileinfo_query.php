<?php
include "include/database.php";

session_start();



$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];



$sql="update signup set NAME='$name',MOBILE='$mobile',EMAIL='$email' where ID='{$_SESSION["ID"]}'";

$stmt=$db->prepare($sql);
		$stmt->execute();
		{		
		
	echo "successfully Updated";
		
}





?>