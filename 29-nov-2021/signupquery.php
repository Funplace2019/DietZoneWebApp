<?php
include "include/database.php";




$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$epass=md5($password);
$sql="insert into signup(ID,NAME,MOBILE,EMAIL,PASSWORD,LOG)values(null,'$name','$mobile','$email','$epass',now())";

$stmt=$db->prepare($sql);
		$stmt->execute();
		{		
		
	echo "successfully Register";
		
}





?>