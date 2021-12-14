<?php
session_start();
include "include/database.php";


$sql="delete from sub_category where SCID='$_GET[id]'";
	$db->query($sql);
	if($db)
	{
		header("location:viewcategory.php?messs=<p class='bg-danger text-light text-center'> <b>Sub Category Deleted</b></p>");
	}
else
{
	echo "failed";
}




?>