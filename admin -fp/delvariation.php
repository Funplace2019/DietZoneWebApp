<?php
session_start();
include "include/database.php";


$sql="delete from variation where ID='$_GET[id]'";
	$db->query($sql);
	if($db)
	{
	$sql="delete from variation_value where CATEGORY_ID='$_GET[id]'";
	$db->query($sql);
	if($db)
	{
		
		header("location:variation.php?mess=<p class='bg-danger text-light text-center'> <b> variation Deleted</b></p>");
	}
		
	}
else
{
	echo "failed";
}




?>