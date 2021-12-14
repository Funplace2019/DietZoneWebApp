<?php
include "include/database.php";

session_start();



$flatno=$_POST['flatno'];
$stname=$_POST['stname'];
$landmark=$_POST['landmark'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];



$sql="update address set fn='$flatno',stn='$stname',lm='$landmark',city='$city',state='$state',pc='$pincode' where Session_ID='{$_SESSION["ID"]}'";

$stmt=$db->prepare($sql);
		$stmt->execute();
		{		
		
	echo "successfully Updated";
		
}





?>