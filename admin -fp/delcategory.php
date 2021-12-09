<?php
session_start();
include "include/database.php";


$sql="delete from category where ID='$_GET[id]'";
	$db->query($sql);
	if($db)
	{
	$sql="delete from sub_category where CATEGORY_ID='$_GET[id]'";
	$db->query($sql);
	if($db)
	{
		
		header("location:viewcategory.php?mess=<p class='bg-danger text-light text-center'> <b> Category Deleted</b></p>");
	}
		
	}
else
{
	echo "failed";
}




?>