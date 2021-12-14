<?php
include "include/database.php";




$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$enabled=$_POST['enabled'];



$sql="insert into signup(ID,NAME,MOBILE,EMAIL,PASSWORD,NEWSLETTER,LOG)values(null,'$name','$mobile','$email','$password','$enabled',now())";

$stmt=$db->prepare($sql);
		$stmt->execute();
		{		
		
	echo "successfully Register";
		
}





?>