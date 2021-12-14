<?php
session_start();
include "include/database.php";


$sql="delete from variation_value where SCID='$_GET[id]'";
	$db->query($sql);
	if($db)
	{
		header("location:variation.php?messs=<p class='bg-danger text-light text-center'> <b>Variation Value Deleted</b></p>");
	}
else
{
	echo "failed";
}




?>