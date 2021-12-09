<?php
session_start();
include "include/database.php";
$username=$_POST['username'];
$password=$_POST['password'];
$epass=md5($password);
$sql="select * from signup where MOBILE='$username' OR EMAIL='$username' AND PASSWORD='$epass'";
$res=$db->query($sql);
if($res->num_rows>0)
{
	$row=$res->fetch_assoc();
		
		$_SESSION["ID"]=$row["ID"];
		
		$_SESSION["NAME"]=$row["NAME"];
	
	

			echo "correct";			
	
	

}

else
{
	echo "User Name or Password Wrong";
}

?>